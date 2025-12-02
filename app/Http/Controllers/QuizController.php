<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
       
        $quizzes = Quiz::withCount('questions')->get();

        return view('quizzes.index', compact('quizzes'));
    }

    public function show($id)
{
    $quiz = Quiz::with('questions.answers')->findOrFail($id);

    return view('quizzes.show', compact('quiz'));
}


   public function check($id, Request $request)
{

     $request->validate([
        'answers' => 'required|array',
        'answers.*' => 'required|string'
    ]);
    
    $quiz = Quiz::with('questions.answers')->findOrFail($id);

    $userAnswers = $request->input('answers');
    $score = 0;

    foreach ($quiz->questions as $index => $question) {

        $correct = $question->answers->where('is_correct', 1)->first();

        if ($correct &&
            isset($userAnswers[$index]) &&
            $userAnswers[$index] === $correct->answer_text
        ) {
            $score++;
        }
    }

    return view('quizzes.result', [
        'score' => $score,
        'total' => $quiz->questions->count(),
    ]);
}

}
