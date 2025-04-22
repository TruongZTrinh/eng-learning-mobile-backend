<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all lessons
        $lessons = Lesson::all();

        // Define sample questions for each lesson
        $sampleQuestions = [
            'Basic Greetings' => [
                'Hello, how are you today?',
                'I\'m glad to see you again.',
                'Good morning! How was your night?',
                'Hi there! What\'s new with you?',
                'It\'s nice to meet you. How do you do?',
            ],
            'Introducing Yourself' => [
                'My name is John. What\'s your name?',
                'I work as a software developer. What about you?',
                'I\'m from New York. Where are you from?',
                'I enjoy reading books in my free time. What do you like to do?',
                'It\'s great to meet you. Let\'s stay in touch!',
            ],
            'Asking for Directions' => [
                'Excuse me, can you tell me where the nearest bus stop is?',
                'I\'m looking for the library. Can you help me?',
                'How do I get to the train station from here?',
                'Is there a good restaurant nearby?',
                'Thank you for your help. I really appreciate it.',
            ],
            'Talking About Hobbies' => [
                'I love playing the guitar. What about you?',
                'Do you enjoy outdoor activities like hiking?',
                'My favorite hobby is painting. What\'s yours?',
                'I recently started learning photography. It\'s so much fun!',
                'What do you usually do in your free time?',
            ],
            'Ordering Food' => [
                'I\'d like to order a cheeseburger and fries, please.',
                'Can I see the menu, please?',
                'I\'ll have a cup of coffee with no sugar.',
                'Could you recommend a good dessert?',
                'Thank you! The food was delicious.',
            ],
            'Talking About Weather' => [
                'It\'s sunny today. How about where you are?',
                'Do you like rainy days?',
                'What\'s the weather like in your city?',
                'It\'s very cold this morning. Do you prefer cold or warm weather?',
                'The forecast says it will snow tomorrow. Have you ever seen snow?',
            ],
            'Shopping Vocabulary' => [
                'How much does this cost?',
                'Can I get a discount on this item?',
                'Do you accept credit cards?',
                'Where can I find the electronics section?',
                'I\'m looking for a gift. Can you recommend something?',
            ],
            'Making Plans' => [
                'What are you doing this weekend?',
                'Let\'s meet at the coffee shop at 3 PM.',
                'Do you want to go to the movies tonight?',
                'How about having dinner together tomorrow?',
                'I\'ll check my schedule and let you know.',
            ],
            'Talking About Family' => [
                'How many siblings do you have?',
                'My parents are both teachers. What about yours?',
                'Do you have any children?',
                'I have a big family with lots of cousins.',
                'What do you usually do with your family on weekends?',
            ],
            'Basic Travel Phrases' => [
                'Where is the nearest train station?',
                'Can you help me find a taxi?',
                'How much is a ticket to New York?',
                'What time does the next bus leave?',
                'I need directions to the airport, please.',
            ],
            'Business Meetings' => [
                'Let\'s start the meeting with the agenda.',
                'Can you share your thoughts on this topic?',
                'We need to finalize the budget by next week.',
                'Let\'s schedule the next meeting for Friday.',
                'Thank you for your input. Let\'s move to the next point.',
            ],
            'Writing Emails' => [
                'How do you start a professional email?',
                'Please find the attached document.',
                'Let me know if you have any questions.',
                'Looking forward to your reply.',
                'Thank you for your time and consideration.',
            ],
            'Job Interviews' => [
                'Can you tell me about yourself?',
                'What are your strengths and weaknesses?',
                'Why do you want to work for our company?',
                'Where do you see yourself in five years?',
                'Do you have any questions for us?',
            ],
            'Presentations' => [
                'Let me start by introducing the topic.',
                'Here are the key points of my presentation.',
                'Does anyone have any questions so far?',
                'Let\'s summarize the main ideas.',
                'Thank you for your attention. Any feedback?',
            ],
            'Negotiation Skills' => [
                'Can we find a middle ground on this issue?',
                'I think this proposal benefits both sides.',
                'Let\'s discuss the terms in more detail.',
                'What are your priorities in this negotiation?',
                'I believe we can reach a win-win solution.',
            ],
            'Office Small Talk' => [
                'How was your weekend?',
                'Did you watch the game last night?',
                'What\'s your favorite coffee shop around here?',
                'The weather is great today, isn’t it?',
                'How long have you been working here?',
            ],
            'Customer Service' => [
                'How can I assist you today?',
                'I\'m sorry for the inconvenience. Let me fix that for you.',
                'Can I help you find what you\'re looking for?',
                'Thank you for your feedback. We appreciate it.',
                'Is there anything else I can do for you?',
            ],
            'Team Collaboration' => [
                'Let\'s divide the tasks among the team.',
                'How can we improve our teamwork?',
                'I think we should brainstorm ideas together.',
                'Let\'s set a deadline for this project.',
                'Great job, everyone! Let\'s keep up the good work.',
            ],
            'Time Management' => [
                'What\'s the most important task for today?',
                'Let\'s prioritize the deadlines for this week.',
                'How do you usually manage your time?',
                'I use a planner to organize my schedule.',
                'Let\'s set reminders for the upcoming meetings.',
            ],
            'Workplace Vocabulary' => [
                'Can you send me the report by EOD?',
                'Let\'s have a quick meeting to discuss this.',
                'I\'ll CC you on the email.',
                'The deadline for this task is next Monday.',
                'Let\'s touch base on this project tomorrow.',
            ],
            'I\'m looking for the library. Can you help me?' => [
                'Sure, it\'s just down the street.',
                'Take the second left and you\'ll see it.',
                'It\'s near the park, you can\'t miss it.',
                'Walk straight for two blocks, it\'s on your right.',
                'I think it\'s next to the coffee shop.',
            ],
            'Is there a good restaurant nearby?' => [
                'Yes, there\'s a great Italian place around the corner.',
                'You should try the sushi bar down the street.',
                'There\'s a nice café just a block away.',
                'I recommend the steakhouse near the mall.',
                'There\'s a popular burger joint nearby.',
            ],
            'Do you enjoy outdoor activities like hiking?' => [
                'Yes, I love hiking in the mountains.',
                'I enjoy camping and hiking on weekends.',
                'Not really, I prefer indoor activities.',
                'I like hiking, but I don’t do it often.',
                'Yes, it\'s a great way to stay active.',
            ],
            'Could you recommend a good dessert?' => [
                'You should try the chocolate lava cake.',
                'The cheesecake here is amazing.',
                'I recommend the fruit tart.',
                'The ice cream sundae is very popular.',
                'You can’t go wrong with the apple pie.',
            ],
            'Do you like rainy days?' => [
                'Yes, I find them very relaxing.',
                'Not really, I prefer sunny weather.',
                'I enjoy staying indoors and reading on rainy days.',
                'Rainy days are perfect for watching movies.',
                'I like the sound of rain, it\'s calming.',
            ],
            'How much does this cost?' => [
                'It costs $20.',
                'This item is $15.',
                'It\'s on sale for $10.',
                'The price is $25.',
                'It\'s $30, but there\'s a discount available.',
            ],
            'What are you doing this weekend?' => [
                'I\'m planning to visit my family.',
                'I might go hiking with friends.',
                'I\'ll probably stay home and relax.',
                'I have a few errands to run.',
                'I\'m thinking of going to the beach.',
            ],
            'Do you have any children?' => [
                'Yes, I have two kids.',
                'No, I don’t have any children.',
                'I have one child, a daughter.',
                'Yes, I have a son and a daughter.',
                'Not yet, but I hope to have kids someday.',
            ],
            'Can you help me find a taxi?' => [
                'Sure, I can call one for you.',
                'There\'s a taxi stand nearby.',
                'You can use a ride-sharing app.',
                'I\'ll flag one down for you.',
                'There\'s a taxi service number you can call.',
            ],
            'Can you share your thoughts on this topic?' => [
                'I think it\'s a very important issue.',
                'In my opinion, we should focus on the key points.',
                'I believe we need more data to decide.',
                'It\'s a complex topic, but I have some ideas.',
                'I think collaboration is the best approach here.',
            ],
            'How do you start a professional email?' => [
                'Start with a polite greeting like "Dear [Name]".',
                'Use "Hello [Name]" for a friendly tone.',
                'Begin with "To whom it may concern" if you don’t know the recipient.',
                'Always include a subject line that summarizes the email.',
                'Start with a brief introduction if it’s your first email.',
            ],
            'What are your strengths and weaknesses?' => [
                'My strength is problem-solving, and my weakness is overthinking.',
                'I\'m very organized, but I can be a bit of a perfectionist.',
                'I excel at teamwork, but I sometimes struggle with public speaking.',
                'I\'m great at multitasking, but I need to improve my time management.',
                'I\'m highly motivated, but I can be impatient at times.',
            ],
            'Does anyone have any questions so far?' => [
                'Yes, I have a question about the last point.',
                'No questions for now, everything is clear.',
                'Could you elaborate on the second slide?',
                'I have a question about the timeline.',
                'Can you clarify the budget details?',
            ],
            'How was your weekend?' => [
                'It was great, I went hiking.',
                'Pretty relaxing, I stayed home.',
                'It was busy, I had a lot of errands.',
                'I spent time with family, it was nice.',
                'It was fun, I went to a concert.',
            ],
            'How do you usually manage your time?' => [
                'I use a planner to organize my tasks.',
                'I prioritize my work based on deadlines.',
                'I set daily goals to stay focused.',
                'I use time-blocking techniques.',
                'I try to avoid multitasking and focus on one task at a time.',
            ],
            'Let\'s divide the tasks among the team.' => [
                'I can take care of the first task.',
                'Let\'s assign roles based on strengths.',
                'I think we should split the workload evenly.',
                'I\'ll handle the documentation part.',
                'Let\'s discuss who will do what.',
            ],
            'Can you send me the report by EOD?' => [
                'Sure, I\'ll send it before the end of the day.',
                'I\'m working on it and will send it soon.',
                'I\'ll make sure it\'s ready by EOD.',
                'I need a bit more time, but I\'ll try my best.',
                'I\'ll send it over as soon as it\'s done.',
            ],
        ];

        foreach ($lessons as $lesson) {
            if (isset($sampleQuestions[$lesson->title])) {
                foreach ($sampleQuestions[$lesson->title] as $questionText) {
                    $lesson->questions()->create([
                        'lesson_id' => $lesson->id,
                        'question_text' => $questionText,
                    ]);
                }
            }
        }
    }
}
