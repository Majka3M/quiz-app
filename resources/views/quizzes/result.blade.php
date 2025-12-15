<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik</title>
</head>
<body>

<h1>Wynik quizu</h1>

<p>Zdobyłeś {{ $score }} / {{ $total }} punktów.</p>

<a href="{{ route('quizzes.index') }}">Wróć do quizów</a>

</body>
</html>
