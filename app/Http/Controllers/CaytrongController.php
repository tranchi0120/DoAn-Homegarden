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
        $caytrong = ModelsCaytrong::all();
        view()->share('caytrong',$caytrong);
        view()->share('danhmucloaicay',$danhmucloaicay);
    }
   
    public function index()
    {

        // $records = $caytrong::where('id',1)->paginate(1);


         $caytrong = ModelsCaytrong::all();
        // dd($caytrong['0']->DanhMucLoaiCay->Tenloaicay);
       
        return view('admin/caytrong.index')->with('caytrong',$caytrong);
    }

  
    public function create()
    {
        return view('admin/caytrong.create');
    }

   
    public function store(Request $request)
    {
        $name = new ModelsCaytrong();
        $name->Loaicay_ID = $request->Loaicay_ID;
        $name->TenCay = $request->TenCay;
        $name->HinhAnh = $request->HinhAnh;
        $name->GianTien = $request->GianTien;
        $name->GhiChu = $request->GhiChu;
        $name->GiaiDoanPhunThuoc = $request->GiaiDoanPhunThuoc;
        $name->save();
        return redirect()->route('admin.caytrong')->with('thongbao','thêm thành công');

        $validate = $request->validate( [
            'Loaicay_ID' => 'required',
             'TenCay' => 'required',
             'HinhAnh' => 'required',
             'GianTien' => 'required',
             'GiaiDoanPhunThuoc' => 'required'
        ] );
           
        
    }

 

  
    public function edit($id)
    {
        $name = ModelsCaytrong::find($id);
        return view('admin/caytrong.update',compact('name'));
    }


    public function update(Request $request, $id)
    {
         $name = ModelsCaytrong::find($id);
             $name->Loaicay_ID = $request->input('Loaicay_ID');
             $name->TenCay = $request->input('TenCay');
            //  $name->HinhAnh = $request->input('HinhAnh');
             $name->GianTien = $request->input('GianTien');
             $name->GiaiDoanPhunThuoc = $request->input('GiaiDoanPhunThuoc');
             $name->GhiChu = $request->input('GhiChu');
             $name->update();
             return redirect()->route('admin.caytrong')->with('thongbao','Chỉnh sửa thành công');
    }

  
    public function destroy($id)
    {
        $caytrong = ModelsCaytrong::find($id);
        $caytrong->delete();
      return redirect()->route('admin.caytrong');
    }

    public function chitietcaytrong($id){
        $data = ModelsCaytrong::find($id);
        return view('admin.caytrong.chitiet-caytrong', compact('data'));
    }
}