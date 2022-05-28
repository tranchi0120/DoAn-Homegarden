<?php

namespace App\Http\Controllers;

use App\Models\Nhanvien as ModelsNhanvien;
use App\Models\Quyen;

use Illuminate\Http\Request;

class TaikhoanController extends Controller
{

    public function __construct()
    {
        $quyen = Quyen::all();
        // $taikhoan = ModelsNhanvien::all();
        // view()->share('taikhoan',$taikhoan);
        view()->share('quyen',$quyen);
    }
    

    public function index(){
        $taikhoan = ModelsNhanvien::all();
        // dd($taikhoan['0']->LoaiQuyen->TenQuyen);
        return view('taikhoan.index')->with('taikhoan',$taikhoan);
    }



    public function create(){
        return view('taikhoan.create');
    }



    public function store(Request $request){
        $name = new ModelsNhanvien();
        $name->HoTen = $request->HoTen;
        $name->Email = $request->Email;
        $name->MatKhau = $request->MatKhau;
        $name->GioiTinh = $request->GioiTinh;
        $name->NgaySinh = $request->NgaySinh;
        $name->SDT = $request->SDT;
        $name->Quyen_ID = $request->Quyen_ID;
        $name->save();
        return redirect()->route('admin.taikhoan')->with('thongbao', 'thêm thành công');
    }



    public function edit($id)
        {
          $name = ModelsNhanvien::find($id);
        return view('taikhoan.update',compact('name'));

        }
        public function update(Request $request,$id)
        {
             $name = ModelsNhanvien::find($id);
             $name->HoTen = $request->input('HoTen');
             $name->Email = $request->input('Email');
             $name->MatKhau = $request->input('MatKhau');
             $name->GioiTinh = $request->input('GioiTinh');
             $name->NgaySinh = $request->input('NgaySinh');
             $name->SDT = $request->input('SDT');
             $name->Quyen_ID = $request->input('Quyen_ID');
             $name->update();
             return redirect()->route('admin.taikhoan')->with('thongbao','Chỉnh sửa thành công');
            

        }
         public function destroy($id)
    {
           $danhmucloaicay = ModelsNhanvien::find($id);
           $danhmucloaicay->delete();
      return redirect()->route('admin.taikhoan');
    }
}