<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phunthuoc extends Model
{
    use HasFactory;

    
    protected $table = 'phunthuocs';
     protected $fillable = [
          'NgayPhunThuoc',
          'TenThuoc',
          'LieuLuong',
          'GhiChu',
          'Nhanvien_ID',
          'Khu_ID'
    ];

     public function NhanVien()
    {
        return $this->belongsTo(Nhanvien::class,'Nhanvien_ID');
    }

     public function Khu()
    {
        return $this->belongsTo(Khu::class,'Khu_ID');
    }
}