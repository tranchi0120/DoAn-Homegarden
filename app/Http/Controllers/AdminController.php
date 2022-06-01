<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginPost (Request $request){
       $credentials = $request->only('email','password');
       if(Auth::guard('admin')->attempt($credentials)){
         return redirect()->route('admin.dashboard');
       }else{
         return  redirect('admin/login');
         

       }
    }

    public function dashboard(){
        if(Auth::guard('admin')->check ()){
            $adminUser = Auth::guard('admin')->user();
            return view('admin.dashboard',['user'=>$adminUser]);
        }else{
            return  redirect('admin/login');
        }
    }

     




    public function statistisc(){
        echo " day la trang thong ke";
    }

    public function logout(){
      Auth::guard('admin')->logout();
      return  redirect('admin/login');
    }
}