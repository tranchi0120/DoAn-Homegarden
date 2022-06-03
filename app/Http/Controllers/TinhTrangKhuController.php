<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinhTrangKhu as ModelsTinhTrangKhu;

use App\Models\Khu;
use App\Models\User;
use App\Models\Caytrong;


class TinhTrangKhuController extends Controller
{


     public function __construct()
    {
        $caytrong = Caytrong::all();
        $user = User::all();
        $khu = Khu::all();
        $tinhtrangkhu = ModelsTinhTrangKhu::all();
        view()->share('khu',$khu); 
        view()->share('user',$user);
        view()->share('caytrong',$caytrong);
        view()->share('tinhtrangkhu',$tinhtrangkhu);
    }

   
    public function index()
    {
        $tinhtrangkhu = ModelsTinhTrangKhu::all();
        // dd($tinhtrangkhu['0']->Khu->Nhanvien->HoTen);
        return view('admin/tinhtrangkhu.index')->with('tinhtrangkhu',$tinhtrangkhu);
    }

   
    public function create()
    {
        return view('admin/tinhtrangkhu.create');
    }

   
    public function store(Request $request)
    {
        $khu = ModelsTinhTrangKhu::all();
        $name = new ModelsTinhTrangKhu();
        $name->HinhAnh = $request->HinhAnh;
        $name->GhiChu = $request->GhiChu;
        $name->Khu_ID = $request->Khu_ID;
        $name->save();
        return redirect()->route('admin.tinhtrangkhu')->with('thongbao', 'them thanh cong');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $name = ModelsTinhTrangKhu::find($id);
        return view('admin/tinhtrangkhu.update',compact('name'));
    }

    public function update(Request $request, $id)
    {
             $data = khu::find($id);
            //  dd( $request->input('SoLuong'));
             $data->SoLuong = $request->input('SoLuong');
             $data->save();
             return redirect()->route('admin.tinhtrangkhu')->with('thongbao','Chỉnh sửa thành công');
    }

   
    
    public function destroy($id)
    {
            $tinhtrangkhu = ModelsTinhTrangKhu::find($id);
           $tinhtrangkhu->delete();
      return redirect()->route('admin.tinhtrangkhu');
    }
}