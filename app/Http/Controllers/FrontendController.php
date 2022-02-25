<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Coupon;
use App\Order;
use App\Product;
use App\User;
use App\Website;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Session;
class FrontendController extends Controller
{
    public function index(){
  /*      $client = new Client();
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/products');*/

      /*  $response = Http::get('https://mploya.com/api/all/jobs/frontend');
        foreach ($response->json() as $ob){
            dd($ob['id']);
        }
        dd($response->json());*/
      /* $response = Http::get('http://127.0.0.1:8000/api/products');
        foreach ($response->json() as $ob){
            dd($ob);
        }
        dd($response->json());*/

        $content = Website::find(1);
        $products = Product::orderBy('created_at', 'DESC')->get();
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        return view('front.index', compact('content', 'products', 'blogs'));
    }
    public function products(){
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('front.products', compact('products'));
    }
    public function contact(){
        $categories = Category::all();
        $content = Website::find(1);
        return view('front.contact', compact('content', 'categories'));
    }
    public function product($id){
        $product = Product::find($id);
        return view('front.product', compact('product'));
    }
    public function admin(){
        return view('auth.admin');
    }
    public function blog($id){
        $blog = Blog::find($id);
        return view('front.blog', compact('blog'));
    }
    public function checkout(){
        $content = Website::find(1);
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        $user = Auth::user();
        if(isset($total)){
            \Stripe\Stripe::setApiKey (env('STRIPE_SECRET_KEY'));
            $payment_intent = \Stripe\PaymentIntent::create([
                'amount' => ($total) *100,
                'currency' => 'EUR'
            ]);
        }
        $intent = $payment_intent->client_secret;
        return view('front.checkout', compact('cartitems', 'cartTotalQuantity', 'total', 'user', 'intent', 'content'));
    }
    public function addtocart(Request $request){
        $product = Product::where('id', $request->product_id)->first();
        \Cart::add($product->id, $product->title, $product->price, $request->quantity);
        return redirect()->route('cartitems');
    }
    public function cartitems(){
        $content = Website::find(1);
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        $cartSubTotal = \Cart::getSubTotal();
        return view('front.cart', compact('cartitems', 'cartTotalQuantity', 'total', 'cartSubTotal', 'content'));
    }
    public function removecart(Request $request){
        \Cart::remove($request->id);
        return redirect()->back();
    }
    public function userDashboard(){
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->where('paymentstatus', '1')->get();
        return view('user.dashboard', compact('user', 'orders'));
    }
    public function profileupdate(Request $request){
        $id = Auth::user();
        $user = User::where('id', $id->id)->first();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->country = $request->country;

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'profile' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profile/';
            $image1->move($destinationPath, $name);
            $user->image = 'profile/' . $name;
        }

        if ($request->oldpassword){
            $oldpass = $request->oldpassword;
            $pass = $user->password;
            if (Hash::check($oldpass , $pass)) {
                $user->password = Hash::make($request->newpassword);
                $user->save();
                Auth::logout();
                $notification = array(
                    'messege'=>'Le mot de passe a été changé avec succès ! Connectez-vous maintenant avec votre nouveau mot de passe',
                    'alert-type'=>'success'
                );
                return Redirect()->route('login')->with($notification);
            }else{
                $notification=array(
                    'messege'=>'Lancien mot de passe ne correspond pas!',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
        }


        $user->update();

        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function checkoutSubmit(Request $request){
        $cartitems = \Cart::getContent();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->notes = $request->notes;
        $order->total = $request->total;
        $order->postal = $request->postal;
        $order->products = $cartitems;

        $order->order_number = "ON-".rand(100000000, 900000000);
        $order->save();

        return $this->paymentsuccess($order->id,'order');
    }
    public function paymentsuccess($id, $type){
        $order = Order::find($id);
        $order->paymentstatus = '1';
        $order->update();

        foreach(json_decode($order->products) as $item){
            $product = Product::find($item->id);
            if ($product){
                $product->quantity = $product->quantity - $item->quantity;
                $product->update();
            }

        }

        \Cart::clear();
        return view('front.paymentsuccess', compact('order'));
    }
    public function orderDetails($id){
        $order = Order::where('id', $id)->first();
        return view('user.orderdetails', compact('order'));
    }
    public function redeemcoupon(Request $request){
        $coupon = Coupon::where('code', $request->code)->first();
        if ($coupon){
            if (Session::get('coupon')){
                return response()->json(['error' => 'Vous avez déjà appliqué le code une fois']);
            }else{
                $total = \Cart::getTotal();
                Session::put('before_discount_total', $total);

                $coupon101 = new CartCondition(array(
                    'name' => 'COUPON '.$coupon->discount.'%',
                    'type' => 'coupon',
                    'value' => '-'.$coupon->discount.'%',
                ));
                $cartitems = \Cart::getContent();
                foreach ($cartitems as $item){
                    \Cart::addItemCondition($item->id, $coupon101);
                }
                Session::put('coupon', $coupon->discount);
                return response()->json(['success' => 'Code promotionnel appliqué avec succès', 'discount' => $coupon->discount]);
            }
        }else{
            return response()->json(['error' => 'Le code est invalide ou expire']);
        }
    }
    public function cartReset(){
        \Cart::clear();
        Session::forget('coupon');
        Session::forget('before_discount_total');
        return redirect()->back();
    }
}
