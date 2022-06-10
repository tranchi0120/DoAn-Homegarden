<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baidang extends Model
{
    use HasFactory;

    protected $table = 'baidangs';
     protected $fillable = [
          'TieuDe',
          'NoiDung',
          'HinhAnh',
          'NgayDang',
          'User_ID',
          
    ];

      public function USER()
    {
        return $this->belongsTo(User::class,'User_ID');
    }
}