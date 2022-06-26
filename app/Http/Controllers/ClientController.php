<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baidang;
use App\Models\Caytrong;
use App\Models\Khu;
use App\Models\Lienhe;
use RealRashid\SweetAlert\Facades\Aler;



class ClientController extends Controller
{


    public function __construct()
    {

        $baidang = Baidang::all();
        view()->share('baidang', $baidang);
        $caytrong = Caytrong::all();

        // dd($caytrong);
        view()->share('caytrong', $caytrong);
        $khu = Khu::all();
        view()->share('khu', $khu);
        $lienhe = Lienhe::all();
        view()->share('lienhe', $lienhe);
    }

    public function ShowClient()
    {
        $baidang = Baidang::orderBy('created_at','DESC')->get();
        $cayNongNghiep = Caytrong::where('Loaicay_ID', 1)->get();
        $cayAnTrai = Caytrong::where('Loaicay_ID', 2)->get();
        return view('Client.main', compact('cayNongNghiep', 'cayAnTrai','baidang'));
    }


    public function ShowLienHe()
    {
        
        return view('Client.lienhe');
    }



    public function ChiTietBaiDang($id)
    {
        $data = Baidang::find($id);
        return view('Client/tin.chitiet', compact('data'));
    }

    public function ChiTietCay($id)
    {
        $data = Caytrong::find($id);
        return view('Client/caytrong.chitiet', compact('data'));
    }


    public function showcay()
    {
        
        return view('Client/caytrong.cay');
    }

    public function showbaidang()
    {
        $baidang = Baidang::orderBy('created_at','DESC')->get();
        return view('Client/tin.baidang',compact('baidang'));
    }


    public function ShowErr()
    {
        return view('err.error');
    }

    // public function Search(Request $request)
    // {
    //     $output = '';
    //     $caytrong = Caytrong::where('name', 'LIKE', '%' . $request->key . '%');
    //     foreach ($caytrong as $data) {
    //         $output = '
    //         .$data->TenCay.
    //         ';
    //     }
    //     dd(response()->json($output));
    //     return response()->json($output);
    // 
}