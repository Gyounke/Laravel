<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $team = 2;
        static $role = 1;
        static $counter = 0;

        if ($counter < 2) {
            $counter++;
        } else {
            $role++;
            if ($role === 4) {
                $counter = 0;
            } else {
                $counter =1;
            }
        }

        if ($role >4) {
            $role = 1;
            $team++;
            $counter = 1;
        }
        return [
            "name" => $this->faker->lastName(),
            "prenom" => $this->faker->firstName(),
            "age" => $this->faker->numberBetween(18, 32),
            "phone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "gender" => $this->faker->randomElement(["H", "F", "X"]),
            "country" => $this->faker->country(),
            "role_id" => $role,
            "team_id" => $team,
        ];
    }
}
