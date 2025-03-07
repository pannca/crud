<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Rayon;
use App\Repository\SiswaRepository;
use App\Repository\SiswaImpelements;


use Illuminate\Http\Request;

class SiswaController extends Controller
{
    protected $siswaImplements;

    public function __construct(SiswaRepository $siswaImplements)
    {
        $this->siswaImplements = $siswaImplements;
    }

    public function create()
    {
        $rayons = Rayon::all();
        return view('siswa.create', compact('rayons'));
    }

    public function store(Request $request)
    {
        if (Siswa::where('nis', $request->nis)->exists()) {
            return redirect()->back()->with('error', 'nis sudah terdaftar');
        }
        $this->siswaImplements->store($request->all());

        // Siswa::create([
        //     'nama' => $request->nama,
        //     'rayon_id' => $request->rayon_id,
        //     'rombel' => $request->rombel,
        //     'nis' => $request->nis,
        // ]);

        return redirect()->route('siswa.index')->with('success', 'berhasil menambahkan data');
    }

    public function index()
    {

        $siswa = Siswa::with('rayon')->get();
        return view('siswa.index', compact('siswa'));
    }

    public function hapus($id)
    {
        Siswa::where('id', $id)->delete();

        return redirect()->back()->with('success' , 'berhasil menghapus data siswa!');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $rayons = Rayon::all();
        return view('siswa.edit', compact('siswa' , 'rayons'));
    }

    public function editProsess(Request $request, $id)
    {

        // dd($request->all());
        Siswa::where('id', $id)->update([
            'nama' => $request->nama,
            'rayon_id' => $request->rayon_id,
            'rombel' => $request->rombel,
            'nis' => $request->nis
        ]);

        return redirect()->route('siswa.index')->with('success', 'berhasil mengedit data siswa');
    }
}
