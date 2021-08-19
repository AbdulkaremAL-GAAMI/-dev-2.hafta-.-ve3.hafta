<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
     public function ProductView(){

    $products = Product::latest()->get();
    return view('admin.product_view',compact('products'));

    }

    public function ProductCreate(){
      $categories = Category::latest()->get();  
     return view('admin.product_create',compact('categories'));

    }

    public function ProductStore(Request $request){
    Product::insert([

    'category_id'=>$request->category_id ,
    'unicode'=>$request->unicode,
    'slug'=>$request->slug,
    'title'=>$request->title,
    'description'=>$request->description, 
    'order'=>$request->order, 
    'status'=>$request->status,
    'prc'=>$request->prc,
    'cid'=>$request->cid,


    ]);


    return redirect()->route('product-view');

    }




    public function ProductEdit($id){
    $categories = Category::latest()->get();  

    $products = Product::findOrFail($id);
    return view('admin.product_update',compact('products','categories'));

    }


    public function ProducUpdate(Request $request){
    $pro_id = $request->id;
 Product::findOrFail($pro_id)->update([

    'category_id'=>$request->category_id ,
    'unicode'=>$request->unicode,
    'slug'=>$request->slug,
    'title'=>$request->title,
    'description'=>$request->description, 
    'order'=>$request->order, 
    'status'=>$request->status,
    'prc'=>$request->prc,
    'cid'=>$request->cid,


    ]);


    return redirect()->route('product-view');

    }

    public function ProducDelete($id){
        Product::findOrFail($id)->delete();

        return redirect()->route('product-view');
    }




}
