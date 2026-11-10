<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Создание заявления</title>
</head>
<body>
    <header>
        Нарушений нет
    </header>
    <main>
        <div>Основная часть</div>
        <form method="POST" action="{{ route('reports.store') }}">
            @csrf
            <input name="number" type="text" placeholder="Введите номер авто"><br>
            <textarea name="description" type="text" placeholder="Введите описание нарушения"></textarea><br>
            <input type="submit" value="Создать">
        </form>
    </main>
    <footer>
        Copyright Рудин Святослав Иванович 2026
    </footer>
</body>
</html>