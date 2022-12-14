<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name','email','created_by','updated_by','level','active','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function data_user_anggota()
    {
        return $this->hasMany("App\Model\Anggota", "id_user", "id");
    }

    public function data_user_buku()
    {
        return $this->hasMany("App\Model\Buku", "id_user", "id");
    }

    public function data_user_pinjam()
    {
        return $this->hasMany("App\Model\Pinjam", "id_user", "id");
    }
}
