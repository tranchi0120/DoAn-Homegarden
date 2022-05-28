<?php

namespace App\Http\Controllers;
use App\Models\Caytrong as ModelsCaytrong;
use App\Models\Danhmucloaicay;
use Illuminate\Http\Request;



class CaytrongController extends Controller
{
     public function __construct()
    {
        $danhmucloaicay = Danhmucloaicay::all();
        // $caytrong = ModelsCaytrong::all();
        // view()->share('caytrong',$caytrong);
        view()->share('danhmucloaicay',$danhmucloaicay);
    }
   
    public function index()
    {
         $caytrong = ModelsCaytrong::all();
        // dd($caytrong['0']->DanhMucLoaiCay->Tenloaicay);
       
        return view('caytrong.index')->with('caytrong',$caytrong);
    }

  
    public function create()
    {
        return view('caytrong.create');
    }

   
    public function store(Request $request)
    {
        $name = new ModelsCaytrong();
        $name->Loaicay_ID = $request->Loaicay_ID;
        $name->TenCay = $request->TenCay;
        $name->HinhAnh = $request->HinhAnh;
        $name->SoLuong = $request->SoLuong;
        $name->GiaiDoanPhunThuoc = $request->GiaiDoanPhunThuoc;
        $name->save();
        return redirect()->route('admin.caytrong')->with('thongbao','thêm thành công');
    }

 

  
    public function edit($id)
    {
        $name = ModelsCaytrong::find($id);
        return view('caytrong.update',compact('name'));
    }


    public function update(Request $request, $id)
    {
         $name = ModelsCaytrong::find($id);
             $name->Loaicay_ID = $request->input('Loaicay_ID');
             $name->TenCay = $request->input('TenCay');
             $name->HinhAnh = $request->input('HinhAnh');
             $name->SoLuong = $request->input('SoLuong');
             $name->GiaiDoanPhunThuoc = $request->input('GiaiDoanPhunThuoc');
             $name->update();
             return redirect()->route('admin.caytrong')->with('thongbao','Chỉnh sửa thành công');
    }

  
    public function destroy($id)
    {
        $caytrong = ModelsCaytrong::find($id);
        $caytrong->delete();
      return redirect()->route('admin.caytrong');
    }
}