<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $nomEquipe = 0;
        $nomEquipe++;

        return [
            "name" => "Team " . $nomEquipe,
            "country" => $this->faker->country(),
            "continent" => $this->faker->randomElement(["EU", "HEU"]),
            "attack" => 2,
            "center" => 2,
            "defense" => 2,
            "replacment" => 3,
        ];
    }
}
