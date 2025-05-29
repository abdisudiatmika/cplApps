<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mata_kuliahs')->insert([
            ['kode_mk' => 'MPK2462401101', 'nama_mk' => 'Pendidikan Pancasila', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401102', 'nama_mk' => 'Hukum Pajak*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MPK2462401103', 'nama_mk' => 'Bahasa Indonesia', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401104', 'nama_mk' => 'Bahasa Inggris', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401105', 'nama_mk' => 'Matematika Bisnis', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401106', 'nama_mk' => 'Pengantar Akuntansi dan Praktikum*', 'sks' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401107', 'nama_mk' => 'Pengantar Bisnis', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401108', 'nama_mk' => 'Data Analitik*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MPK2462401109', 'nama_mk' => 'Green Tourism*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MPK2462401210', 'nama_mk' => 'Pendidikan Kewarganegaraan', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401211', 'nama_mk' => 'Statistika Bisnis', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401212', 'nama_mk' => 'Akuntansi Jasa Wisata*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401213', 'nama_mk' => 'Pengantar Ekonomi', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401214', 'nama_mk' => 'Sistem Informasi Akuntansi*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401215', 'nama_mk' => 'Data Visualisasi dan Presentasi*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401216', 'nama_mk' => 'Audit 1*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MBB2462401217', 'nama_mk' => 'Pendidikan Agama*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401218', 'nama_mk' => 'Akuntansi Keuangan Menengah 1 dan Praktikum*', 'sks' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401319', 'nama_mk' => 'Analisa Laporan Keuangan*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401320', 'nama_mk' => 'Perpajakan dan Praktikum*', 'sks' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401321', 'nama_mk' => 'Bahasa Inggris Niaga', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401322', 'nama_mk' => 'Database Aplikasi*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401323', 'nama_mk' => 'Akuntansi Biaya dan Praktikum*', 'sks' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401324', 'nama_mk' => 'Akuntansi Manajemen*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401325', 'nama_mk' => 'Akuntansi Keuangan Menengah 2 dan Praktikum*', 'sks' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401326', 'nama_mk' => 'Akuntansi Sektor Publik*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401327', 'nama_mk' => 'Audit 2*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401428', 'nama_mk' => 'Praktikum Audit*', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401429', 'nama_mk' => 'Akuntansi Internasional*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401430', 'nama_mk' => 'Penganggaran Perusahaan dan Pratikum*', 'sks' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401431', 'nama_mk' => 'Metode Penelitian Terapan', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401432', 'nama_mk' => 'Akuntansi Keuangan Lanjutan*', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401433', 'nama_mk' => 'Praktikum Akuntansi Komputer*', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401434', 'nama_mk' => 'Komunikasi Bisnis', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKK2462401435', 'nama_mk' => 'Hukum Bisnis', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MPB2462401436', 'nama_mk' => 'Kewirausahaan', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401537', 'nama_mk' => 'Magang*', 'sks' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401638', 'nama_mk' => 'Seminar Akuntansi*', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'MKB2462401639', 'nama_mk' => 'Tugas Akhir*', 'sks' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
