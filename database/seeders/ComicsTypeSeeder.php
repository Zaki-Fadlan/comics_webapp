<?php

namespace Database\Seeders;

use App\Models\ComicsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ComicsType::factory(3)->create();
        ComicsType::create(['name' => 'MANHWA', 'code' => 'kr']);
        ComicsType::create(['name' => 'MANGA', 'code' => 'jp']);
        ComicsType::create(['name' => 'MANHUA', 'code' => 'cn']);
    }
}
