<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function products(){
        $products = Product::all();
        return response()->json($products);
    }
    public function product($id){
        $product = Product::find($id);
        return response()->json($product);
    }
    public function order(Request $request){

        $order = new Order();
        $order->user_id = $request->user_id;
        $order->fname = $request->cfname;
        $order->lname = $request->clname;
        $order->email = $request->cemail;
        $order->phone = $request->cphone;
        $order->address = $request->caddress;
        $order->notes = $request->notes;
        $order->total = $request->total;
        $order->postal = $request->postal;
        $order->products = $request->cartitems;
        $order->website = $request->website;
        $order->paymentstatus = '1';
        $order->order_number = "ON-".rand(100000000, 900000000);
        $order->save();
        return response()->json(['success' => 'Success']);
    }
    public function websiteOrders($status, $website){
        $orders = Order::where('website', $website)->where('status', $status)->where('paymentstatus', 1)->get();
        return response()->json($orders);
    }
    public function orderDetails($id){
        $order = Order::find($id);
        return response()->json($order);
    }
    public function orderStatus($id){
        $order = Order::find($id);
        $order->status = '2';
        $order->update();
        return response()->json(['success' => 'success']);

    }
}
