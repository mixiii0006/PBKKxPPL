<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dosen;
use App\Models\MataKuliah;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $dosen = Dosen::factory()->create([
            'name' => 'Test User 1',
            'age' => 25,
            'gender' => 'male',
            'birthdate' => '1990-01-01',
            'is_active' => true,
        ]);

        MataKuliah::create([
            'nama_mk' => 'Pemrograman Web',
            'sks' => 3,
            'dosen_id' => $dosen->id,
        ]);

        MataKuliah::create([
            'nama_mk' => 'Basis Data',
            'sks' => 4,
            'dosen_id' => $dosen->id,
        ]);

    }
}
