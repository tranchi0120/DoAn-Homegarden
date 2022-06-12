<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'sdt',
        'Quyen_ID',
        'avatar',
    ];


    public function Khu()
    {
      return $this->hasMany(Khu::class,'Khu_ID');
    }


    public function LoaiQuyen()
    {
        return $this->belongsTo(Quyen::class,'Quyen_ID');
    }

    public  function PhunThuoc()
    {
        return $this->hasMany(Phunthuoc::class,'Phunthuoc_ID');
    }

    public  function BaiDang()
    {
        return $this->hasMany(Baidang::class,'Baidang_ID');
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    // protected $appends = [
    //     'profile_photo_url'
    // ];
    // public static $path = '/upload/user/';

    // public function getAvatarAttribute($value)
    // {
    //     return isset($value) ? config('app.url').self::$path.$value : config('app.url').self::$path.'avatar_default.jpg';
    // }
}