<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(1), // index di dalem kurung itu gak ngefek
            'path' => fake()->email(),
            'rarity' => $this->faker->word(), 
            // $this->faker bisa buat eksternal, biasain pake ini aja

            // php artisan migrate:fresh --seed
        ];
    }
}
