<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Disable foreign key checks to avoid constraint violations during truncation
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the tables
        Answer::truncate();
        Question::truncate();
        Lesson::truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $this->call([
            LessonSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
