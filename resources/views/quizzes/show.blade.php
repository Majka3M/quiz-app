<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{{ $quiz->title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="p-4">

    <h1>{{ $quiz->title }}</h1>

    <form action="/quizzes/{{ $quiz->id }}/check" method="POST" class="mt-4">
        @csrf

        <ol>
            @foreach ($quiz->questions as $index => $question)
                <li class="mb-3">
                    <p><strong>{{ $question->content }}</strong></p>

                    @foreach ($question->answers as $answer)
                        <label class="d-block">
                            <input type="radio" name="answers[{{ $index }}]" value="{{ $answer->answer_text }}" required>
                            {{ $answer->answer_text }}
                        </label>
                    @endforeach
                </li>
            @endforeach
        </ol>

        <button class="btn btn-primary mt-3" type="submit">Sprawdź odpowiedzi</button>
    </form>

    <a href="/quizzes" class="d-block mt-3">⬅️ Powrót do listy quizów</a>

</body>
</html>
