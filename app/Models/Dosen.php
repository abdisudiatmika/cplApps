<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // ← jika dosen bisa login
use Illuminate\Notifications\Notifiable;

class Dosen extends Authenticatable // ← pakai ini jika login
{
    use HasFactory, Notifiable;

    protected $fillable = ['nidn', 'nama', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    // Relasi ke tabel nilai_mahasiswa
    public function nilaiMahasiswas()
    {
        return $this->hasMany(NilaiMahasiswa::class);
    }

    // Relasi ke tabel pivot dosen_mata_kuliah
    public function mataKuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'dosen_mata_kuliah');
    }

    // Relasi ke komponen_penilaian (bobot kehadiran, tugas, dll)
    public function komponenPenilaians()
    {
        return $this->hasMany(KomponenPenilaian::class);
    }
    public function user()
{
    return $this->belongsTo(User::class, 'nidn', 'nidn');
}
public function kelas()
{
    return $this->hasMany(Kelas::class);
}

}
