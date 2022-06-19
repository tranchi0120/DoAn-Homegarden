<?php

namespace App\Http\Controllers;

use App\Models\Phunthuoc as ModelPhunThuoc;
use Illuminate\Http\Request;
use App\Models\Khu;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Aler;



class PhunThuocController extends Controller
{


    public function __construct()
    {

        // $khu = Khu::all();
        // view()->share('khu',$khu);

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
        $phunthuoc = ModelPhunThuoc::whereHas('Khu', function ($q) {
            $q->where('SoLuong', '<>', 0);
        })->get();
        return view('admin/phunthuoc.index')->with('phunthuoc', $phunthuoc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/phunthuoc.create');
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
            'NgayPhunThuoc' => 'required',
            'TenThuoc' => 'required',
            'LieuLuong' => 'required',
            'GhiChu' => 'required',
            'User_ID' => 'required',  
            'Khu_ID' => 'required',  
        ]);


        $phunthuoc = ModelPhunThuoc::all();
        $name = new ModelPhunThuoc();
        $name->NgayPhunThuoc = $request->NgayPhunThuoc;
        $name->TenThuoc = $request->TenThuoc;
        $name->LieuLuong = $request->LieuLuong;
        $name->GhiChu = $request->GhiChu;
        $name->User_ID = $request->User_ID;
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
        return view('admin/phunthuoc.update', compact('name'));
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
        $name->User_ID = $request->input('User_ID');
        $name->Khu_ID = $request->input('Khu_ID');
        $name->update();
        return redirect()->route('admin.phunthuoc')->with('thongbao', 'Chỉnh sửa thành công');
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