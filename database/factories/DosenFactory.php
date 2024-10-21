<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class DosenFactory extends Factory
{

    public function definition()
{
    return [
        'name' => $this->faker->name(),
        'age' => $this->faker->numberBetween(20, 60),
        'gender' => $this->faker->randomElement(['male', 'female']),
        'birthdate' => $this->faker->date(),
        'is_active' => $this->faker->boolean(),
    ];



}
}
