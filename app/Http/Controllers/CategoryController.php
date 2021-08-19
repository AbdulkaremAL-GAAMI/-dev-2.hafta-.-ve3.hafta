<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
class CategoryController extends Controller
{
    public function CategoryView(){

    $categories = Category::latest()->get();
    return view('admin.category_view',compact('categories'));

    }

    public function CategoryCreate(){

    return view('admin.category_create');

    }

    public function CategoryStore(Request $request){

    Category::insert([
        'title'=> $request->title,
        'description'=>$request->description,
        'slug'=>$request->slug,
        'status'=>$request->status,
        'created_at'=>Carbon::now(),
    ]);

    return redirect()->route('category-view');

    }

    public function CategoryEdit($id){
    $categories = Category::findOrFail($id);
    return view('admin.category_update',compact('categories'));

    }



    public function CategoryDelete($id){
      Category::findOrFail($id)->delete();
      
     return redirect()->route('category-view');


    }
    
  public function CategoryUpdate(Request $request){
    $cat_id= $request->id;

    Category::findOrFail($cat_id)->update([
        'title'=> $request->title,
        'description'=>$request->description,
        'slug'=>$request->slug,
        'status'=>$request->status,
      
    ]);

    return redirect()->route('category-view');

  }

}
