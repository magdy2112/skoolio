<?php

namespace Database\Factories;

use App\Models\ClassName;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Homework>
 */
class HomeworkFactory extends Factory
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
            'teacher_id'=>Teacher::all()->random()->id,
            'subject_id'=>Subject::all()->random()->id,
            'level_id'=>Level::all()->random()->id,
            'description'=>$this->faker->paragraph(2),
            'due_date'=>$this->faker->date('Y-m-d'),
        ];
    }
}

