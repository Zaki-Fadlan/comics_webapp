<?php

namespace Database\Seeders;

use App\Models\ComicsStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ComicsStatus::create(['name' => 'Ongoing']);
        ComicsStatus::create(['name' => 'Completed']);
    }
}
