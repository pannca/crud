<?php

namespace App\Http\Controllers;
use App\Models\Siswa;


use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create()
    {
        return view ('siswa.create');
    }

    public function store(Request $request) {
        Siswa::create ([
            'name' => $request->name,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'nis' => $request->nis,
        ]);
    }

    public function index () {

        $siswa = Siswa::all();
        return view ('siswa.index', compact('siswa'));
    }

   

}
