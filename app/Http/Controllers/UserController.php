<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('admin.user.create');
    }
    public function index(){
        $users = User::where('role', 1)->get();
        return view('admin.user.index', compact('users'));
    }
    public function clients(){
        $users = User::where('role', 2)->get();
        return view('admin.user.clients', compact('users'));
    }
    public function store(Request$request){
        $validator=$request->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function coupon(){
        $coupon = Coupon::all();
        return view('admin.user.coupon', compact('coupon'));
    }
    public function couponstore(Request $request){
        $couponstore = new Coupon();
        $couponstore->title = $request->title;
        $couponstore->discount = $request->discount;
        $couponstore->code = $request->code;
        $couponstore->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function couponDelete($id){
        $couponDelete = Coupon::find($id);
        $couponDelete->delete();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
