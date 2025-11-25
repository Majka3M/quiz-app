<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        // ===== QUIZ 1 =====
        $quiz1 = Quiz::create([
            'title' => 'Filozofia – podstawy',
            'description' => 'Quiz filozoficzny stworzony na podstawie starego kontrolera.',
        ]);

        $q1 = Question::create([
            'quiz_id' => $quiz1->id,
            'content' => 'Kto jest autorem „Państwa”?',
        ]);

        Answer::create(['question_id' => $q1->id, 'answer_text' => 'Platon', 'is_correct' => true]);
        Answer::create(['question_id' => $q1->id, 'answer_text' => 'Sokrates']);
        Answer::create(['question_id' => $q1->id, 'answer_text' => 'Arystoteles']);

        $q2 = Question::create([
            'quiz_id' => $quiz1->id,
            'content' => 'Co oznacza termin „epistemologia”?',
        ]);

        Answer::create(['question_id' => $q2->id, 'answer_text' => 'Teoria poznania', 'is_correct' => true]);
        Answer::create(['question_id' => $q2->id, 'answer_text' => 'Nauka o bycie']);
        Answer::create(['question_id' => $q2->id, 'answer_text' => 'Nauka o moralności']);



        // ===== QUIZ 2 =====
        $quiz2 = Quiz::create([
            'title' => 'Dance Macabre – motywy filozoficzne',
            'description' => 'Quiz o motywach Dance Macabre.',
        ]);

        $q3 = Question::create([
            'quiz_id' => $quiz2->id,
            'content' => 'Motyw Dance Macabre podkreśla:',
        ]);

        Answer::create(['question_id' => $q3->id, 'answer_text' => 'Równość wobec śmierci', 'is_correct' => true]);
        Answer::create(['question_id' => $q3->id, 'answer_text' => 'Chwałę królów']);
        Answer::create(['question_id' => $q3->id, 'answer_text' => 'Triumf życia']);

        $q4 = Question::create([
            'quiz_id' => $quiz2->id,
            'content' => 'Dance Macabre najczęściej przedstawia:',
        ]);

        Answer::create(['question_id' => $q4->id, 'answer_text' => 'Taniec śmierci z ludźmi', 'is_correct' => true]);
        Answer::create(['question_id' => $q4->id, 'answer_text' => 'Świętych i proroków']);
        Answer::create(['question_id' => $q4->id, 'answer_text' => 'Raj na ziemi']);
    }
}
