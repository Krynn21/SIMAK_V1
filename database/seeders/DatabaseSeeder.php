<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        User::firstOrCreate([
            'username' => 'hafiz',
            'email' => 'hafiz@example.com',
            'password' => Hash::make('password'), // atau bcrypt('password')
            'id_role' => 1,
        ]);
    }
}
