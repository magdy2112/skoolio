<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class subjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = [
            'Mathematics',
            'Science',
            'Literature',
            'History',
            'Geography',
            'Art',
            'Computer Science',
            'Physics'
        ]; // List of subjects

        return [
            'name' => $this->faker->randomElement($subjects), // Choose a random subject
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
