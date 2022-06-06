<?php

namespace App\Http\Controllers;
use App\Models\Nhap as ModelsNhap;
use Illuminate\Http\Request;
use App\Models\Khu;
use App\Models\User;

class NhapController extends Controller
{

    public function __construct()
    {
        
        $khu = Khu::all();
        view()->share('khu',$khu);

          $user = User::all();
        view()->share('user',$user);
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $nhap = ModelsNhap::all();
        return view('admin/nhap.index')->with('nhap',$nhap);
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
        return redirect()->route('admin.nhap')->with('nhap', $nhap);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}