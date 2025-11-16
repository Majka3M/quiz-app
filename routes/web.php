<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

// Strona główna
Route::get('/', function () {
    return view('welcome');
});

// Lista quizów – kontroler
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

// Pojedynczy quiz – kontroler
Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');

Route::post('/quizzes/{id}/check', [QuizController::class, 'check'])->name('quizzes.check');
