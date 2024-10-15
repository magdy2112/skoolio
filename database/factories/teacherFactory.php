<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class teacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => hash::make('password'),
            'phone' => $this->faker->phoneNumber,
            'subject_id' =>Subject::all()->random()->id, // assuming you have 10 subjects

        ];
    }
}




// 'name' => $this->faker->name,
// 'email' => $this->faker->unique()->safeEmail,
// 'password' => hash::make('password'), // default password
// 'photo' => $this->faker->imageUrl(200, 200),
// 'phone' => $this->faker->phoneNumber,
// 'address' => $this->faker->address,
// 'age' => $this->faker->numberBetween(25, 60),
// 'experience' => $this->faker->numberBetween(1, 20),
// 'price' => $this->faker->numberBetween(100, 500),
// 'description' => $this->faker->paragraph,
// 'gender' => $this->faker->randomElement(['male', 'female']),
// 'status' => $this->faker->randomElement(['active', 'inactive']),
// 'qualification_id' => Qualification::all()->random()->id, // assuming you have 10 qualifications
// 'specialization_id' =>Specialization::all()->random()->id , // assuming you have 10 specializations
// 'city_id' => City::all()->random()->id, // assuming you have 27 cities
// 'email_verified_at' => now(),
