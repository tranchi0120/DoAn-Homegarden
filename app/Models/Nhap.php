<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhap extends Model
{
    use HasFactory;
     protected $table = 'nhaps';
     protected $fillable = [
          'NgayNhap',
          'GiaNhap',
          'TongTien',
          'GhiChu',
          'Khu_ID',
          'User_ID',
         
    ];



    public function USER()
    {
        return $this->belongsTo(User::class,'User_ID');
    }

    public  function Khu()
    {
        return $this->belongsTo(Khu::class,'Khu_ID');
    }
}