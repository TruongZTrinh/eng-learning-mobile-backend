<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use Illuminate\Http\Request;

class VerifyEmailApiController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {

        // Lấy người dùng từ ID trong URL
        /**
         * @var User $user
         */
        $user = User::findOrFail($request->route('id'));

        // Kiểm tra hash có hợp lệ không
        if (!hash_equals((string) $request->route('hash'), sha1($user->email))) {
            return response()->json(['message' => 'Invalid verification link'], 403);
        }

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
