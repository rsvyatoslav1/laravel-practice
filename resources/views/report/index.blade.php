<!--
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
        <a href="{{ route('reports.create') }}">Создать заявку</a><br><br>
        <div>
            <span>Сортировка по дате создания:</span><br>
            <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}">сначала новые</a><br>
            <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}">сначала старые</a>
        </div>
        <div>
            <span>Фильтрация по статусу заявки:</span>
            <ul>
                @foreach($statuses as $status)
                    <li>
                        <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $status->id]) }}">
                            {{ $status->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card-grid">
            @foreach ($reports as $report)
                <div class="card">
                    <p>{{ $report->number }}</p>
                    <p>{{ $report->description }}</p>
                    <p>{{ $report->created_at }}</p>
                    <p>{{ $report->status->name }}</p>
                    <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Удалить">
                    </form>
                    <a href="{{ route('reports.edit', $report->id) }}">Изменить</a>
                </div>
            @endforeach
        </div>
        <br><br>
        {{$reports->links()}}
    </main>
    <footer>
        Copyright Рудин Святослав Иванович 2026
    </footer>
</body>
</html>
-->

<x-app-layout>
    
    <header>
        Нарушений нет
    </header>
    <main>
        <a href="{{ route('reports.create') }}">Создать заявку</a><br><br>
        <div>
            <span>Сортировка по дате создания:</span><br>
            <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}">сначала новые</a><br>
            <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}">сначала старые</a>
        </div>
        <div>
            <span>Фильтрация по статусу заявки:</span>
            <ul>
                @foreach($statuses as $status)
                    <li>
                        <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $status->id]) }}">
                            {{ $status->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card-grid">
            @foreach ($reports as $report)
                <div class="card">
                    <p>{{ $report->number }}</p>
                    <p>{{ $report->description }}</p>
                    <p>{{ $report->created_at }}</p>
                    <p>{{ $report->status->name }}</p>
                    <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Удалить">
                    </form>
                    <a href="{{ route('reports.edit', $report->id) }}">Изменить</a>
                </div>
            @endforeach
        </div>
        <br><br>
        {{$reports->links()}}
    </main>
    <footer>
        Copyright Рудин Святослав Иванович 2026
    </footer>
</x-app-layout>