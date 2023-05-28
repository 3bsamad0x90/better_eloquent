<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'user_id' => $this->faker->numberBetween(1, 20),
                'device_id' => $this->faker->numberBetween(1, 1000),
            'from' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
                'to' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
                'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
                'reason' => $this->faker->text(100),
        ];
    }
}
