<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nisn', 'nama_ayah', 'nama_ibu', 'tahun_masuk', 'gender', 'tempat_lahir', 'tanggal_lahir', 'sekolah_asal', 'alamat'
    ];
}
