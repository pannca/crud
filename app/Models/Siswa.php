<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'rayon_id',
        'rombel',
        'nis',
    ];

    public function rayon()
    {
        return $this->belongsTo(Rayon::class, 'rayon_id');
    }
}
