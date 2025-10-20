<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Заявки</h1>
    <div class="cards">
        @foreach($reports as $reports)
          <div class="card">
            <p>Номер: {{ $reports -> number }}</p>
            <p>Описание: {{ $reports -> description }}</p>
            <p>Дата: {{ $reports -> created_at }}</p>
            <form method="POST" action="{{route('reports.destroy', $reports->id)}}">
              @method('delete')
              @csrf 
              <input type="submit" value="Удалить">
            </form>
            <a href="{{ route('reports.edit',  ['report' => $reports->id]) }}">Обновить заявление</a>
          </div>
        @endforeach
    </div>
    <a href="{{ route('reports.create') }}">Создать заявление</a>
</body>
</html>