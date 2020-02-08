<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'major_id', 'user_id', 
    ];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }

    public function mengajars()
    {
        return $this->hasMany(Mengajar::class);
    }

    public function daftarhadirs()
    {
        return $this->hasMany(DaftarHadir::class);
    }
}
