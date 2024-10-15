<?php

namespace Database\Factories;

use App\Models\ClassName;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'class_id'=>ClassName::all()->random()->id,
            'teacher_id'=>\App\Models\Teacher::all()->random()->id,
            'subject_id'=>\App\Models\Subject::all()->random()->id,
            'day'=> $this->faker->randomElement(['Monday','Tuesday','Wednesday','Thursday','Saturday','Sunday']),



        ];
    }
}
