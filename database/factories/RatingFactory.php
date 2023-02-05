<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1, 100),
            'user_id' => $this->faker->numberBetween(1, 20),
            'post_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
