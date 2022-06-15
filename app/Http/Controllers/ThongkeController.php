<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xuat;
use App\Models\Khu;
use App\Models\Caytrong;
use App\Models\Nhap;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ThongkeController extends Controller
{
    public function index()
    {


        $selecttime = 'month';
        $xuat = Xuat::select(
            DB::raw('sum(TongTien) as `tongdoanhthu`'),
            DB::raw("DATE_FORMAT(NgayXuat, '%m-%Y') new_date"),
            DB::raw('YEAR(NgayXuat) year, MONTH(NgayXuat) month , DAY(NgayXuat) day')
        )
            ->whereYear('NgayXuat', date('Y'))
            ->groupby($selecttime)
            ->get();
        $tongdoanhthu = $xuat->pluck('tongdoanhthu');
        $time = $xuat->pluck($selecttime)->toArray();
        $month = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $doanhthu = [];
        foreach ($month as $value) {


            if (in_array($value, $time)) {

                array_push($doanhthu, $tongdoanhthu[array_search($value, $time)]);
            } else {
                array_push($doanhthu, 0);
            }
        }



        $nhap = Nhap::select(
            DB::raw('sum(TongTien) as `tongdoanhthunhap`'),
            DB::raw("DATE_FORMAT(NgayNhap, '%m-%Y') new_date"),
            DB::raw('YEAR(NgayNhap) year, MONTH(NgayNhap) month , DAY(NgayNhap) day')
        )
            ->whereYear('NgayNhap', date('Y'))
            ->groupby($selecttime)
            ->get();

        $tongdoanhthunhap = $nhap->pluck('tongdoanhthunhap');
        $time = $nhap->pluck($selecttime)->toArray();
        $month = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $doanhthunhap = [];

        foreach ($month as $value) {


            if (in_array($value, $time)) {

                array_push($doanhthunhap, $tongdoanhthunhap[array_search($value, $time)]);
            } else {
                array_push($doanhthunhap, 0);
            }
        }

        // dd($doanhthunhap);
        return view('admin/thongke.index', compact('month', 'doanhthu', 'doanhthunhap'));
    }
}


 





   
  




    //     $xuat = Xuat::select(DB::raw("sum(TongTien) as tongdoanhthu"))
                
    //            ->whereYear('NgayXuat',date('Y'))
    //             ->groupBy(DB::raw("Month('NgayXuat')"))
    //             ->pluck('tongdoanhthu');
               
              
    //     $months = Xuat::select(DB::raw("Month(NgayXuat) as month"))
    //             ->whereYear('NgayXuat',date('Y'))
    //             ->groupBy(DB::raw("Month('NgayXuat')"))
    //             ->pluck('month');
    //     $data = [0,0,0,0,0,0,0,0,0,0,0,0];
    //     foreach ($months as $index => $month){
    //         --$month;
    //         $data[$month] = $xuat[$index];
    //         dd($data);
    //     }
    //     return view('admin/thongke.index',['data' => $data]);
    // }