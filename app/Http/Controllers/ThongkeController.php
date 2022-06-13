<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xuat;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ThongkeController extends Controller
{
    public function index(){
        // $xuat = Xuat::select(DB::raw("COUNT(*) as count"))
        // ->whereYear('created_at',date('Y'))
        // ->groupBy(DB::raw('Month(created_at)') // chỗ này tu đ hiểu sao lại ghi v 
        // ->pluck('count');



        $selecttime = 'month';

        $xuat = Xuat::select(DB::raw('sum(TongTien) as `tongdoanhthu`'), 
        DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),  
        DB::raw('YEAR(created_at) year, MONTH(created_at) month , DAY(created_at) day') )
        ->whereYear('created_at',date('Y'))
        ->groupby($selecttime)
        ->get();
        $tongdoanhthu = $xuat->pluck('tongdoanhthu');
        $time = $xuat->pluck($selecttime)->toArray();
        
        $month = [1,2,3,4,5,6,7,8,9,10,11,12];

    
        $doanhthu = [];

        foreach($month as $value)
        {
            array_push($doanhthu,0);
            if(in_array($value,$time))
            {
                array_push($doanhthu,$tongdoanhthu[array_search($value,$time)]);

            }
        }

        array_shift($doanhthu);
        
    

        // dd(json_encode($tongdoanhthu));
        
        // $xuat = Xuat::all()->pluck('create_at');
        // $months = Xuat::select(DB::raw("Monrth(*) as month"))
        //  ->whereYear('create_at',date('Y'))
        // ->groupBy(DB::raw("Month(create_at)"))
        // ->pluck('count');
        // $data = [0,0,0,0,0,0,0,0,0,0,0,0];
        // dd(json_encode($time));
        // dd($time);
        // foreach ($months as $index => $month){
        //     $data[$month] = $xuat[++$index];
        // }

         return view('auth.dashboard',compact('month','doanhthu'));
    }
   
}