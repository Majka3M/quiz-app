<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik quizu</title>
</head>

<body class="p-4">
    <h1>Twój wynik</h1>

    <p>Zdobyłeś <strong>{{ $score }}</strong> na <strong>{{ $total }}</strong> punktów.</p>

    <a href="/quizzes">⬅️ Powrót do listy quizów</a>
</body>
</html>
