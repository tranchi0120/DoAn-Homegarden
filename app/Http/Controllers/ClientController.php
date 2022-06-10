<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baidang;
use App\Models\Caytrong;
use App\Models\Khu;
use App\Models\Lienhe;



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


    public function ChiTietBaiDang($id){
         $data = Baidang::find($id);
        return view('Client/tin.chitiet',compact('data'));
    }

     public function ChiTietCay($id){
         $data = Caytrong::find($id);
        return view('Client/caytrong.chitiet',compact('data'));
    }



}