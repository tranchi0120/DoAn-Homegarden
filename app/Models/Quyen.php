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

     public function USER()
    {
      return $this->hasOne(User::class,'Quyen_ID');
    }
}