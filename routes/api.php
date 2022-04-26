<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', [RegisteredUserController::class, 'store']);

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
->name('password.email');

Route::post('reset-password', [NewPasswordController::class, 'store'])
->name('password.update');

Route::middleware('auth:sanctum')->get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
