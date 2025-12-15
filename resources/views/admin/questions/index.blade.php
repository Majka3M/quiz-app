<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pytania - {{ $quiz->title }}</title>
</head>
<body>

<h1>Pytania - {{ $quiz->title }}</h1>

<a href="{{ route('admin.questions.create', $quiz) }}">
    Dodaj pytanie
</a>

<hr>

<ul>
    @foreach($quiz->questions as $question)
        <li>
            <strong>{{ $question->content }}</strong>
            |
            <a href="{{ route('admin.answers.index', $question) }}">
                Odpowiedzi
            </a>
        </li>
    @endforeach
</ul>

<hr>

<a href="{{ route('admin.quizzes.index') }}">
    Powrót do quizów
</a>

</body>
</html>
