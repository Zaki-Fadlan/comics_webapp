<?php

namespace Database\Factories;

use App\Models\ComicsType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alternate_title' => fake()->sentence(),
            'title' => fake()->sentence(),
            'slug_title' => Str::slug(fake()->sentence()),
            'author' => fake()->name(),
            'released_at' => fake()->dateTime(),
            'cover' => fake()->imageUrl($width = 230, $height = 300),
            'type_id' => ComicsType::factory(),
            'synopsis' => fake()->text(500),
        ];
    }
}
