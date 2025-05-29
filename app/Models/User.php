<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // pastikan field 'role' ada kalau kamu pakai untuk membedakan dosen/admin
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Relasi: User ke Dosen
     */
    public function dosen()
    {
        return $this->hasOne(Dosen::class, 'nidn', 'nidn'); // asumsi nidn digunakan sebagai penghubung
    }

    /**
     * Relasi tidak langsung: Mata Kuliah yang diajar (via dosen)
     */
    public function getMataKuliahsViaDosen()
{
    return $this->dosen ? $this->dosen->mataKuliahs : collect();
}
    /**
     * Cek apakah user adalah dosen
     */
    public function isDosen()
    {
        return $this->role === 'dosen';
    }

    /**
     * Cek apakah user adalah admin
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
