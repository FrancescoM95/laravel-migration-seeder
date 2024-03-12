<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->randomElement(['Trenitalia', 'Italo', 'Ferrotramviaria']),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'cp' => fake()->randomNumber(5, true),
            'wagons' => rand(2, 16),
            'isInTime' => rand(0, 1),
            'isDeleted' => rand(0, 1),
        ];
    }
}
