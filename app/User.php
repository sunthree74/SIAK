<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'photo', 'registration_number',
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
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function tugas()
    {
        return $this->hasMany(\Tugas::class);
    }

    public function student()
    {
        return $this->hasOne(\Student::class);
    }

    public function staff()
    {
        return $this->hasOne(\Staff::class);
    }

    public function posts()
    {
        return $this->hasMany(\Post::class);
    }

    public function mengerjakans()
    {
        return $this->hasMany(\Mengerjakan::class);
    }

    public function mengajars()
    {
        return $this->hasMany(\Mengajar::class);
    }

    public function mapels()
    {
        return $this->hasMany(\Mapel::class);
    }

    public function major()
    {
        return $this->hasOne(\Major::class);
    }

    public function kelas()
    {
        return $this->hasMany(\Kelas::class);
    }

    public function daftarhadirs()
    {
        return $this->hasMany(\DaftarHadir::class);
    }

    public function anggotakelas()
    {
        return $this->hasMany(\AnggotaKelas::class);
    }
}
