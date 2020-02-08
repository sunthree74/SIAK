<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengerjakan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tugas_id', 'user_id', 'body', 'files', 'status', 
    ];

    public function tugas()
    {
        return $this->belongsTo(Tugas::class, 'tugas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
