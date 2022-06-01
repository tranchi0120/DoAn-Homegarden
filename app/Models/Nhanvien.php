<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContracts;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;


class Nhanvien extends Model implements AuthenticatableContracts
{
    use HasFactory;
    use Authenticatable;

      protected $fillable = [
        'HoTen',
        'email',
        'password',
        'GioiTinh',
        'SDT',
        'Quyen_ID'
    ];

    public function Khu()
    {
      return $this->hasMany(Khu::class,'User_ID');
    }


    public function LoaiQuyen()
    {
        return $this->belongsTo(Quyen::class,'Quyen_ID');
    }

    public  function PhunThuoc()
    {
        return $this->hasMany(Phunthuoc::class,'User_ID');
    }
  
}