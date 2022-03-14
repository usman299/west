<?php

namespace App\Http\Controllers;

use App\Order;
use App\Reservation;
use App\Wallet;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderby('created_at', 'DESC')->where('status', '0')->where('website', '=', 'main')->where('paymentstatus', 1)->get();
        return view('admin.order.index', compact('orders'));
    }
    public function complete(){
        $orders = Order::orderby('created_at', 'DESC')->where('status', '2')->where('website', '=', 'main')->where('paymentstatus', 1)->get();
        return view('admin.order.index', compact('orders'));
    }
    public function clientsindex(){
        $orders = Order::orderby('created_at', 'DESC')->where('status', '0')->where('website', '!=', 'main')->where('paymentstatus', 1)->get();
        return view('admin.order.clientsindex', compact('orders'));
    }
    public function clientscomplete(){
        $orders = Order::orderby('created_at', 'DESC')->where('status', '2')->where('website', '!=', 'main')->where('paymentstatus', 1)->get();
        return view('admin.order.clientsindex', compact('orders'));
    }
    public function view($id){
        $order = Order::find($id);
        return view('admin.order.view', compact('order'));
    }
    public function status($id){
        $order = Order::find($id);
        $order->status = '2';
        $order->update();

        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function adminReservation(){
         $reservation = Reservation::all();
        return view('admin.reservation.index',compact('reservation') );
    }
    public function detailsReservation(){
        $users = Reservation::where('status','=','0')->pluck('user_id')->unique();

        return view('admin.reservation.user',compact('users') );
    }
    public function viewDetailsReservation($id){

        $reservation = Reservation::latest()->where('user_id','=',$id)->get();

        return view('admin.reservation.detials',compact('reservation','id') );
    }
    public function detailsReservationCompelte(){
        $reservation = Reservation::where('status','=','1')->latest()->get();
        return view('admin.reservation.status',compact('reservation') );
    }
    public function reservationStatus($id){
        $reservation = Reservation::where('id','=',$id)->first();
        $reservation->status = 1;
        $reservation->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function pendingPaymant(Request $request){

         $walet = new Wallet();
         $res = Reservation::where('id','=',$request->reservation_id)->first();

            if($res->rprice>=$request->price){
                $res->rprice = $res->rprice - $request->price;
                $res->save();
                $walet->r_price = $res->rprice;
                $walet->user_id = $request->user_id;
                $walet->pay_price = $request->price;
                $walet->pay_total = $res->tprice - $res->rprice;;
                $walet->reservation_id = $request->reservation_id;
                $walet->save();
                $notification = array(
                    'messege' => 'Ajouté avec succès!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);

            }
            else{
                $notification = array(
                    'messege' => 'Votre prix est élevé!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }


    }
    public function reservationHistory($r_id ,$id){
        $reservation = Wallet::where('reservation_id','=',$r_id)->where('user_id','=',$id)->get();
        $res = Reservation::where('id','=',$r_id)->first();
        return view('admin.reservation.history',compact('reservation','r_id','id','res'));
    }

}
