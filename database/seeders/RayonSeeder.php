<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rayon;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rayon::create([
            'nama_rayon' => 'Ciawi',
        ]);
        Rayon::create([
            'nama_rayon' => 'Cicurug',
        ]);
        Rayon::create([
            'nama_rayon' => 'Tajur',
        ]);
        Rayon::create([
            'nama_rayon' => 'Cicurug',
        ]);
        Rayon::create([
            'nama_rayon' => 'Cisarua',
        ]);
        Rayon::create([
            'nama_rayon' => 'Cibedug',
        ]);
        Rayon::create([
            'nama_rayon' => 'Sukasari',
        ]);

    }
}
