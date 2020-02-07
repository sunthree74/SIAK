<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaKelas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kelas_id', 'user_id', 
    ];
}
