<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\JsonResponse;
use App\Models\User;

class VerifyEmailApiController extends Controller
{
    public function __invoke(EmailVerificationRequest $request): JsonResponse
    {

        // Lấy người dùng từ ID trong URL
        // $user = User::where('id', $request->route('id'))->firstOrFail();
        $user = User::findOrFail($request->route('id'));

        // Kiểm tra nếu email đã được xác minh
        if ($user->hasVerifiedEmail()) {
            return response()->json([
                'status' => 'already_verified',
                'message' => 'Email already verified'
            ], 200);
            // return View('email-verified'); // Trả về view nếu đã xác minh

        }

        // Đánh dấu email là đã xác minh
        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        // return view('email-verified');
        return response()->json([
            'status' => 'verified',
            'message' => 'Email verified successfully'
        ], 200);
    }
}
