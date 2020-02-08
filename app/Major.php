<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'tingkat', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mapels()
    {
        return $this->hasMany(Mapel::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }
}
