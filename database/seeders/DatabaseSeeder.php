<?php

namespace Database\Seeders;

use App\Models\Comic;
use App\Models\ComicGenre;
use App\Models\ComicsChapter;
use App\Models\ComicsType;
use App\Models\Genre;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ComicsTypeSeeder::class, GenreSeeder::class]);

        Comic::factory(100)->recycle([
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
