<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{{ $quiz->title }}</title>
</head>
<body class="p-4">

<h1>{{ $quiz->title }}</h1>

<form method="POST" action="{{ route('quizzes.check', $quiz->id) }}">
    @csrf

    <ol>
        @foreach($quiz->questions as $question)
            <li>
                <p><strong>{{ $question->content }}</strong></p>

                @foreach($question->answers as $answer)
                    <label>
                        <input type="radio"
                               name="answers[{{ $question->id }}]"
                               value="{{ $answer->id }}"
                               required>
                        {{ $answer->answer_text }}
                    </label><br>
                @endforeach
            </li>
        @endforeach
    </ol>

    <button type="submit">Sprawdź wynik</button>
</form>

<a href="{{ route('quizzes.index') }}">Powrót</a>

</body>
</html>
