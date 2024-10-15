<?php

namespace Database\Factories;

use App\Models\ClassName;
use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'date' => $this->faker->dateTimeBetween('now','+30 days'),
            'user_id' => User::all()->random()->id,
            'level_id' => Level::all()->random()->id,
            'class_id' => ClassName::all()->random()->id, // class_id
        ];
    }
}
