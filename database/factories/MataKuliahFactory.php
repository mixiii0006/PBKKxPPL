<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MataKuliahFactory extends Factory
{
    public function definition()
    {
        return [
            'nama_mk' => $this->faker->words(3, true),
            'sks' => $this->faker->numberBetween(2, 4),
            'dosen_id' => Dosen::factory(), // Relasi dengan dosen,
            
        ];
    }


}
