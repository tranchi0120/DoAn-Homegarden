<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khu extends Model
{
    use HasFactory;

    protected $table = 'khus';
    protected $fillable = [
          'TenKhu',
          'Loaicay_ID',
          'TrangThai',
          'SoLuong',
          'NgayTrongCay',
          'NgayThuHoach',
          'GhiChu',
          'Nhanvien_ID',
          'Caytrong_ID',
    ];

    public function CayTrong()
    {
        return $this->belongsTo(Caytrong::class,'Caytrong_ID');
    }

    public function NhanVien()
    {
        return $this->belongsTo(Nhanvien::class,'Nhanvien_ID');
    }

     public  function PhunThuoc()
    {
        return $this->hasMany(Phunthuoc::class,'Khu_ID');
    }

    

}