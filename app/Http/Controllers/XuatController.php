<?php

namespace App\Http\Controllers;

use App\Models\Xuat as ModelsXuat;
use Illuminate\Http\Request;
use App\Models\Khu;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Aler;

class XuatController extends Controller
{



    public function __construct()
    {

        $khu = Khu::where('SoLuong', '>', 0)->get();
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
        $xuat = ModelsXuat::all();
        return view('admin/xuat.index')->with('xuat', $xuat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/xuat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->SoLuong = intVal($request->SoLuong);
        $khu = Khu::findorfail($request->Khu_ID);
        $SoLuongTrongKhu = intval($khu->SoLuong);
        $SoCayChet = intval($khu->SoLuongChet);


        $soluongcon = $SoLuongTrongKhu - $SoCayChet;

        $request->validate([
            'Khu_ID' => 'required',  
            'NgayXuat' => 'required',
            'User_ID' => 'required',
            'GiaXuat' => 'required',
            'GhiChu' => 'required',
            'Sdt' => 'required',
            'TongTien' => 'required',
            'TenKhachHang' => 'required',
            'SoLuong' => array('required'),
        ]);
        if ($soluongcon < intval($request->SoLuong) || intval($request->SoLuong) < 0) {
            return redirect()->back()->withErrors('errors');
            // return redirect()->back()->with('error','nhập lại số lượng cây trồng');
        }
        $xuat = ModelsXuat::all();
        $name = new ModelsXuat();
        $name->Khu_ID = $request->Khu_ID;
        $name->User_ID = $request->User_ID;
        $name->NgayXuat = $request->NgayXuat;
        $name->GiaXuat = $request->GiaXuat;
        $name->TongTien = $request->TongTien;
        $name->GhiChu = $request->GhiChu;
        $name->Sdt = $request->Sdt;
        $name->TenKhachHang = $request->TenKhachHang;
        $name->SoLuong = $request->SoLuong;
        $name->save();


        // dd(intval($khu->SoLuong) - intval($request->SoLuong));
        $conlai = $SoLuongTrongKhu - (int) ($request->SoLuong);

        $SoLuongConLai = $conlai == (int) ($khu->SoLuongChet) ? 0 : $conlai;
        // dd($SoLuongConLai);
        $soluongchet = $SoLuongConLai == 0 ? "0" : $khu->SoLuongChet;
        $khu
            ->update([
                'SoLuong' => $SoLuongConLai,
                'SoLuongChet' => $soluongchet,
            ]);





        return redirect()->route('admin.xuat')->with('success', 'Xuất thành công');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $xuat = ModelsXuat::find($id);
        $xuat->delete();
        return redirect()->route('admin.xuat');
    }
}