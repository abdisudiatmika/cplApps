<?php

namespace App\Http\Controllers;
use App\Models\CplMataKuliah;
use App\Models\Cpl;
use App\Models\MataKuliah;

use Illuminate\Http\Request;

class BobotCplController extends Controller
{
    public function create()
    {
       $mataKuliahs = MataKuliah::all();
    $cpls = Cpl::all();

    // Ambil semua data bobot cpl dari DB
    $bobotTersimpan = CplMataKuliah::get()
        ->groupBy('mata_kuliah_id')
        ->map(function ($group) {
            return $group->pluck('persentase', 'cpl_id');
        });

    return view('bobot_cpl.create', compact('mataKuliahs', 'cpls', 'bobotTersimpan'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'persentase' => 'required|array',
        ]);

        $total = array_sum($request->persentase);

        if ($total != 100) {
            return back()->withErrors(['Total persentase harus 100%, sekarang ' . $total . '%'])->withInput();
        }

        // Hapus bobot lama dulu (jika ada)
        CplMataKuliah::where('mata_kuliah_id', $request->mata_kuliah_id)->delete();

        foreach ($request->persentase as $cplId => $persen) {
            if ($persen > 0) {
                CplMataKuliah::create([
                    'mata_kuliah_id' => $request->mata_kuliah_id,
                    'cpl_id' => $cplId,
                    'persentase' => $persen
                ]);
            }
        }

        return redirect()->back()->with('success', 'Bobot CPL berhasil disimpan.');
    }
}
