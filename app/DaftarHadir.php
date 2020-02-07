<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarHadir extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kelas_id', 'user_id', 'mapel_id', 'jumlah_jam', 'jadwal', 
    ];
}
