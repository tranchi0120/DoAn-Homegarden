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
          'User_ID',
          'Caytrong_ID',
    ];

    public function CayTrong()
    {
        return $this->belongsTo(Caytrong::class,'Caytrong_ID');
    }

    public function USER()
    {
        return $this->belongsTo(User::class,'User_ID');
    }

     public  function PhunThuoc()
    {
        return $this->hasMany(Phunthuoc::class,'Khu_ID');
    }


     public function TinhTrangKhu() 
    {
        return $this->hasOne(Khu::class,'Khu_ID');
    }
    

}