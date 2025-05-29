<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SyncDosenUsers extends Command
{
    protected $signature = 'sync:dosen-users';
    protected $description = 'Sinkronisasi data dosen ke tabel users';

    public function handle()
    {
        $dosenList = Dosen::all();
        $created = 0;
        $updated = 0;
        $skipped = 0;

        foreach ($dosenList as $dosen) {
            $email = $dosen->email ?: $dosen->nidn . '@kampus.ac.id';

            // Cek apakah user sudah ada berdasarkan NIDN
            $user = User::where('nidn', $dosen->nidn)->first();

            // Kalau user belum ada berdasarkan nidn, cek berdasarkan email
            if (!$user) {
                $userByEmail = User::where('email', $email)->first();

                // Jika ada user dengan email tapi belum punya nidn, update saja
                if ($userByEmail && $userByEmail->nidn === null) {
                    $userByEmail->nidn = $dosen->nidn;
                    $userByEmail->save();
                    $updated++;
                    $this->info("🛠️  Update NIDN untuk user '{$userByEmail->name}'");
                    continue;
                }

                // Buat user baru
                User::create([
                    'name' => $dosen->nama,
                    'nidn' => $dosen->nidn,
                    'email' => $email,
                    'password' => Hash::make('password123'),
                    'role' => 'dosen',
                ]);

                $created++;
                $this->info("✅ User baru dibuat: {$dosen->nama}");
            } else {
                $skipped++;
            }
        }

        $this->line("\n🎉 Sinkronisasi selesai:");
        $this->line("➕ User dibuat : $created");
        $this->line("🛠️  User diperbarui : $updated");
        $this->line("⏩ Dilewati : $skipped");
    }
}
