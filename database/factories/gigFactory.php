<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\gig>
 */
class gigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title' => $this->faker->sentence(),
            'email' => $this->faker->email(),
            'company' => $this->faker->company(),
            'website' => $this->faker->url(),
            'tags' => 'laravel, api, inertiaJS',
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(3)

        ];
    }
}
