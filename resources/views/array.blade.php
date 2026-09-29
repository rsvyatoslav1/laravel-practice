<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Массивы</title>

    
</head>
<body>
    <header>
        <div>Шапка</div>
        <div>
            <a href="/home">Главная</a>
            <a href="/array">Массивы</a>
        </div>
    </header>
    <main>
        <div>Товары</div>
        <div class="functions">
            <a href="#">Перемешать</a>
            <a href="#">Отсортировать</a>
            <a href="#">Отфильтровать (цена > 1000)</a>
        </div>
        <div class="card-grid">
            @foreach($array as $item)
                <div class="card">
                    <img src="{{ Vite::asset('resources/images/'.$item['path']) }}" alt="{{ $item['title'] }}">
                    <div>{{ $item['title'] }}</div>
                    <p>{{ $item['price'] }} &#8381;</p>
                </div>
            @endforeach
        </div>
    </main>
    <footer>
        Copyright Рудин Святослав Иванович 2026
    </footer>
</body>
</html>