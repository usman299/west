<?php

namespace App\Http\Controllers;

use App\Order;
use App\Reservation;
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
        $reservation = Reservation::where('status','=','0')->latest()->get();
        return view('admin.reservation.status',compact('reservation') );
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

}
