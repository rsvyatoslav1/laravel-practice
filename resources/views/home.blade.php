<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Главная</title>

    
</head>
<body>
    <header>
        <a href="/home">Главная</a>
        <a href="/array">Массивы</a>
    </header>
    <main>
        <div>Основная часть</div>
        <div>
            <img src="{{ Vite::asset('resources/images/1.jpg') }}" alt="">
        </div>
    </main>
    <footer>
        Copyright Рудин Святослав Иванович 2026
    </footer>
</body>
</html>