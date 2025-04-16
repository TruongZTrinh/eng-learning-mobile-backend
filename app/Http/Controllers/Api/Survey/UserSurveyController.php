<?php

namespace App\Http\Controllers\Api\Survey;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class UserSurveyController extends Controller
{
    public function completeSurvey(Request $request)
    {
        $user = $request->user();
        $user->survey_completed = true; // Đánh dấu khảo sát đã hoàn thành
        $user->save();

        return response()->json([
            'message' => 'Survey completed successfully',
        ]);
    }

    public function updateUserType(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $valiatedData = $request->validate([
            'user_type' => 'required|in:student,working',
        ]);

        // Update the user type
        $user->user_type = $valiatedData['user_type'];
        $user->save();

        return response()->json(['message' => 'User type updated successfully']);
    }
}
