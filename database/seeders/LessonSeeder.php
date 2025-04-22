<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentLessons = [
            ['title' => 'Basic Greetings', 'description' => 'Learn how to greet someone in English.', 'level' => 'easy', 'user_type' => 'student'],
            ['title' => 'Introducing Yourself', 'description' => 'Learn how to introduce yourself.', 'level' => 'easy', 'user_type' => 'student'],
            ['title' => 'Asking for Directions', 'description' => 'Learn how to ask for directions.', 'level' => 'medium', 'user_type' => 'student'],
            ['title' => 'Talking About Hobbies', 'description' => 'Learn how to talk about your hobbies.', 'level' => 'medium', 'user_type' => 'student'],
            ['title' => 'Ordering Food', 'description' => 'Learn how to order food at a restaurant.', 'level' => 'easy', 'user_type' => 'student'],
            ['title' => 'Talking About Weather', 'description' => 'Learn how to discuss the weather.', 'level' => 'easy', 'user_type' => 'student'],
            ['title' => 'Shopping Vocabulary', 'description' => 'Learn vocabulary for shopping.', 'level' => 'medium', 'user_type' => 'student'],
            ['title' => 'Making Plans', 'description' => 'Learn how to make plans with friends.', 'level' => 'medium', 'user_type' => 'student'],
            ['title' => 'Talking About Family', 'description' => 'Learn how to describe your family.', 'level' => 'easy', 'user_type' => 'student'],
            ['title' => 'Basic Travel Phrases', 'description' => 'Learn phrases for traveling.', 'level' => 'medium', 'user_type' => 'student'],
        ];

        $workingLessons = [
            ['title' => 'Business Meetings', 'description' => 'Learn how to participate in business meetings.', 'level' => 'medium', 'user_type' => 'working'],
            ['title' => 'Writing Emails', 'description' => 'Learn how to write professional emails.', 'level' => 'medium', 'user_type' => 'working'],
            ['title' => 'Job Interviews', 'description' => 'Learn how to prepare for job interviews.', 'level' => 'hard', 'user_type' => 'working'],
            ['title' => 'Presentations', 'description' => 'Learn how to give effective presentations.', 'level' => 'hard', 'user_type' => 'working'],
            ['title' => 'Negotiation Skills', 'description' => 'Learn how to negotiate in English.', 'level' => 'hard', 'user_type' => 'working'],
            ['title' => 'Office Small Talk', 'description' => 'Learn how to engage in small talk at work.', 'level' => 'easy', 'user_type' => 'working'],
            ['title' => 'Customer Service', 'description' => 'Learn phrases for customer service.', 'level' => 'medium', 'user_type' => 'working'],
            ['title' => 'Team Collaboration', 'description' => 'Learn how to collaborate with your team.', 'level' => 'medium', 'user_type' => 'working'],
            ['title' => 'Time Management', 'description' => 'Learn vocabulary for managing time effectively.', 'level' => 'easy', 'user_type' => 'working'],
            ['title' => 'Workplace Vocabulary', 'description' => 'Learn common workplace vocabulary.', 'level' => 'easy', 'user_type' => 'working'],
        ];

        foreach ($studentLessons as $lesson) {
            Lesson::create($lesson);
        }
        foreach ($workingLessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}
