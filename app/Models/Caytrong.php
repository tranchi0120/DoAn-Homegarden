<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Caytrong extends Model
{
    use HasFactory;

    protected $table = 'caytrongs';
     protected $fillable = [
         'Loaicay_ID',
          'TenCay',
          'HinhAnh',
          'SoLuong',
          'GiaiDoanPhunThuoc',
          
    ];

    public function Khu() 
    {
        // return $this->hasMany(Khu::class,'khus_id');
        return $this->hasMany(Khu::class,'Caytrong_ID');
    }

    public function DanhMucLoaiCay()
    {
        return $this->belongsTo(Danhmucloaicay::class,'Loaicay_ID');
    }

    public function PhunThuoc()
    {
        return $this -> hasMany(Phunthuoc::class,'Khu_ID');

        }

     
   
}