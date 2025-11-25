<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik quizu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="p-4">

    <h1>Twój wynik</h1>

    <p class="mt-3">
        Zdobyłeś <strong>{{ $score }}</strong> na <strong>{{ $total }}</strong> punktów.
    </p>

    <a href="/quizzes" class="btn btn-secondary mt-3">⬅️ Powrót do listy quizów</a>

</body>
</html>
