<?php

namespace Database\Seeders;

use App\Models\Comic;
use App\Models\Genre;
use App\Models\ComicGenre;
use App\Models\ComicsType;
use App\Models\ComicsChapter;
use App\Models\ComicsStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ComicsTypeSeeder::class, ComicsStatusSeeder::class, GenreSeeder::class]);

        Comic::factory(100)->recycle([
            ComicsStatus::all(),
            ComicsType::all(),
        ])->create();
        ComicGenre::factory(100)->recycle([
            Comic::all(),
            Genre::all(),
        ])->create();
        ComicsChapter::factory(5000)->recycle([
            Comic::all(),
        ])->create();
    }
}
