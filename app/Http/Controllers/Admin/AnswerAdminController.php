<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerAdminController extends Controller
{
    public function index(Question $question)
    {
        $answers = $question->answers;
        return view('admin.answers.index', compact('question', 'answers'));
    }

    public function create(Question $question)
    {
        return view('admin.answers.create', compact('question'));
    }

    public function store(Request $request, Question $question)
    {
        // 👇 TEST – SPRAWDZAMY CO PRZYCHODZI
        dd(
            'QUESTION ID:',
            $question->id,
            'REQUEST:',
            $request->all()
        );

        $request->validate([
            'answer_text' => 'required|string',
            'is_correct' => 'required|in:0,1',
        ]);

        if ($request->is_correct == 1) {
            $question->answers()->update(['is_correct' => 0]);
        }

        $question->answers()->create([
            'answer_text' => $request->answer_text,
            'is_correct' => $request->is_correct,
        ]);

        return redirect()
            ->route('admin.answers.index', $question)
            ->with('success', 'Odpowiedź dodana');
    }
}
