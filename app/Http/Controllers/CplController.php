<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cpl;

class CplController extends Controller
{
    public function index()
    {
        $cpls = Cpl::all();
        return view('cpl.index', compact('cpls'));
    }

    public function create()
    {
        return view('cpl.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_cpl'   => 'required|unique:cpls,kode_cpl',
            'deskripsi'  => 'required',
            'kategori'   => 'required',
        ]);

        Cpl::create($request->only(['kode_cpl', 'deskripsi', 'kategori']));

        return redirect()->route('cpl.index')->with('success', 'CPL berhasil ditambahkan.');
    }

    public function edit(Cpl $cpl)
    {
        return view('cpl.edit', compact('cpl'));
    }

    public function update(Request $request, Cpl $cpl)
    {
        $request->validate([
            'kode_cpl'   => 'required|unique:cpls,kode_cpl,' . $cpl->id,
            'deskripsi'  => 'required',
            'kategori'   => 'required',
        ]);

        $cpl->update($request->only(['kode_cpl', 'deskripsi', 'kategori']));

        return redirect()->route('cpl.index')->with('success', 'CPL berhasil diperbarui.');
    }

    public function destroy(Cpl $cpl)
    {
        $cpl->delete();
        return redirect()->route('cpl.index')->with('success', 'CPL berhasil dihapus.');
    }
}
