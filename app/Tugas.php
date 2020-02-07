<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'slug', 'kelas_id', 'user_id', 'mapel_id', 'keterangan', 'deadline',
    ];
}
