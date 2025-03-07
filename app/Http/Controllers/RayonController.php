<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;
use App\Repository\RayonRepository;

class RayonController extends Controller
{
    protected $rayonImplemenets;

    public function __construct(RayonRepository $rayonImplemenets)
    {
        $this->rayonImplemenets = $rayonImplemenets;
    }
    public function index()
    {
        $rayons = Rayon::all();
        return view ('rayon.index' , compact('rayons'));
    }

    public function create() {
        return view('rayon.create');
    }

    public function store (Request $request) {

        $this->rayonImplemenets->store($request->all());

        // Rayon::create([
        //     'nama_rayon' => $request->nama_rayon
        // ]);
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
