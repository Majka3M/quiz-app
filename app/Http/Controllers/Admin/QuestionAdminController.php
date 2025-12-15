<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionAdminController extends Controller
{
    public function index(Quiz $quiz)
    {
        $questions = $quiz->questions;

        return view('admin.questions.index', compact('quiz', 'questions'));
    }

    public function create(Quiz $quiz)
    {
        return view('admin.questions.create', compact('quiz'));
    }

    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'content' => 'required|string|min:3',
        ]);

        $quiz->questions()->create([
            'content' => $request->content,
        ]);

        return redirect()
            ->route('admin.questions.index', $quiz)
            ->with('success', 'Pytanie dodane');
    }

    public function destroy(Quiz $quiz, Question $question)
    {
        $question->delete();

        return redirect()
            ->route('admin.questions.index', $quiz)
            ->with('success', 'Pytanie usunięte');
    }
}
