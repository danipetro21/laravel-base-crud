<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SantiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> firstName(),
            'birdPlace' => fake() -> lastName(),
            'blessingDate' => fake() -> date(),
            'miracleCount' => fake() -> numberBetween(1, 99),
        ];
    }
}
