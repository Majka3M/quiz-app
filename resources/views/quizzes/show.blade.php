<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{{ $quiz['title'] }}</title>
</head>
<body class="p-4">
    <h1>{{ $quiz['title'] }}</h1>

    <ol>
        @foreach ($quiz['questions'] as $question)
            <li>
                <p>{{ $question['text'] }}</p>
                <ul>
                    @foreach ($question['answers'] as $answer)
                        <li>{{ $answer }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ol>

    <a href="/quizzes">⬅️ Powrót do listy quizów</a>
</body>
</html>
