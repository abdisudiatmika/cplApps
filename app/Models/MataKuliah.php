<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $fillable = ['kode_mk', 'nama_mk', 'sks'];

    public function cpls()
    {
        return $this->belongsToMany(Cpl::class, 'cpl_mata_kuliah')
                    ->withPivot('persentase')
                    ->withTimestamps();
    }

    public function nilaiMahasiswas()
    {
        return $this->hasMany(NilaiMahasiswa::class);
    }

    public function dosens()
    {
        return $this->belongsToMany(Dosen::class, 'dosen_mata_kuliah');
    }

    public function komponenPenilaians()
    {
        return $this->hasMany(KomponenPenilaian::class);
    }
}
