<?php

namespace App\Http\Controllers;
use App\Models\Baidang as ModelsBaidang;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Aler;
class BaiDangController extends Controller
{



public function __construct()
    {
            $baidang = ModelsBaidang::all();
          $user = User::all();
          view()->share('user',$user);
        view()->share('baidang',$baidang);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baidang = ModelsBaidang::paginate(5);
        return view('admin/baidang.index',compact('baidang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin/baidang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $baidang = ModelsBaidang::all();
        $name = new ModelsBaidang();
        $name->TieuDe = $request->TieuDe;
        $name->NoiDung = $request->NoiDung;
         if($request->hasFile('image'));
        {
                $image = $request->file('image');
                // dd($image);
                $imageName = time().'.'. $image->getClientOriginalExtension();
                        $image->move(public_path('images'), $imageName);
                $name->HinhAnh = $imageName;
        }
        $name->NgayDang = $request->NgayDang;
        $name->User_ID = $request->User_ID;
        $name->save();
        return redirect()->route('admin.baidang')->with('message', $baidang);


        $validate = $request->validate( [
            'TieuDe' => 'required',
             'NoiDung' => 'required',
             'image' => 'required',
             'NgayDang' => 'required',
             'User_ID' => 'required'
        ] );
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
        $name = ModelsBaidang::find($id);
        return view('admin/baidang.update',compact('name'));
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
             $name = ModelsBaidang::find($id);
             $name->TieuDe = $request->input('TieuDe');
             $name->NoiDung = $request->input('NoiDung'); 
            // if($request->hasFile('image'));
            //     {
            //             $image = $request->file('image');
            //             // dd($image);
            //             $imageName = time().'.'. $image->getClientOriginalExtension();
            //                     $image->move(public_path('images'), $imageName);
            //             $name->HinhAnh = $imageName;
            //     }
             $name->NgayDang = $request->input('NgayDang');
             $name->User_ID = $request->input('User_ID');
             $name->update();
             return redirect()->route('admin.baidang')->with('thongbao','Chỉnh sửa thành công');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $baidang = ModelsBaidang::find($id);
           $baidang->delete();
        return redirect()->route('admin.baidang');
    }
}