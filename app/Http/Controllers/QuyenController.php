<?php

namespace App\Http\Controllers;
use App\Models\Quyen as ModelsQuyen;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Aler;

class QuyenController extends Controller
{


     public function __construct()
    {
         $quyen = ModelsQuyen::all();
        view()->share('quyen',$quyen);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin/quyen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin/quyen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $name = new ModelsQuyen();
             $name->TenQuyen = $request->TenQuyen;
             $name->save();
             return redirect()->route('admin.quyen')->with('thongbao','Thêm thành công');
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
        $name = ModelsQuyen::find($id);
        return view('admin/quyen.update',compact('name'));
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
        
             $name = ModelsQuyen::find($id);
             $name->TenQuyen = $request->input('TenQuyen');
             $name->update();
             return redirect()->route('admin.quyen')->with('thongbao','Chỉnh sửa thành công');

   
    
    }

     public function destroy($id)
    {
           $quyen = ModelsQuyen::find($id);
           $quyen->delete();
      return redirect()->route('admin.quyen');
    }
}