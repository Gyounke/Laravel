<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->name(),
            'year' => $this->faker->year(),
            'color' => $this->faker->name(),
            'price' => $this->faker->numberBetween($min = 3500, $max = 10000),
            'reduction' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
