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
}
