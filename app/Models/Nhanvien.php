<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;

      protected $fillable = [
        'HoTen',
        'Email',
        'MatKhau',
        'GioiTinh',
        'NgaySinh',
        'SDT',
        'Quyen_ID'
    ];

    public function Khu()
    {
      return $this->hasMany(Khu::class,'Nhanvien_ID');
    }


    public function LoaiQuyen()
    {
        return $this->belongsTo(Quyen::class,'Quyen_ID');
    }

    public  function PhunThuoc()
    {
        return $this->hasMany(Phunthuoc::class,'NhanVien_ID');
    }
  
}