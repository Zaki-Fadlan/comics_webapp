<?php

namespace Database\Seeders;

use App\Models\Comic;
use App\Models\ComicsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comic::factory(100)->create();
    }
}
