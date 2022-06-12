<?php

namespace App\Http\Controllers;
use App\Models\Lienhe as ModelsLienhe;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Aler;

class LienheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $lienhe = ModelsLienhe::all();
            return view('admin/lienhe.index')->with('lienhe',$lienhe);
    }

   
    public function add(Request $request)
    {
      
        $name = new ModelsLienhe();
        $name->HoTen = $request->HoTen;
        $name->Email = $request->Email;
        $name->Sdt = $request->Sdt;
        $name->NoiDung = $request->NoiDung;
        $name->save();
        return redirect()->route('admin.lienhe');

        sesstion()->flash('success','gửi thành công');
    }

    public function create()
    {
            return view('admin/lienhe.create');
    }

   
}