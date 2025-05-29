<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Dosen;
use Illuminate\Support\Facades\Auth;

class DosenMataKuliahController extends Controller
{
    public function index()
    {
        // Anggap dosen login sudah pakai Auth::user()
        $dosen = Auth::user(); // diasumsikan menggunakan auth bawaan Laravel

        // Ambil semua matkul yang diajar oleh dosen ini
        $mataKuliahs = $dosen->mataKuliahs;

        return view('dosen.matakuliah.index', compact('mataKuliahs'));
    }
}
