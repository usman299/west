<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Website;
use Illuminate\Http\Request;

class ContentController extends Controller
{
   public function settings(){
       $gs = Website::find(1);
       return view('admin.settings.index', compact('gs'));
   }
   public function slider(){
       $gs = Website::find(1);
       return view('admin.settings.slider', compact('gs'));
   }
   public function mission(){
       $gs = Website::find(1);
       return view('admin.settings.mission', compact('gs'));
   }
   public function video(){
       $gs = Website::find(1);
       return view('admin.settings.video', compact('gs'));
   }
   public function about(){
       $gs = Website::find(1);
       return view('admin.settings.about', compact('gs'));
   }
   public function blog(){
       $blog = Blog::all();
       return view('admin.settings.blog', compact('blog'));
   }
   public function blogStore(Request $request){
       $blog = new Blog();
       $blog->title = $request->title;
       $blog->description = $request->description;

       if ($request->hasfile('photo')) {
           $image1 = $request->file('photo');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $blog->image = 'allimages/' . $name;
       }
       $blog->save();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
   public function blogdelete($id){
       $blog = Blog::find($id);
       $blog->delete();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
   public function sliderStore(Request $request){
       $gs = Website::find(1);
       if ($request->hasfile('simage1')) {
           $image1 = $request->file('simage1');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $gs->simage1 = 'allimages/' . $name;
       }
       if ($request->hasfile('simage2')) {
           $image2 = $request->file('simage2');
           $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image2->move($destinationPath, $name2);
           $gs->simage2 = 'allimages/' . $name2;
       }
       if ($request->hasfile('simage3')) {
           $image3 = $request->file('simage3');
           $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image3->move($destinationPath, $name3);
           $gs->simage3 = 'allimages/' . $name3;
       }
       $gs->update();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
   public function settingStore(Request $request){
       $gs = Website::find(1);
       $gs->sitename = $request->sitename;
       $gs->email = $request->email;
       $gs->phone = $request->phone;
       $gs->address = $request->address;
       $gs->time = $request->time;
       $gs->facebook = $request->facebook;
       $gs->instagram = $request->instagram;
       $gs->footer_text = $request->footer_text;
       $gs->discount = $request->discount;
       if ($request->hasfile('logo')) {
           $image1 = $request->file('logo');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $gs->logo = 'allimages/' . $name;
       }
       if ($request->hasfile('footer_logo')) {
           $image1 = $request->file('footer_logo');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $gs->footer_logo = 'allimages/' . $name;
       }
       $gs->update();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
   public function missionStore(Request $request){
       $gs = Website::find(1);
       $gs->mission = $request->mission;
       $gs->mtitle1 = $request->mtitle1;
       $gs->mtitle2 = $request->mtitle2;

       if ($request->hasfile('mimage1')) {
           $image1 = $request->file('mimage1');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $gs->mimage1 = 'allimages/' . $name;
       }
       if ($request->hasfile('mimage2')) {
           $image1 = $request->file('mimage2');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $gs->mimage2 = 'allimages/' . $name;
       }
       $gs->update();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
   public function videoStore(Request $request){
       $gs = Website::find(1);
       $gs->video = $request->video;

       if ($request->hasfile('vimage')) {
           $image1 = $request->file('vimage');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $gs->vimage = 'allimages/' . $name;
       }
       $gs->update();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
   public function aboutStore(Request $request){
       $gs = Website::find(1);
       $gs->about = $request->about;

       if ($request->hasfile('aboutimage')) {
           $image1 = $request->file('aboutimage');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $gs->aboutimage = 'allimages/' . $name;
       }
       $gs->update();
       $notification = array(
           'messege' => 'Sauvegarde réussie!',
           'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);
   }
}
