<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Изменение заявления</title>
</head>
<body>
    <header>
        Нарушений нет
    </header>
    <main>
        <div>Основная часть</div>
        <form method="POST" action="{{ route('reports.update', $report->id) }}">
            @csrf
            @method('PUT')
            <input name="number" type="text" placeholder="Введите номер авто" value="{{ $report->number }}"><br>
            <textarea name="description" placeholder="Введите описание нарушения">{{ $report->description }}</textarea><br>
            <input type="submit" value="Обновить">
        </form>
    </main>
    <footer>
        Copyright Рудин Святослав Иванович 2026
    </footer>
</body>
</html>