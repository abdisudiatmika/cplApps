<?php
namespace App\Http\Controllers;
use App\Models\MataKuliah;
use Illuminate\Http\Request;


class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('mata_kuliah.index', compact('mataKuliahs'));
    }

    public function create()
    {
        return view('mata_kuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
        ]);

        MataKuliah::create($request->only('kode_mk', 'nama_mk', 'sks'));

        return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function edit(MataKuliah $mataKuliah)
    {
        return view('mata_kuliah.edit', compact('mataKuliah'));
    }

    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk,' . $mataKuliah->id,
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
        ]);
       
        $mataKuliah->update($request->only('kode_mk', 'nama_mk', 'sks'));

        return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    public function destroy(MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();

        return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
