<body class="p-4">
    <h1>{{ $quiz['title'] }}</h1>

    <form action="/quizzes/{{ $quiz['id'] }}/check" method="POST">
        @csrf

        <ol>
            @foreach ($quiz['questions'] as $index => $question)
                <li>
                    <p>{{ $question['text'] }}</p>

                    @foreach ($question['answers'] as $answer)
                        <label>
                            <input type="radio" name="answers[{{ $index }}]" value="{{ $answer }}" required>
                            {{ $answer }}
                        </label><br>
                    @endforeach
                </li>
            @endforeach
        </ol>

        <button type="submit">Sprawdź odpowiedzi</button>
    </form>

    <a href="/quizzes">⬅️ Powrót do listy quizów</a>
</body>
