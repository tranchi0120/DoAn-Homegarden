<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Aler;
class AuthController extends Controller
{
    public function showFormLogin (){
        return view('auth.login');
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('show-dashboard');
        }
        return redirect()->route('show-form-login')->with('success','dang nhap that bai');
    }
   

   public function showFormprofile(){
        if(Auth::check()){
            return view ('auth.profile');
        }
        return \redirect()->route('show-profile');
    }

     public function Showdashboard(){
        if(Auth::check()){
            return view ('auth.dashboard');
        }
        return \redirect()->route('show-form-login');
    }

    public function logout(){
        Auth::logout();
       return \redirect()->route('show-form-login');
    }
}