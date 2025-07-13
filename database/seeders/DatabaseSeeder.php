<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::factory()->create([
            'username' => 'hafiz',
            'id_role' => 1,
        ]);
    }
}
