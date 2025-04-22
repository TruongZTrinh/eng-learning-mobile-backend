<?php

namespace App\Http\Controllers\Api\VocabularyQuiz;

use App\Http\Controllers\Controller;
use App\Models\Vocabulary;
use Illuminate\Http\Request;

class VocabularyController extends Controller
{
    public function getVocabularyByDifficulty(Request $request)
    {
        $request->validate([
            'vocabulary_quiz_topic_id' => 'required|integer',
            'level' => 'required|in:easy,medium,hard',
        ]);

        $vocabulary = Vocabulary::where('vocabulary_quiz_topic_id', $request->vocabulary_quiz_topic_id)
            ->where('level', $request->level)
            ->inRandomOrder()
            ->take(10)
            ->get();

        return response()->json($vocabulary);
    }
}
