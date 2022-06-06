<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinhTrangKhu extends Model
{
    use HasFactory;
     protected $fillable = [
        //   'SoLuong',
        //   'HinhAnh',
        //   'GhiChu',
          'Khu_ID'
    ];

    public function Khu()
    {
        return $this->belongsTo(Khu::class,'Khu_ID');
    }


}