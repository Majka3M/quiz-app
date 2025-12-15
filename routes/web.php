<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Admin\QuestionAdminController;
use App\Http\Controllers\Admin\QuizAdminController;
use App\Http\Controllers\Admin\AnswerAdminController;


Route::get('/', [QuizController::class, 'index']);



Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');


Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');

Route::post('/quizzes/{id}/check', [QuizController::class, 'check'])->name('quizzes.check');

Route::prefix('admin')->group(function () {
    Route::get('/quizzes', [QuizAdminController::class, 'index'])->name('admin.quizzes.index');
    Route::get('/quizzes/create', [QuizAdminController::class, 'create'])->name('admin.quizzes.create');
    Route::post('/quizzes', [QuizAdminController::class, 'store'])->name('admin.quizzes.store');
    Route::get('/quizzes/{quiz}/edit', [QuizAdminController::class, 'edit'])->name('admin.quizzes.edit');
    Route::put('/quizzes/{quiz}', [QuizAdminController::class, 'update'])->name('admin.quizzes.update');
    Route::delete('/quizzes/{quiz}', [QuizAdminController::class, 'destroy'])->name('admin.quizzes.destroy');
    Route::get('/quizzes/{quiz}/questions', [QuestionAdminController::class, 'index'])
        ->name('admin.questions.index');
    Route::get('/quizzes/{quiz}/questions/create', [QuestionAdminController::class, 'create'])
        ->name('admin.questions.create');
    Route::post('/quizzes/{quiz}/questions', [QuestionAdminController::class, 'store'])
        ->name('admin.questions.store');
        Route::get('/questions/{question}/answers', [AnswerAdminController::class, 'index'])
    ->name('admin.answers.index');
Route::get('/questions/{question}/answers/create', [AnswerAdminController::class, 'create'])
    ->name('admin.answers.create');
Route::post('/questions/{question}/answers', [AnswerAdminController::class, 'store'])
    ->name('admin.answers.store');

});

