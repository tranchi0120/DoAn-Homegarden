<?php

namespace App\Http\Controllers;

use App\Models\Caytrong;
use App\Models\Khu as ModelsKhu;
use App\Models\Nhanvien;
use App\Models\Danhmucloaicay;

use Illuminate\Http\Request;

class KhuController extends Controller
{

    public function __construct()
    {
        $taikhoan = Nhanvien::all();
        $caytrong = Caytrong::all();
        $danhmucloaicay = Danhmucloaicay::all();
        $khu = ModelsKhu::all();
        view()->share('khu',$khu);
        view()->share('taikhoan',$taikhoan);
        view()->share('caytrong',$caytrong);
        view()->share('danhmucloaicay',$danhmucloaicay);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khu = ModelsKhu::all();
        // dd($khu['0']->CayTrong->DanhMucLoaiCay->Tenloaicay);
        return view('khu.index')->with('khu',$khu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('khu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khu = ModelsKhu::all();
        $name = new ModelsKhu();
        $name->TenKhu = $request->TenKhu;
        $name->TrangThai = $request->TrangThai;
        $name->SoLuong = $request->SoLuong;
        $name->NgayTrongCay = $request->NgayTrongCay;
        $name->NgayThuHoach = $request->NgayThuHoach;
        $name->GhiChu = $request->GhiChu;
        $name->Nhanvien_ID = $request->Nhanvien_ID;
        $name->Caytrong_ID = $request->Caytrong_ID;
        $name->save();
        return redirect()->route('admin.khu')->with('khu', $khu);
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
        $name = ModelsKhu::find($id);
        return view('khu.update',compact('name'));
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
             $name = ModelsKhu::find($id);
             $name->TenKhu = $request->input('TenKhu');
             $name->TrangThai = $request->input('TrangThai');
             $name->SoLuong = $request->input('SoLuong');
             $name->NgayTrongCay = $request->input('NgayTrongCay');
             $name->NgayThuHoach = $request->input('NgayThuHoach');
             $name->GhiChu = $request->input('GhiChu');
             $name->Nhanvien_ID = $request->input('Nhanvien_ID');
             $name->Caytrong_ID = $request->input('Caytrong_ID');
             $name->update();
             return redirect()->route('admin.khu')->with('thongbao','Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
           $khu = ModelsKhu::find($id);
           $khu->delete();
         return redirect()->route('admin.khu');
    }
}