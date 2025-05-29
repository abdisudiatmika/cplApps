<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil id dari tabel dosens dan mata_kuliahs
        $dosenIds = DB::table('dosens')->pluck('id')->toArray();
        $mataKuliahIds = DB::table('mata_kuliahs')->pluck('id')->toArray();
        $kelasList = ['A', 'B', 'C'];

        foreach ($mataKuliahIds as $matkulId) {
            foreach ($kelasList as $kelas) {
                DB::table('kelas')->insert([
                    'nama_kelas'     => $kelas,
                    'mata_kuliah_id' => $matkulId,
                    'dosen_id'       => $dosenIds[array_rand($dosenIds)],
                    'semester'       => rand(1, 8),
                    'tahun_ajaran'   => '2024/2025',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]);
            }
        }
    }
}
