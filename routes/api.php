<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;

/*
|--------------------------------------------------------------------------
| API Routes;
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

//send message
Route::get('/chatUpdate', [TelegramController::class, 'chatUpdate']);
Route::post('/sendMessage', [TelegramController::class, 'sendMessage']);
Route::get('/webhooks', [TelegramController::class, 'webhooks']);

// Api for users subcription


