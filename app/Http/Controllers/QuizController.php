<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private $quizzes = [
        1 => [
            'title' => 'Filozofia – podstawy',
            'questions' => [
                [
                    'text' => 'Kto jest autorem „Państwa”?',
                    'answers' => ['Platon', 'Sokrates', 'Arystoteles']
                ],
                [
                    'text' => 'Co oznacza termin „epistemologia”?',
                    'answers' => ['Teoria poznania', 'Nauka o bycie', 'Nauka o moralności']
                ]
            ]
        ],

        2 => [
            'title' => 'Dance Macabre – motywy filozoficzne',
            'questions' => [
                [
                    'text' => 'Motyw Dance Macabre podkreśla:',
                    'answers' => ['Równość wobec śmierci', 'Chwałę królów', 'Triumf życia']
                ],
                [
                    'text' => 'Dance Macabre najczęściej przedstawia:',
                    'answers' => ['Taniec śmierci z ludźmi', 'Świętych i proroków', 'Raj na ziemi']
                ]
            ]
        ],
    ];

    public function index()
{
    $quizzes = [];

    foreach ($this->quizzes as $id => $quiz) {
        $quizzes[] = [
            'id' => $id,
            'title' => $quiz['title'],
            'questions' => count($quiz['questions'])
        ];
    }

    return view('quizzes.index', compact('quizzes'));
}


    public function show($id)
{
    if (!isset($this->quizzes[$id])) {
        abort(404);
    }

    $quiz = $this->quizzes[$id];

    
    $quiz['id'] = $id;

    return view('quizzes.show', compact('quiz'));
}


    public function check($id, Request $request)
{
    if (!isset($this->quizzes[$id])) {
        abort(404);
    }

    $quiz = $this->quizzes[$id];

    // Pobieramy odpowiedzi użytkownika
    $userAnswers = $request->input('answers');

    // Liczymy wynik
    $score = 0;

    foreach ($quiz['questions'] as $index => $question) {
        $correct = $question['answers'][0]; // pierwsza odpowiedź to poprawna
        if (isset($userAnswers[$index]) && $userAnswers[$index] === $correct) {
            $score++;
        }
    }

    return view('quizzes.result', [
        'score' => $score,
        'total' => count($quiz['questions']),
    ]);
}

}
