<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quyen extends Model
{
    use HasFactory;

    protected $table = 'quyens';
     protected $fillable = [
          'TenQuyen'
    ];

     public function NhanVien()
    {
      return $this->hasOne(NhanVien::class,'Quyen_ID');
    }
}