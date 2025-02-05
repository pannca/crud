<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;

class RayonController extends Controller
{
    public function index()
    {
        $rayons = Rayon::all();
        return view ('rayon.index' , compact('rayons'));
    }

    public function create() {
        return view('rayon.create');
    }

    public function store (Request $request) {
        Rayon::create([
            'nama_rayon' => $request->nama_rayon
        ]);
        return redirect()->route('rayon.index')->with('success', 'berhasil menambahkan data rayon');
    }

    public function hapus($id) {
        Rayon::where('id', $id)->delete();
        return redirect()->route('rayon.index')->with('success', 'berhasil menghapus data rayon');
    }

    public function edit($id) {
        $rayon = Rayon::find($id);
        return view('rayon.edit', compact('rayon'));
    }

    public function editProsess(Request $request, $id) {
        $rayon = Rayon::find($id);

        $rayon->update([
            'nama_rayon' => $request->nama_rayon
        ]);
        return redirect()->route('rayon.index')->with('success', 'berhasil mengedit data rayon');
    }
}
