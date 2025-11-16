<?php

use Illuminate\Support\Facades\Route;

// Strona główna
Route::get('/', function () {
    return view('welcome');
});

// Lista quizów
Route::get('/quizzes', function () {
    $quizzes = [
        ['id' => 1, 'title' => 'Quiz o filozofii', 'questions' => 5],
    ];
    return view('quizzes.index', compact('quizzes'));
});


Route::get('/quizzes/{id}', function ($id) {
    $quiz = [
        'id' => $id,
        'title' => 'Quiz o filozofii',
        'questions' => [
            [
                'text' => 'Kto jest autorem słów "Wiem, że nic nie wiem"?',
                'answers' => ['Sokrates', 'Platon', 'Arystoteles']
            ],
            [
                'text' => 'Który filozof napisał "Byt i czas"?',
                'answers' => ['Martin Heidegger', 'Friedrich Nietzsche', 'Jean-Paul Sartre']
            ],
            [
                'text' => 'Co oznacza łacińskie "memento mori"?',
                'answers' => ['Pamiętaj, że umrzesz', 'Pamiętaj, że jesteś człowiekiem', 'Żyj chwilą']
            ],
            [
                'text' => 'Jakie przesłanie niesie motyw "danse macabre" (taniec śmierci)?',
                'answers' => [
                    'Równość wszystkich wobec śmierci',
                    'Zachętę do zabawy i radości życia',
                    'Wiarę w życie po śmierci'
                ]
            ],
            [
                'text' => 'Który filozof napisał "Rozprawę o metodzie"?',
                'answers' => ['René Descartes', 'Immanuel Kant', 'Francis Bacon']
            ],
        ],
    ];
    return view('quizzes.show', compact('quiz'));
});
