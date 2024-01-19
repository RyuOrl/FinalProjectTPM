<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/check-group', [APIController::class, 'checkGroup'])->name('check-group');
Route::post('/check-line-id', [APIController::class, 'checkLineId'])->name('check-line-id');
Route::post('/check-email', [APIController::class, 'checkEmail'])->name('check-email');
Route::post('/check-whatsapp-number', [APIController::class, 'checkWhatsappNumber'])->name('check-whatsapp-number');

