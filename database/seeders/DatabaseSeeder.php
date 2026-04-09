<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // USER
        User::factory()->create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '02287520220',
            'password' => bcrypt('admin123'),
        ]);
        User::factory()->create([
            'nama' => 'Gandara Fathurrahman',
            'email' => 'gandara@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '089509137208',
            'password' => bcrypt('user123'),
        ]);

        // KATEGORI
        Kategori::create([
            'nama_kategori' => 'Monitor'
        ]);
        Kategori::create([
            'nama_kategori' => 'Keyboard'
        ]);
        Kategori::create([
            'nama_kategori' => 'Flashdisk'
        ]);
        Kategori::create([
            'nama_kategori' => 'Mouse'
        ]);
        Kategori::create([
            'nama_kategori' => 'Cooling Pad'
        ]);
    }
}
