<h1>Dodaj pytanie</h1>

<form method="POST" action="{{ route('admin.questions.store', $quiz) }}">
    @csrf

    <label>Pytanie:</label><br>
    <input type="text" name="content" required><br><br>

    <label>Odpowiedzi:</label><br>

    @for($i=0; $i<3; $i++)
        <input type="text" name="answers[]" required>
        <input type="radio" name="correct" value="{{ $i }}" required>
        poprawna<br>
    @endfor

    <br>
    <button type="submit">Zapisz pytanie</button>
</form>

<a href="{{ route('admin.questions.index', $quiz) }}">⬅️ Powrót</a>
