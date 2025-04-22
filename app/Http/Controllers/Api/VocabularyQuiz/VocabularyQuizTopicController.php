<?php

namespace App\Http\Controllers\Api\VocabularyQuiz;

use App\Http\Controllers\Controller;
use App\Models\VocabularyQuizTopic;
use Illuminate\Http\Request;

class VocabularyQuizTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fetch all topics
        $topics = VocabularyQuizTopic::all();

        return response()->json($topics);
    }
}
