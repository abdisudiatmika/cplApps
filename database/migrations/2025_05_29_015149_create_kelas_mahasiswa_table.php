<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasMahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $mahasiswaIds = DB::table('mahasiswas')->pluck('id')->toArray();
        $kelasIds = DB::table('kelas')->pluck('id')->toArray();

        foreach ($mahasiswaIds as $mhsId) {
            // Setiap mahasiswa masuk ke salah satu kelas secara acak
            DB::table('kelas_mahasiswa')->insert([
                'mahasiswa_id' => $mhsId,
                'kelas_id'     => $kelasIds[array_rand($kelasIds)],
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}
