<?php

namespace App\Http\Controllers\Api\Lessons;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Fetch all lessons.
     */
    public function index(Request $request): JsonResponse
    {
        $user = $request->user();

        if (!in_array($user->user_type, ['student', 'working'])) {
            return response()->json(['message' => 'Invalid user type'], 400);
        }

        $lessons = Lesson::where('user_type', $user->user_type)
            ->with(['questions', 'questions.answers'])
            ->orderBy('created_at', 'desc')
            ->get(); // Lọc theo user_type
        return response()->json($lessons);
    }
}
