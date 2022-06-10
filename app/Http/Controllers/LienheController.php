<?php

namespace App\Http\Controllers;
use App\Models\LienHe as ModelsLienHe;

use Illuminate\Http\Request;

class LienheController extends Controller
{
    public function index()
    {
        $lienhe = ModelsLienHe::all();
        return view('admin/lienhe.index')->with('lienhe',$lienhe);
    }


    public function store(Request $request)
    {
        $name = new ModelsLienHe();
        $name->HoTen = $request->HoTen;
        $name->SDT = $request->SDT;
        $name->Email = $request->Email;
        $name->NoiDung = $request->NoiDung;
        $name->save();
        return redirect()->route('Client.lienhe')->with('lienhe', $lienhe);
    }


    
}