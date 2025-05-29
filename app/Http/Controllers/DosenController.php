<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|unique:dosens,nidn',
            'nama' => 'required',
            'email' => 'nullable|email|unique:dosens,email',
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make('12345678'), // password default
        ]);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nidn' => 'required|unique:dosens,nidn,' . $dosen->id,
            'nama' => 'required',
            'email' => 'nullable|email|unique:dosens,email,' . $dosen->id,
        ]);

        $dosen->update($request->only('nidn', 'nama', 'email'));

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui.');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus.');
    }
public function matakuliahSaya()
{
    $dosen = auth()->user();
    $mataKuliahs = $dosen->mataKuliahs;

    // view yang benar
    return view('dosen.matakuliah.index', compact('mataKuliahs'));
}

    public function assignMatakuliahForm(Dosen $dosen)
    {
        $mataKuliahTerpakai = Dosen::where('id', '!=', $dosen->id)
            ->with('mataKuliahs:id')
            ->get()
            ->pluck('mataKuliahs')
            ->flatten()
            ->pluck('id')
            ->unique()
            ->toArray();

        $mataKuliahs = MataKuliah::whereNotIn('id', $mataKuliahTerpakai)
            ->orWhereHas('dosens', function($q) use ($dosen) {
                $q->where('dosens.id', $dosen->id);
            })->get();

        $assigned = $dosen->mataKuliahs->pluck('id')->toArray();

        return view('dosen.assign-matakuliah', compact('dosen', 'mataKuliahs', 'assigned'));
    }

    public function assignMatakuliah(Request $request, Dosen $dosen)
    {
        $request->validate([
            'mata_kuliah_ids' => 'array',
        ]);

        $dosen->mataKuliahs()->sync($request->mata_kuliah_ids ?? []);

        return redirect()->route('dosen.index')->with('success', 'Mata kuliah berhasil diatur.');
    }
    public function dashboard()
{
    $dosen = auth()->user();
    $mataKuliahs = $dosen->mataKuliahs;

    return view('Dosen.dashboard', compact('mataKuliahs', 'dosen'));
}

}
