<?php

namespace App\Http\Controllers;
use App\Models\Phunthuoc as ModelPhunThuoc;
use Illuminate\Http\Request;
use App\Models\Khu;
use App\Models\Nhanvien;



class PhunThuocController extends Controller
{


     public function __construct()
    {
        
        $khu = Khu::all();
        view()->share('khu',$khu);

          $nhanvien = nhanvien::all();
        view()->share('nhanvien',$nhanvien);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phunthuoc = ModelPhunThuoc::all();
        // dd($phunthuoc['0']->Khu->TenKhu);
        return view('phunthuoc.index')->with('phunthuoc',$phunthuoc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phunthuoc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        
        $phunthuoc = ModelPhunThuoc::all();
        $name = new ModelPhunThuoc();
        $name->NgayPhunThuoc = $request->NgayPhunThuoc;
        $name->TenThuoc = $request->TenThuoc;
        $name->LieuLuong = $request->LieuLuong;
        $name->GhiChu = $request->GhiChu;
        $name->Nhanvien_ID = $request->Nhanvien_ID;
        $name->Khu_ID = $request->Khu_ID;
        $name->save();
        return redirect()->route('admin.phunthuoc')->with('phunthuoc', $phunthuoc);
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
        $name = ModelPhunThuoc::find($id);
        return view('phunthuoc.update',compact('name'));
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
             $name = ModelPhunThuoc::find($id);
             $name->NgayPhunThuoc = $request->input('NgayPhunThuoc');
             $name->TenThuoc = $request->input('TenThuoc');
             $name->LieuLuong = $request->input('LieuLuong');
             $name->GhiChu = $request->input('GhiChu');
             $name->Nhanvien_ID = $request->input('Nhanvien_ID');
             $name->Khu_ID = $request->input('Khu_ID');
             $name->update();
             return redirect()->route('admin.phunthuoc')->with('thongbao','Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phunthuoc = ModelPhunThuoc::find($id);
        $phunthuoc->delete();
      return redirect()->route('admin.phunthuoc');
    }
}