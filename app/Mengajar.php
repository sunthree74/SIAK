<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'mapel_id', 'user_id', 'kelas_id', 'jumlah_jam', 'jadwal', 'status', 
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'Mapel_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
