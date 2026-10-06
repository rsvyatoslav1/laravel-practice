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
        <a href="/home">Главная</a>
        <a href="/array">Массивы</a>
    </header>
    <main>
        <div>Товары</div>
        <div class="functions">
            <a href="{{ route('array.shuffle') }} ">Перемешать</a><br>
            <a href="{{ route('array.sort') }}">Отсортировать</a><br>
            <a href="{{ route('array.filter') }}">Отфильтровать (цена > 1000)</a><br>
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