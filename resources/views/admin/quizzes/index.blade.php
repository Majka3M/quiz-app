<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel administratora – quizy</title>
</head>
<body>

<h1>Panel administratora</h1>

<p>
    <a href="{{ route('admin.quizzes.create') }}">
        Dodaj quiz
    </a>
</p>

<table border="1" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>Tytuł</th>
            <th>Liczba pytań</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($quizzes as $quiz)
            <tr>
                <td>{{ $quiz->title }}</td>
                <td>{{ $quiz->questions_count }}</td>
                <td>
                    <a href="{{ route('admin.questions.index', $quiz) }}">
                        Pytania
                    </a>
                    |
                    <a href="{{ route('admin.quizzes.edit', $quiz) }}">
                        Edytuj
                    </a>
                    |
                    <form action="{{ route('admin.quizzes.destroy', $quiz) }}"
                          method="POST"
                          style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Usunąć quiz?')">
                            Usuń
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
