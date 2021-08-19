<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\User;
use Carbon\Carbon;
class SalesController extends Controller
{
    public function SalesView(){

      $saless =  Sales::latest()->get();
      return view('admin.sales_view',compact('saless'));
    }


     public function SalesCreate(){

        $users = User::latest()->get();
      return view('admin.sales_create',compact('users'));

    }


    public function SalesStore(Request $request){
        Sales::insert([
     'user_id'=>$request->user_id,
     'orid'=>$request->orid,
     'product_id'=>$request->product_id,
     'code'=>$request->code,
     'prc'=>$request->prc,
     'cid'=>$request->cid,
    

     ]);       
     return redirect()->route('user-view');

    }

    public function SalesEdit($id){

    $saless = Sales::findOrFail($id);
    return view('admin.sales_edit',compact('saless'));

    }

    public function SalesUpdate(Request $request){
        $pro_id = $request->id;
        Sales::findOrFail($pro_id)->update([
     'user_id'=>$request->user_id,
     'orid'=>$request->orid,
     'product_id'=>$request->product_id,
     'code'=>$request->code,
     'prc'=>$request->prc,
     'cid'=>$request->cid,
        

     ]);       
     return redirect()->route('sales-view');


    }


    public function SalesDelete($id){
      Sales::findOrFail($id)->delete(); 
      return redirect()->back();   

    }




}
