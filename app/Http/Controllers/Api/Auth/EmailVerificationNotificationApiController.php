<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\CustomVerifyEmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class EmailVerificationNotificationApiController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        // Validate the email in the request
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->firstOrFail();

        // Check if the email is already verified
        if ($user->hasVerifiedEmail()) {
            return response()->json(['message' => 'Email already verified'], 200);
        }

        // Generate a custom verification URL
        $verificationUrl = URL::temporarySignedRoute(
            'api.verification.verify',
            now()->addMinutes(60),
            [
                'id' => $user->id,
                'hash' => sha1($user->email),
            ]
        );

        // Send the email verification notification
        $user->notify(new CustomVerifyEmail($verificationUrl));

        return response()->json(['message' => 'Verification link sent'], 200);

        // if ($request->user()->hasVerifiedEmail()) {
        //     return response()->json(['message' => 'Email already verified'], 200);
        // }

        // // Generate a custom verification URL with the `is_mobile` parameter
        // $verificationUrl = URL::temporarySignedRoute(
        //     'api.verification.verify',
        //     now()->addMinutes(60),
        //     [
        //         'id' => $request->user()->id,
        //         'hash' => sha1($request->user()->email),
        //     ]
        // );

        // $request->user()->sendEmailVerificationNotification($verificationUrl);
        // // Send the email with the custom URL

        // return response()->json(['message' => 'Verification link sent'], 200);
    }
}
