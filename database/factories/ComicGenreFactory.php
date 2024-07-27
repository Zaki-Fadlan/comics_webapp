<?php

namespace Database\Factories;

use App\Models\Comic;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ComicGenre>
 */
class ComicGenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comic_id' => Comic::factory(),
            'genre_id' => Genre::factory(),
        ];
    }
}
