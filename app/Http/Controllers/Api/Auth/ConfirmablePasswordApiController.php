<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ConfirmablePasswordApiController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        if (
            !Auth::guard('web')->validate([
                'email' => $request->user()->email,
                'password' => $request->password,
            ])
        ) {
            return response()->json(['message' => 'Invalid password'], 422);
        }

        return response()->json(['message' => 'Password confirmed'], 200);
    }
}
