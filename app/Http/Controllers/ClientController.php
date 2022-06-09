<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baidang;
use App\Models\Caytrong;
use App\Models\Khu;


class ClientController extends Controller
{


     public function __construct()
    {
        
        $baidang = Baidang::all();
        view()->share('baidang',$baidang);
          $caytrong = Caytrong::all();
        view()->share('caytrong',$caytrong);

        $khu = Khu::all();
        view()->share('khu',$khu);
    }

    public function ShowClient(){
        return view('Client.main');
    }


     public function ShowTinTuc(){
        return view('Client.tintuc');
    }

    public function ShowKhu(){
        return view('Client.khu');
    }


}