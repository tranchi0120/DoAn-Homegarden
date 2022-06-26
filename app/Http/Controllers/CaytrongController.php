<?php

namespace App\Http\Controllers;

use App\Models\Caytrong as ModelsCaytrong;
use App\Models\Danhmucloaicay;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Aler;


class CaytrongController extends Controller
{
    public function __construct()
    {
        $danhmucloaicay = Danhmucloaicay::all();
        $caytrong = ModelsCaytrong::all();
        view()->share('caytrong', $caytrong);
        view()->share('danhmucloaicay', $danhmucloaicay);
    }

    public function index()
    {
        $caytrong = ModelsCaytrong::paginate(6);
        return view('admin/caytrong.index', compact('caytrong'))->with('caytrong', $caytrong);
    }




    public function create()
    {
        return view('admin/caytrong.create')->with('success', 'Item created successfully!');
        // $items = Item::create($request->all());
        // return back()->with('success','Item created successfully!');
    }


    public function store(Request $request)
    {

         

        $caytrong = ModelsCaytrong::all();
        $name = new ModelsCaytrong();
        $name->Loaicay_ID = $request->Loaicay_ID;
        $name->TenCay = $request->TenCay;
        $name->GhiChu = $request->GhiChu;
        $name->GiaiDoanPhunThuoc = $request->GiaiDoanPhunThuoc;
        if ($request->hasFile('image')); {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $name->HinhAnh = $imageName;
        }
        $name->save();
        return redirect()->route('admin.caytrong')->with('message', 'Thêm thành công');
        $validate = $request->validate([
            'Loaicay_ID' => 'required',
            'TenCay' => 'required',
            'HinhAnh' => 'required',
            'GiaTien' => 'required',
            'GiaiDoanPhunThuoc' => 'required'
        ]);
    }




    public function edit($id)
    {
        $name = ModelsCaytrong::find($id);
        return view('admin/caytrong.update', compact('name'));
    }


    public function update(Request $request, $id)
    {
        $name = ModelsCaytrong::find($id);
        $name->Loaicay_ID = $request->input('Loaicay_ID');
        $name->TenCay = $request->input('TenCay');
        $name->GiaiDoanPhunThuoc = $request->input('GiaiDoanPhunThuoc');
        $name->GhiChu = $request->input('GhiChu');
        $name->update();
        return redirect()->route('admin.caytrong')->with('success', 'Chỉnh sửa thành công');
    }


    public function destroy($id)
    {
        $caytrong = ModelsCaytrong::find($id);
        $caytrong->delete();

        if ($caytrong) {
            return response()->json([
                "code" => 200,
                "message" => "Xoá thành công"
            ], 200);
        } else {
            return response()->json([
                "code" => 500,
                "message" => "Không thể xóa"
            ], 500);
        }
    }





    public function chitietcaytrong($id)
    {
        $data = ModelsCaytrong::find($id);
        return view('admin.caytrong.chitiet-caytrong', compact('data'));
    }
}