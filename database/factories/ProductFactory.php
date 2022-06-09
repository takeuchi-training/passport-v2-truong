<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'name' => $this->faker->words($nb = 2, $asText = true),
            'slug' => $this->faker->slug($nbWords = 3),
            'description' => $this->faker->sentences($nb = 6, $asText = true),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999)
        ];
    }
}
