<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Edytuj quiz</title>
</head>
<body class="p-4">

<h1>Edytuj quiz</h1>

<form method="POST" action="{{ route('admin.quizzes.update', $quiz) }}">
    @csrf
    @method('PUT')

    <label>Tytuł:</label><br>
    <input type="text" name="title" value="{{ $quiz->title }}" required><br><br>

    <label>Opis:</label><br>
    <textarea name="description">{{ $quiz->description }}</textarea><br><br>

    <button type="submit">Zapisz zmiany</button>
</form>

<a href="{{ route('admin.quizzes.index') }}">⬅️ Powrót</a>

</body>
</html>
