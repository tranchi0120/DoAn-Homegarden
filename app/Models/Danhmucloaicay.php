<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmucloaicay extends Model
{
    use HasFactory;
    protected $table = 'danhmucloaicays';
     protected $fillable = [
          'Tenloaicay'
    ];

    public function CayTrong()
    {
        return $this->hasMany(Caytrong::class,'Loaicay_ID');
    }
}