<?php

namespace Database\Factories;

use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassName>
 */
class classnameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $classname = [
            'Class 1' ,
            'Class 2' ,
            'Class 3' ,
            'Class 4' ,
            'Class 5' ,
            'Class 6' ,
            'Class 7' ,
            'Class 8' ,
            'Class 9' ,
            'Class 10' ,
            'Class 11' ,
            'Class 12' ,
            'Class 13' ,
            'Class 14' ,
            'Class 15' ,
            'Class 16' ,
            'Class 17' ,
            'Class 18' ,
            'Class 19' ,
            'Class 20' ,
            'Class 21' ,
            'Class 22' ,
            'Class 23' ,
            'Class 24' ,
            'Class 25' ,
            'Class 26' ,
            'Class 27' ,
            'Class 28' ,
            'Class 29' ,
            'Class 30' ,
        ];
           return[
            'name' => $this->faker->randomElement( $classname),
            'level_id' => Level::all()->random()->id, // assuming you have 20 levels
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
