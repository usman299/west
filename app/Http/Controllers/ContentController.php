<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Home;
use App\Offers;
use App\Options;
use App\Packges;
use App\Place;
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
       $gs->package_title = $request->package_title;
       $gs->package_description = $request->package_description;
       $gs->phone = $request->phone;
       $gs->address = $request->address;
       $gs->time = $request->time;
       $gs->facebook = $request->facebook;
       $gs->instagram = $request->instagram;
       $gs->footer_text = $request->footer_text;
       $gs->discount = $request->discount;
       $gs->offer_title = $request->offer_title;
       $gs->offer_title1 = $request->offer_title1;
       $gs->offer_description = $request->offer_description;
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

       if ($request->hasfile('image')) {
           $image1 = $request->file('image');
           $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
           $destinationPath = 'allimages/';
           $image1->move($destinationPath, $name);
           $gs->image = 'allimages/' . $name;
       }
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
    public function offersCreate(){
       return view('admin.settings.offers.create');
    }
    public function offers(){
        $offers = Offers::all();
        return view('admin.settings.offers.index', compact('offers'));
    }
    public function offersStore(Request $request){

        $offers = new Offers();
        $offers->title1 = $request->title1;
        $offers->description = $request->description;

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $offers->image = 'allimages/' . $name;
        }
        foreach($request->title as $title)
        {
            $data[] = $title;
            $offers->title = json_encode($data);
        }
        foreach($request->price as $price)
        {
            $data2[] = $price;
            $offers->price = json_encode($data2);
        }
        foreach($request->discount as $discount)
        {
            $data3[] = $discount;
            $offers->discount = json_encode($data3);
        }
        $offers->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function offersEdit($id){
        $offers = Offers::where('id','=',$id)->first();
        return view('admin.settings.offers.edit', compact('offers'));
    }
    public function offersUpdate(Request $request,$id){
        $offers = Offers::where('id','=',$id)->first();
        $offers->title1 = $request->title1;
        $offers->description = $request->description;

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $offers->image = 'allimages/' . $name;
        }
        foreach($request->title as $title)
        {
            $data[] = $title;
            $offers->title = json_encode($data);
        }
        foreach($request->price as $price)
        {
            $data2[] = $price;
            $offers->price = json_encode($data2);
        }
        foreach($request->discount as $discount)
        {
            $data3[] = $discount;
            $offers->discount = json_encode($data3);
        }
        $offers->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function placeIndex(){
        $place = Place::latest()->get();
        return view('admin.settings.city.index', compact('place'));
    }
    public function placeStore(Request $request){
        $place = new Place();
        $place->price = $request->price;
        $place->place = $request->place;
        $place->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function placeEdit($id){
        $place = Place::where('id','=',$id)->first();

        return view('admin.settings.city.edit', compact('place'));
    }

    public function placeUpdate(Request $request,$id){
        $place = Place::where('id','=',$id)->first();
        $place->price = $request->price;
        $place->place = $request->place;
        $place->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('place.index')->with($notification);
    }
    public function placeDelete($id){
        $place = Place::where('id','=',$id)->first();
        $place->delete();
        $notification = array(
            'messege' => 'Supprimer le succès !',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }
    public function homeIndex(){
        $place = Home::latest()->get();
        $city = Place::latest()->get();
        return view('admin.settings.home.index', compact('place','city'));
    }
    public function homeStore(Request $request){
        $place = new Home();
        $place->price = $request->price;
        $place->place_id = $request->place_id;
        $place->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function homeEdit($id){
        $place = Home::where('id','=',$id)->first();
        $city = Place::latest()->get();

        return view('admin.settings.home.edit', compact('place','city'));
    }

    public function homeUpdate(Request $request,$id){
        $place = Home::where('id','=',$id)->first();
        $place->price = $request->price;
        $place->place_id = $request->place_id;
        $place->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('home.index')->with($notification);
    }
    public function homeDelete($id){
        $place = Home::where('id','=',$id)->first();
        $place->delete();
        $notification = array(
            'messege' => 'Supprimer le succès !',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function optionIndex(){
        $option = Options::latest()->get();
        return view('admin.options.index', compact('option'));
    }
    public function optionStore(Request $request){
        $option = new Options();
        $option->price = $request->price;
        $option->name = $request->name;
        $option->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function optionEdit($id){
        $option = Options::where('id','=',$id)->first();

        return view('admin.options.edit', compact('option'));
    }

    public function optionUpdate(Request $request,$id){
        $option = Options::where('id','=',$id)->first();
        $option->price = $request->price;
        $option->name = $request->name;
        $option->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('option.index')->with($notification);
    }
    public function optionDelete($id){
        $option = Options::where('id','=',$id)->first();
        $option->delete();
        $notification = array(
            'messege' => 'Supprimer le succès !',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function packges(){
        $pkg = Packges::all();
        return view('admin.packges.index', compact('pkg'));
    }
    public function packgesStore(Request $request){

        $pkg = new Packges();
        $pkg->title = $request->title;
        $pkg->price = $request->price;
        $pkg->discount = $request->discount;

        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $pkg->image = 'allimages/' . $name;
        }

        $pkg->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function packgesEdit($id){
        $pkg = Packges::where('id','=',$id)->first();
        return view('admin.packges.edit', compact('pkg'));
    }
    public function packgesUpdate(Request $request,$id){
        $pkg = Packges::where('id','=',$id)->first();
        $pkg->title = $request->title;
        $pkg->price = $request->price;
        $pkg->discount = $request->discount;

        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $pkg->image = 'allimages/' . $name;
        }

        $pkg->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
