<?php

namespace Database\Factories;

use App\Models\Level;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'subject_id'=>Subject::all()->random()->id,
            'teacher_id'=>Teacher::all()->random()->id,
            'level_id'=>Level::all()->random()->id,
            'exam_type'=>$this->faker->randomElement(['midterm','final']),
          
        ];
    }
}
