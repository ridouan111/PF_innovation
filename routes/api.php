<?php

use App\Models\Secteur;
use App\Models\TypeLeve;
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


Route::post('reset-password', [NewPasswordController::class, 'store'])
->name('password.update');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/secteurs', function (Request $request) {
    $secteurs= Secteur::All("secteur");
    return $secteurs; 
});

Route::get('/typeleves', function (Request $request) {
    $typeleves= TypeLeve::All("nom");
    return $typeleves; 
});
 

Route::middleware('auth:sanctum')->get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
