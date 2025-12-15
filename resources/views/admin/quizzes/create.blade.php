<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj quiz</title>
</head>
<body class="p-4">

<h1>Dodaj quiz</h1>

<form method="POST" action="{{ route('admin.quizzes.store') }}">
    @csrf

    <label>Tytuł:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Opis:</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Zapisz</button>
</form>

<a href="{{ route('admin.quizzes.index') }}">⬅️ Powrót</a>

</body>
</html>
