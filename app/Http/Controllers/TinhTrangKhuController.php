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
        view()->share('khu', $khu);
        view()->share('user', $user);
        view()->share('caytrong', $caytrong);
        view()->share('tinhtrangkhu', $tinhtrangkhu);
    }

    public function index()
    {
        return view('admin.tinhtrangkhu.index');
    }


    public function edit($id)
    {
        $name = Khu::find($id);
        return view('admin/tinhtrangkhu.update', compact('name'));
    }

    public function update(Request $request, $id)
    {
        $data = khu::find($id);
        $soluongchet = $request->input('SoLuongChet');
        // $tongsoluong = $data->SoLuong - $soluongchet;
        // $data->SoLuong = $tongsoluong;
        $data->SoLuongChet = $soluongchet;
        $data->GhiChu = $request->input('GhiChu');
        $data->save();
        return redirect()->route('admin.tinhtrangkhu')->with('thongbao', 'Chỉnh sửa thành công');
    }



    public function destroy($id)
    {
        $tinhtrangkhu = ModelsTinhTrangKhu::find($id);
        $tinhtrangkhu->delete();
        return redirect()->route('admin.tinhtrangkhu');
    }

    public function chitietkhu($id)
    {
        $data = khu::find($id);
        return view('admin.tinhtrangkhu.chitiet-khu', compact('data'));
    }
}