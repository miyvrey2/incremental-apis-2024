<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Empty the lessons table
        Lesson::truncate();

        // Create 30 lessons
        $lessons = Lesson::factory(30)
                     ->create();
    }
}
