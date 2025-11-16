<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista Quizów</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h1 class="mb-4">Dostępne quizy</h1>

    <div class="list-group">
        @foreach ($quizzes as $quiz)
            <a href="/quizzes/{{ $quiz['id'] }}" class="list-group-item list-group-item-action">
                <strong>{{ $quiz['title'] }}</strong> — {{ $quiz['questions'] }} pytań
            </a>
        @endforeach
    </div>
</body>
</html>
