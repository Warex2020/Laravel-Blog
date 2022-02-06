<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,100),
            'title' => $this->faker->sentence,
            'body' => $this->faker->text,
            'created_at' => $this->faker->dateTimeBetween('2022-01-01', '2023-01-01'),
            'deleted_at' => $this->faker->randomElement([
                null,
                $this->faker->dateTimeBetween('2022-01-01', '2023-01-01')
            ])
        ];
    }
}
