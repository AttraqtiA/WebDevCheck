<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nickname' => $this->faker->name(),
            'grade_number' => $this->faker->numberBetween(10, 100),
            'phone' => $this->faker->phoneNumber(),
            'sosmed' => $this->faker->word(),
            'email'=> $this->faker->safeEmail(),
            'password'=> $this->faker->password(),
            'gender'=> $this->faker->word(),
            'birthdate' => $this->faker->date(),
            'nationality' => $this->faker->word(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'province' => $this->faker->state(),
            'country' => $this->faker->country(),
            'postcode' => $this->faker->postcode(),
            'photo' => $this->faker->imageUrl(100, 100, 'person', true),
            'notes' => $this->faker->sentence(),

            // 'extracurricular_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
