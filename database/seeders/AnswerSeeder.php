<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::truncate(); // Clear existing answers
        // fetch all questions
        $questions = Question::all();

        // Define sample answers
        $sampleAnswers = [
            'Hello, how are you today?' => [
                'I\'m doing great, thank you!',
                'I\'m fine, how about you?',
                'Not too bad, thanks for asking.',
                'I\'m feeling a bit tired today.',
                'I\'m doing well, thank you for asking.',
            ],
            'I\'m glad to see you again.' => [
                'It\'s great to see you too!',
                'I missed you!',
                'Same here, it\'s been a while.',
                'I\'m happy to see you as well.',
                'It\'s always a pleasure to meet you.',
            ],
            'Good morning! How was your night?' => [
                'It was good, thank you!',
                'I slept really well.',
                'It was a bit restless, but I\'m okay.',
                'I had a great night, thanks for asking.',
                'It was peaceful, how about yours?',
            ],
            'Hi there! What\'s new with you?' => [
                'Not much, just the usual.',
                'I started a new project at work.',
                'I recently picked up a new hobby.',
                'I\'ve been traveling a lot lately.',
                'Nothing much, how about you?',
            ],
            'It\'s nice to meet you. How do you do?' => [
                'I\'m doing well, thank you.',
                'It\'s nice to meet you too!',
                'I\'m great, thanks for asking.',
                'I\'m doing fine, how about you?',
                'It\'s a pleasure to meet you as well.',
            ],
            'My name is John. What\'s your name?' => [
                'My name is Sarah.',
                'I\'m Alex. Nice to meet you!',
                'I\'m Emily. What about you?',
                'My name is Michael.',
                'I\'m Jessica. It\'s great to meet you!',
            ],
            'I work as a software developer. What about you?' => [
                'I\'m a teacher.',
                'I work as a graphic designer.',
                'I\'m a doctor.',
                'I\'m a student.',
                'I work in marketing.',
            ],
            'I\'m from New York. Where are you from?' => [
                'I\'m from Los Angeles.',
                'I\'m from London.',
                'I\'m from Tokyo.',
                'I\'m from Sydney.',
                'I\'m from Paris.',
            ],
            'Excuse me, can you tell me where the nearest bus stop is?' => [
                'It\'s just around the corner.',
                'Go straight and take the first left.',
                'It\'s right across the street.',
                'You\'ll find it near the park.',
                'It\'s a 5-minute walk from here.',
            ],
            'How do I get to the train station from here?' => [
                'Take the second right and walk straight.',
                'You can take a taxi from here.',
                'It\'s about 10 minutes away by foot.',
                'Follow the signs to the main road.',
                'It\'s next to the shopping mall.',
            ],
            'What do you usually do in your free time?' => [
                'I like reading books.',
                'I enjoy playing sports.',
                'I usually watch movies.',
                'I spend time with my family.',
                'I like going for walks.',
            ],
            'Can I see the menu, please?' => [
                'Here\'s the menu.',
                'Sure, let me get it for you.',
                'Of course, here you go.',
                'I\'ll bring it right away.',
                'Please take a look at our specials.',
            ],
            'What\'s the weather like in your city?' => [
                'It\'s sunny and warm.',
                'It\'s raining heavily.',
                'It\'s quite cold today.',
                'It\'s cloudy but pleasant.',
                'It\'s very windy right now.',
            ],
            'Let\'s start the meeting with the agenda.' => [
                'Sure, here\'s the agenda.',
                'Let\'s go through the main points.',
                'I\'ll share the agenda with everyone.',
                'Let\'s begin with the first item.',
                'Here\'s what we need to discuss today.',
            ],
            'Can you tell me about yourself?' => [
                'I\'m a software engineer with 5 years of experience.',
                'I recently graduated from university.',
                'I enjoy working on challenging projects.',
                'I have a background in marketing.',
                'I\'m passionate about learning new skills.',
            ],
        ];

        // Loop through each question and create answers
        foreach ($questions as $question) {
            if (isset($sampleAnswers[$question->question_text])) {
                foreach ($sampleAnswers[$question->question_text] as $answerText) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer_text' => $answerText,
                    ]);
                }
            }
        }
    }
}
