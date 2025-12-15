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
        // WALIDACJA FORMULARZA
        $request->validate([
            'answers'   => 'required|array',
            'answers.*' => 'required|integer',
        ]);

        $quiz = Quiz::with('questions.answers')->findOrFail($id);

        $userAnswers = $request->input('answers');
        $score = 0;

        foreach ($quiz->questions as $question) {

            $correct = $question->answers
                ->where('is_correct', 1)
                ->first();

            if (
                $correct &&
                isset($userAnswers[$question->id]) &&
                $userAnswers[$question->id] == $correct->id
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
