<?php

namespace App\Http\Controllers;

use App\Models\Nhap as ModelsNhap;
use Illuminate\Http\Request;
use App\Models\Khu;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Aler;
use Carbon\Carbon;

class NhapController extends Controller
{

    public function __construct()
    {

        $khu = Khu::where('SoLuong', 0)->get();
        view()->share('khu', $khu);

        $user = User::all();
        view()->share('user', $user);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhap = ModelsNhap::all();
        return view('admin/nhap.index')->with('nhap', $nhap);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/nhap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'NgayNhap' => 'required',
            'SoLuong' => 'required',
            'GiaNhap' => 'required',
            'GhiChu' => 'required',
            'User_ID' => 'required',  
            'Khu_ID' => 'required',  
        ]);
        
        $nhap = ModelsNhap::all();
        $name = new ModelsNhap();
        $name->Khu_ID = $request->Khu_ID;
        $name->User_ID = $request->User_ID;
        $name->NgayNhap = $request->NgayNhap;
        $name->SoLuong = $request->SoLuong;
        $name->GiaNhap = $request->GiaNhap;
        $name->TongTien = $request->TongTien;
        $name->GhiChu = $request->GhiChu;
        $name->save();
        $khu = Khu::find($request->Khu_ID);
        $khu->SoLuong = $request->SoLuong;
        $khu->save();
        return redirect()->route('admin.nhap')->with('success', 'Nhập thành công');
    }



    public function destroy($id)
    {
        $nhap = ModelsNhap::find($id);
        $nhap->delete();
        return redirect()->route('admin.nhap');
    }
}