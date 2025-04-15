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

        // Kiểm tra nếu email chưa được xác minh
        // if (!$user->hasVerifiedEmail()) {
        //     return response()->json([
        //         'message' => 'Your email address is not verified. Please verify your email to log in.',
        //     ], 403);
        // }

        // Regenerate session is not needed for mobile APIs
        $token = $request->user()->createToken('mobile-app')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
            'user' => $request->user(),
        ], 200);
    }

    public function destroy(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete(); // Revoke all tokens for the user

        return response()->json(['message' => 'Logout successful'], 200);
    }
}
