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
        return $this->hasMany(Khu::class,'khus_id');
    }

    public function DanhMucLoaiCay()
    {
        return $this->belongsTo(Danhmucloaicay::class,'Loaicay_ID');
    }
   
}