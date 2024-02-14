<?php

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

Route::get('/articles', [ArticleController::class, 'list']);
Route::get('/articles/{id}', [ArticleController::class, 'item']);

Route::get('/categories', [CategoryController::class, 'list']);
Route::get('/categories/{id}', [CategoryController::class, 'item']);

Route::get('/titles', [TitleController::class, 'list']);
Route::get('/titles/{id}', [TitleController::class, 'item']);

Route::get('/creators', [CreatorController::class, 'list']);
Route::get('/creators/{id}', [CreatorController::class, 'item']);

Route::get('/editors', [EditorController::class, 'list']);
Route::get('/editors/{id}', [EditorController::class, 'item']);

Route::get('/mods', [ModController::class, 'list']);
Route::get('/mods/{id}', [ModController::class, 'item']);
