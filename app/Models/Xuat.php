<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xuat extends Model
{
    use HasFactory;

     protected $table = 'xuats';
    protected $fillable = [
          'NgayXuat',
          'GiaXuat',
          'TongTien',
          'GhiChu',
          'Khu_ID',
          'User_ID',
          'Sdt',
          'TenKhachHang',
         
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