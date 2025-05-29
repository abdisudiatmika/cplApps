<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'mata_kuliah_id',
        'dosen_id',
        'semester',
        'tahun_ajaran',
    ];

    // Relasi ke dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    // Relasi ke mata kuliah
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }

    // Relasi ke mahasiswa (melalui tabel pivot kelas_mahasiswa)
    public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class, 'kelas_mahasiswa');
    }
}
