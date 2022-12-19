<?php
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CharacterController;

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

Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/characters/{character}', [CharacterController::class, 'show']);
Route::post('/characters', [CharacterController::class, 'store']);
Route::put('/characters/{character}', [CharacterController::class, 'update']);
Route::delete('/characters/{character}', [CharacterController::class, 'destroy']);

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{skill}', [SkillController::class, 'show']);
Route::post('/skills', [SkillController::class, 'store']);
Route::put('/skills/{skill}', [SkillController::class, 'update']);
Route::delete('/skills{skill}', [SkillController::class, 'destroy']);
