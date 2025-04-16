<?php

use App\Http\Controllers\Api\Auth\AuthenticatedTokenApiController;
use App\Http\Controllers\Api\Auth\ConfirmablePasswordApiController;
use App\Http\Controllers\Api\Auth\EmailVerificationNotificationApiController;
use App\Http\Controllers\Api\Auth\EmailVerificationPromptApiController;
use App\Http\Controllers\Api\Auth\NewPasswordApiController;
use App\Http\Controllers\Api\Auth\PasswordApiController;
use App\Http\Controllers\Api\Auth\PasswordResetLinkApiController;
use App\Http\Controllers\Api\Auth\VerifyEmailApiController;
use App\Http\Controllers\Api\Survey\UserSurveyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisteredUserApiController;
use Illuminate\Http\Request;

// Định nghĩa rate limiter
RateLimiter::for('api', function (Request $request) {
    return \Illuminate\Cache\RateLimiting\Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserApiController::class, 'create'])
        ->name('api.register');

    Route::post('register', [RegisteredUserApiController::class, 'store']);

    Route::post('login', [AuthenticatedTokenApiController::class, 'store'])
        ->name('api.login');

    Route::post('forgot-password', [PasswordResetLinkApiController::class, 'store'])->name('api.password.forgot');

    Route::post('reset-password', [NewPasswordApiController::class, 'store'])
        ->name('api.password.reset');
});

Route::middleware('auth:sanctum')->group(function () {
    // Logout
    Route::post('logout', [AuthenticatedTokenApiController::class, 'destroy'])
        ->name('api.logout');

    // Confirm password
    Route::post('confirm-password', [ConfirmablePasswordApiController::class, 'store'])
        ->name('api.password.confirm');

    // Update password
    Route::put('password', [PasswordApiController::class, 'update'])
        ->name('api.password.update');

    // Email Verification Prompt
    Route::get('verify-email', [EmailVerificationPromptApiController::class, '__invoke'])
        ->name('api.verification.notice');

    // Email Verification Notification
    Route::post('email/verification-notification', [EmailVerificationNotificationApiController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('api.verification.send');

     Route::post('complete-survey', [UserSurveyController::class, 'completeSurvey'])
        ->name('api.survey.complete'); // Đường dẫn cho việc hoàn thành khảo sát

    Route::post('survey/update-user-type', [UserSurveyController::class, 'updateUserType'])
        ->name('api.survey.update-user-type'); // Đường dẫn cho việc cập nhật loại người dùng
});

// Verify email
Route::get('verify-email/{id}/{hash}', [VerifyEmailApiController::class, '__invoke'])
    ->middleware('signed')
    ->name('api.verification.verify');