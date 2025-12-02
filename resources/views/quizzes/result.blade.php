<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik Quizu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #4f46e5, #6d28d9);
            min-height: 100vh;
            position: relative;
            padding-bottom: 200px;
        }
        .wave {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: -1;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card shadow-lg p-5 mt-5 text-center">

        <h1 class="mb-3">Twój wynik</h1>

        <h2 class="text-primary display-4 mb-4">
            {{ $score }} / {{ $total }}
        </h2>

        <p class="text-muted">Dziękujemy za udział w quizie!</p>

        <a href="/quizzes" class="btn btn-primary mt-4 w-100">
            ⬅️ Powrót do listy quizów
        </a>

    </div>
</div>

<svg class="wave" viewBox="0 0 1440 320">
    <path fill="#ffffff" fill-opacity="1"
          d="M0,256L80,250.7C160,245,320,235,480,213.3C640,192,800,160,960,170.7C1120,181,1280,235,1360,261.3L1440,288L1440,320L1360,320C1280,320,1120,320,
960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
    </path>
</svg>

</body>
</html>
