<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;

    protected $fillable  = [
        'nama_rayon',
        'rayon_id',
    ];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}
