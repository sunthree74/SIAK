<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'gelar_depan', 'gelar_belakang', 'gender', 'tempat_lahir', 'tanggal_lahir', 'jabatan', 'pendidikan_terakhir', 'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
