<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Aler;
use App\Models\Khu;
use App\Models\Caytrong;
use App\Models\Nhap;
use App\Models\Xuat;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('show-dashboard')->with('success', 'đăng nhập thành công');
        }
        return redirect()->route('show-form-login')->with('success', 'đăng nhập thất bại');
    }


    public function showFormprofile()
    {
        if (Auth::check()) {
            return view('auth.profile');
        }
        return \redirect()->route('show-profile');
    }

    public function Showdashboard(Nhap $id)
    {
        if (Auth::check()) {
            $khu = Khu::count();
            $caytrong = Caytrong::count();
            $tongtien = Nhap::sum('TongTien');
            $tongtienxuat = Xuat::sum('TongTien');
            return view('auth.dashboard', \compact('khu', 'caytrong', 'tongtien', 'tongtienxuat'));
        }
        return \redirect()->route('show-form-login');
    }


    public function out()
    {
        Auth::logout();
        return \redirect()->route('show-form-login');
    }

    public function showError()
    {
        return view('err.error');
    }
}