<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Страница заявлений</title>

    
</head>
<body>
    <header>
        Нарушений нет
    </header>
    <main>
        <div>Основная часть</div>
        <div class="card-grid">
            @foreach ($reports as $report)
                <div class="card">
                    <p>{{ $report->number }}</p>
                    <p>{{ $report->description }}</p>
                    <p>{{ $report->created_at }}</p>
                </div>
            @endforeach
        </div>
    </main>
    <footer>
        Copyright Рудин Святослав Иванович 2026
    </footer>
</body>
</html>