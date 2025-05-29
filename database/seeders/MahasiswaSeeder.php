<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = ['AKM', 'AKP', 'D3 Akuntansi', 'D2'];
        $semesters = [1, 2, 3, 4, 5, 6, 7, 8];
        $kelas = ['A', 'B', 'C'];

        for ($i = 1; $i <= 50; $i++) {
            DB::table('mahasiswas')->insert([
                'nim'           => 'MHS' . str_pad($i, 5, '0', STR_PAD_LEFT),
                'nama'          => 'Mahasiswa ' . $i,
                'program_studi' => $prodis[array_rand($prodis)],
                'semester'      => $semesters[array_rand($semesters)],
                'kelas'         => $kelas[array_rand($kelas)],
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
    }
}
