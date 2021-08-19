<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function UserView(){
        $users = User::latest()->get();

      return view('admin.user_view',compact('users'));
    }



    public function UserCreate(){

    return view('admin.user_create');


    }
    public function UserStore(Request $request){

     User::insert([
     'name'=>$request->name,
     'email'=>$request->email,
     'mpno'=>$request->mpno,
     'fname'=>$request->fname,
     'lname'=>$request->lname,
     'status'=>$request->status,
     'password'=>Hash::make($request->password),

     ]);       
     return redirect()->route('user-view');


    }


    public function UserEdit($id){
    $users = User::findOrFail($id);
    return view('admin.user_edit',compact('users'));

    }

    public function UserUpdate(Request $request){

        User::findOrFail($request->id)->update([
     'name'=>$request->name,
     'email'=>$request->email,
     'mpno'=>$request->mpno,
     'fname'=>$request->fname,
     'lname'=>$request->lname,
     'status'=>$request->status,
     'password'=>Hash::make($request->password),

     ]);       
     return redirect()->route('user-view');

    }



    public function UserDelete($id){
        User::findOrFail($id)->delete();
        return redirect()->back();
        
    }


   



}
