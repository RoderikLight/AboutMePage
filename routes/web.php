<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\SurveyController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/content/card1', [ContentController::class, 'card1Content']);
Route::get('/content/card2', [ContentController::class, 'card2Content']);
Route::get('/content/card3', [ContentController::class, 'card3Content']);
Route::get('/content/card4', [ContentController::class, 'card4Content']);
Route::get('/content/card5', [ContentController::class, 'card5Content']);
Route::post('/survey', [SurveyController::class, 'store']);