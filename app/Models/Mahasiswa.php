<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    use HasFactory;
protected $fillable = ['nim', 'nama', 'program_studi', 'semester', 'kelas'];


    public function nilaiMahasiswas()
    {
        return $this->hasMany(NilaiMahasiswa::class);
    }
}
