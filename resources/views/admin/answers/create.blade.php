<h1>Dodaj odpowiedź</h1>

<p><strong>{{ $question->content }}</strong></p>

<form method="POST" action="{{ route('admin.answers.store', $question) }}">
    @csrf

    <div>
        <label>Treść odpowiedzi</label><br>
        <input type="text" name="answer_text" required>
    </div>

    <div>
        <label>
            <input type="radio" name="is_correct" value="1" required>
            Poprawna
        </label>

        <label>
            <input type="radio" name="is_correct" value="0" required>
            Niepoprawna
        </label>
    </div>

    <button type="submit">Zapisz</button>
</form>

<a href="{{ route('admin.answers.index', $question) }}">Wróć</a>
