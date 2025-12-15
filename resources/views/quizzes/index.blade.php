<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Quizy</title>
</head>
<body>

<h1>Lista quizów</h1>

<ul>
    @foreach ($quizzes as $quiz)
        <li>
            <a href="{{ route('quizzes.show', $quiz->id) }}">
                {{ $quiz->title }} ({{ $quiz->questions_count }} pytań)
            </a>
        </li>
    @endforeach
</ul>

</body>
</html>
