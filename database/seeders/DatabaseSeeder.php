<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat role langsung di sini
        Role::updateOrCreate(
            ['id' => 1],
            ['name' => 'admin']
        );

        Role::updateOrCreate(
            ['id' => 2],
            ['name' => 'pengguna']
        );

        // Buat user admin
        User::updateOrCreate(
            ['username' => 'hafiz'],
            [
                'password' => Hash::make('password'),
                'id_role' => 1,
                // 'email' => 'hafiz@example.com',
                // 'remember_token' => Str::random(10),
            ]
        );
    }
}
