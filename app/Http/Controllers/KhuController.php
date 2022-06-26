<?php

namespace App\Http\Controllers;

use App\Models\Caytrong;
use App\Models\Khu as ModelsKhu;
use App\Models\User;
use App\Models\Danhmucloaicay;
use App\Models\Phunthuoc;
use RealRashid\SweetAlert\Facades\Aler;

use Illuminate\Http\Request;

class KhuController extends Controller
{

    public function __construct()
    {
        $user = User::all();
        $caytrong = Caytrong::all();
        $danhmucloaicay = Danhmucloaicay::all();
        $khu = ModelsKhu::all();
        view()->share('khu', $khu);
        view()->share('user', $user);
        view()->share('caytrong', $caytrong);
        view()->share('danhmucloaicay', $danhmucloaicay);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khu = ModelsKhu::paginate(6);
        // $caytrong = ModelsCaytrong::paginate(6);

        return view('admin/khu.index')->with('khu', $khu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/khu.create');
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
            'TenKhu' => 'required',
            'SoLuong' => 'required',
            'Caytrong_ID' => 'required',
            'GhiChu' => 'required',
            'User_ID' => 'required',  
           
        ]);

        $khu = ModelsKhu::all();
        $name = new ModelsKhu();
        $name->TenKhu = $request->TenKhu;
        $name->SoLuong = $request->SoLuong;
        $name->User_ID = $request->User_ID;
        $name->Caytrong_ID = $request->Caytrong_ID;
        $name->GhiChu = $request->GhiChu;
        $name->save();
        return redirect()->route('admin.khu')->with('message', 'Thêm thành công');
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
        return view('admin/khu.update', compact('name'));
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
        $request->validate([
            'NgayTrongCay' => 'required',
            'NgayThuHoach' => 'after:NgayTrongCay',
        ]);
        $name = ModelsKhu::find($id);
        $name->TenKhu = $request->input('TenKhu');
        $name->NgayTrongCay = $request->input('NgayTrongCay');
        $name->NgayThuHoach = $request->input('NgayThuHoach');
        $name->User_ID = $request->input('User_ID');
        $name->Caytrong_ID = $request->input('Caytrong_ID');
        $name->GhiChu = $request->input('GhiChu');
        $name->update();
        return redirect()->route('admin.khu')->with('session', 'Chỉnh sửa thành công');
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

        $checkExistsPhunThuoc = Phunthuoc::where('Khu_ID', $id);
        if ($checkExistsPhunThuoc->exists())
            $checkExistsPhunThuoc->delete();
        $khu->delete();
        if ($khu) {
            return response()->json([
                "code" => 200,
                "message" => "Delete success"
            ], 200);
        } else {
            return response()->json([
                "code" => 500,
                "message" => "Cant delete this record"
            ], 500);
        }
    }

    public function ctkhu($id)
    {
        $data = ModelsKhu::find($id);
        return view('admin.khu.ct-khu', compact('data'));
    }
}