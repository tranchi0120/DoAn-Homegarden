<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quyen;
use App\Models\User as ModelsUser;

class UserController extends Controller
{
   
 public function __construct()
    {
        $quyen = Quyen::all();
        $user = ModelsUser::all();
        view()->share('user',$user);
        view()->share('quyen',$quyen);
    }

    public function index()
    {
         $user = ModelsUser::all();
        // dd($taikhoan['0']->LoaiQuyen->TenQuyen);
        return view('admin/user.index')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = new ModelsUser();
        $name->name = $request->name;
        $name->email = $request->email;
        $name->password = bcrypt($request->password);
        $name->sdt = $request->sdt;
        $name->Quyen_ID = $request->Quyen_ID;
        $name->save();
        return redirect()->route('admin.user')->with('thongbao', 'thêm thành công');
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
        $name = ModelsUser::find($id);
        return view('admin/user.update',compact('name'));
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
                $name = ModelsUser::find($id);
             $name->name = $request->input('name');
             $name->email = $request->input('email');
             $name->password =bcrypt($request->input('password')) ;
             $name->sdt = $request->input('sdt');
             $name->Quyen_ID = $request->input('Quyen_ID');
             $name->update();
             return redirect()->route('admin.user')->with('thongbao','Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = ModelsUser::find($id);
           $user->delete();
      return redirect()->route('admin.user');
    }
}