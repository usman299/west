<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderby('created_at', 'DESC')->get();
        return view('admin.product.index', compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    public function store(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->oldprice = $request->oldprice;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->quantity = $request->quantity;

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'photo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'product/';
            $image1->move($destinationPath, $name);
            $product->photo = 'product/' . $name;
        }

        if($request->hasfile('gallery')){
            foreach($request->file('gallery') as $image)
            {
                $name = time().'gallery'.'.'.$image->getClientOriginalName();
                $destinationPath ='gallery/';
                $image->move($destinationPath, $name);
                $data9[] = $name;
                $product->gallery = json_encode($data9);
            }
        }

        $product->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('product.index')->with($notification);
    }
    public function edit($id){
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product', 'categories'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->title = $request->title;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->oldprice = $request->oldprice;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->quantity = $request->quantity;

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'photo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'product/';
            $image1->move($destinationPath, $name);
            $product->photo = 'product/' . $name;
        }

        if($request->hasfile('gallery')){
            foreach($request->file('gallery') as $image)
            {
                $name = time().'gallery'.'.'.$image->getClientOriginalName();
                $destinationPath ='gallery/';
                $image->move($destinationPath, $name);
                $data3[] = $name;
                $product->gallery = json_encode($data3);
            }
        }

        $product->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        $notification = array(
            'messege' => 'Supprimé avec succès',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
