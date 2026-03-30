<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'desc' => $this->faker->paragraph(3, true),
            'salary' => $this->faker->numberBetween(30000, 90000),
            'user_id' => \App\Models\User::factory(),

        ];
    }
}
