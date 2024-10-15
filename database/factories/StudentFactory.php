<?php

namespace Database\Factories;

use App\Models\ClassName;
use App\Models\Guardian;
use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'guardian_id' => Guardian::all()->random()->id,
            'level_id' => Level::all()->random()->id,
            'age' => $this->faker->numberBetween(5,18),
            'class_id'=>ClassName::all()->random()->id,

           
            'phone' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement(['male', 'female']),


        ];
    }
}



