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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function mengerjakans()
    {
        return $this->hasMany(Mengerjakan::class);
    }
}
