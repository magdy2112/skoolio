<?php

namespace Database\Factories;

use App\Models\ClassName;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Class_Teacher>
 */
class Class_TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
'class_id' => ClassName::all()->random()->id,
'teacher_id' => Teacher::all()->random()->id,
        ];
    }
}

