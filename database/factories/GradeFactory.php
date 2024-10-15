<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id'=>Teacher::all()->random()->id,
            'subject_id'=>Subject::all()->random()->id,
            'student_id'=>Student::all()->random()->id,
            'grade' => $this->faker->numberBetween(50, 100),
        ];
    }
}

