<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan seeder Role terlebih dahulu
        $this->call(RoleSeeder::class);

        // Baru buat user yang membutuhkan id_role = 1
        User::firstOrCreate(
            ['username' => 'hafiz'], // dicari berdasarkan username saja
            [
                'password' => Hash::make('password'),
                'id_role' => 1,
                // 'email' => 'hafiz@example.com',
                // 'remember_token' => Str::random(10),
            ]
        );
    }
}
