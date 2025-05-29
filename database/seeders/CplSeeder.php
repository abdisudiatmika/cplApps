<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cpl;

class CplSeeder extends Seeder
{
    public function run(): void
    {
        // SIKAP
        Cpl::create([
            'kode_cpl' => 'S1',
            'deskripsi' => 'Lulusan yang beriman, bertakwa, berakhlak mulia, berkarakter sesuai dengan nilai-nilai Pancasila dan menginternalisasi sikap, norma dan perilaku sesuai dengan Etika Bisnis dan etika profesi.',
            'kategori' => 'SIKAP'
        ]);
        Cpl::create([
            'kode_cpl' => 'S2',
            'deskripsi' => 'Menunjukkan sikap bertanggung jawab atas pekerjaan di bidang keahliannya secara mandiri.',
            'kategori' => 'SIKAP'
        ]);

        // PENGETAHUAN
        $pengetahuan = [
            'P1' => 'Menguasai prinsip akuntansi perusahaan jasa, dagang dan pabrikasi berskala kecil, menengah dan besar secara umum;',
            'P2' => 'Menguasai konsep teoritis secara umum penyajian dan pengungkapan laporan keuangan perusahaan perseorangan, Perseroan Terbatas (PT) ...',
            'P3' => 'Menguasai konsep teoretis secara umum pengakuan, pengukuran, penyajian dan pengungkapan elemen laporan keuangan perusahaan ...',
            'P4' => 'Menguasai prinsip akuntansi sektor publik dan akuntansi dana desa secara umum;',
            'P5' => 'Menguasai konsep teoritis akuntansi biaya konvensional meliputi job order costing system dan process costing system secara umum;',
            'P6' => 'Menguasai konsep teoritis dan prinsip-prinsip sistem informasi akuntansi dan pengendalian internal secara umum;',
            'P7' => 'Menguasai pengetahuan operasional yang lengkap, prinsip-prinsip serta konsep umum perpajakan ...',
            'P8' => 'Menguasai konsep teoritis dan prinsip-prinsip pengauditan laporan keuangan secara umum ...',
            'P9' => 'Menguasai konsep teoritis penganggaran entitas jasa, dagang dan pabrikasi secara umum;',
            'P10' => 'Menguasai konsep teoritis dan prinsip-prinsip dasar informasi akuntansi manajerial ...',
            'P11' => 'Menguasai konsep teoritis dan prinsip-prinsip manajemen keuangan secara umum;',
            'P12' => 'Menguasai konsep teoritis, prinsip-prinsip teknologi kekinian (informasi dan digital), ...',
            'P13' => 'Menguasai pengetahuan faktual tentang bisnis, komunikasi bisnis, ekonomi, manajemen, dan hukum komersial;',
            'P14' => 'Menguasai konsep teoritis dan prinsip-prinsip kewirausahaan secara umum;',
            'P15' => 'Menguasai konsep teoritis dan prinsip-prinsip penyusunan karya ilmiah serta teknik komunikasi yang efektif ...',
        ];
        foreach ($pengetahuan as $kode => $deskripsi) {
            Cpl::create([
                'kode_cpl' => $kode,
                'deskripsi' => $deskripsi,
                'kategori' => 'PENGETAHUAN'
            ]);
        }

        // KETERAMPILAN KHUSUS
        for ($i = 1; $i <= 16; $i++) {
            Cpl::create([
                'kode_cpl' => 'KK' . $i,
                'deskripsi' => 'Deskripsi KK' . $i . ' (isi lengkap sesuai dokumen aslinya)',
                'kategori' => 'KETERAMPILAN KHUSUS'
            ]);
        }

        // KETERAMPILAN UMUM
        for ($i = 1; $i <= 8; $i++) {
            Cpl::create([
                'kode_cpl' => 'KU' . $i,
                'deskripsi' => 'Deskripsi KU' . $i . ' (isi lengkap sesuai dokumen aslinya)',
                'kategori' => 'KETERAMPILAN UMUM'
            ]);
        }
    }
}
