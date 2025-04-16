<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthenticatedTokenApiController extends Controller
{
    public function store(LoginRequest $request): JsonResponse
    {
        $request->authenticate();
        $user = $request->user();
        // Regenerate session is not needed for mobile APIs
        $token = $user->createToken('mobile-app')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
            'user' => $request->user(),
            'survey_completed' => $user->survey_completed,
        ], 200);
    }

    public function logout(Request $request)
    {
        // Xóa token hiện tại
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully',
        ], 200);
    }

    public function destroy(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete(); // Revoke all tokens for the user

        return response()->json(['message' => 'Logout successful'], 200);
    }
}
