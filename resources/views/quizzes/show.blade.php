<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{{ $quiz->title }}</title>
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
    <div class="card shadow-lg p-4 mt-5">

        <h1 class="mb-4 text-center">{{ $quiz->title }}</h1>

        <form action="/quizzes/{{ $quiz->id }}/check" method="POST">
            @csrf

            @foreach ($quiz->questions as $index => $question)
                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Pytanie {{ $index + 1 }}</h5>
                        <p class="card-text">{{ $question->content }}</p>

                        @foreach ($question->answers as $answer)
                            <div class="form-check mb-2">
                                <input class="form-check-input"
                                       type="radio"
                                       name="answers[{{ $index }}]"
                                       value="{{ $answer->answer_text }}"
                                       required>
                                <label class="form-check-label">
                                    {{ $answer->answer_text }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <button type="submit" class="btn btn-success btn-lg w-100">
                Sprawdź odpowiedzi
            </button>
        </form>

        <a href="/quizzes" class="btn btn-secondary mt-3 w-100">
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
