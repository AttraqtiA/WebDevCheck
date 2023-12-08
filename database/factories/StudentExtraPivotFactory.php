<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentExtraPivot>
 */
class StudentExtraPivotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'extracurricular_id' => $this->faker->numberBetween(1, 5),
            'student_id'=> $this->faker->numberBetween(1, 100),
        ];
    }
}
