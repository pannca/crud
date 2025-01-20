<?php

namespace App\Http\Controllers;

use App\Models\Siswa;


use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'nis' => 'required',
        ]);

        if (Siswa::where('nis', $request->nis)->exists()) {
            return redirect()->back()->with('error', 'nis sudah terdaftar');
        }

        Siswa::create([
            'name' => $request->name,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'nis' => $request->nis,
        ]);

        return redirect()->route('siswa.index')->with('success', 'berhasil menambahkan data');
    }

    public function index()
    {

        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function hapus($id)
    {
        Siswa::where('id', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.edit', compact('siswa'));
    }

    public function editProsess(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'nis' => 'required',
        ]);

        if (Siswa::where('nis', $request->nis)->exists()) {
            return redirect()->back()->with('error', 'nis sudah terdaftar');
        }

        Siswa::where('id', $id)->update([
            'name' => $request->name,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'nis' => $request->nis
        ]);

        return redirect()->route('siswa.index')->with('success', 'berhasil mengedit data siswa');
    }
}
