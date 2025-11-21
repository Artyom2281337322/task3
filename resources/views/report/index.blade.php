<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
           .container{
        display: flex;
        flex-direction: column;
    }
    .cards{
        display: flex;
        flex-direction: row;
        gap: 20px;
    }
    .card{
      border: 1px solid black;
      padding: 10px;
    }
    a{
       margin-top: 30px;
    }
        </style>
</head>
<body>
  <div class="container">
    <h1>Заявки</h1>
    <div class="cards">
        @foreach($reports as $reports)
          <div class="card">
            <p>Номер: {{ $reports -> number }}</p>
            <p>Описание: {{ $reports -> description }}</p>
            <p>Дата: {{ $reports -> created_at }}</p>
            <p>{{ $reports -> status -> name }}</p>
            <form method="POST" action="{{route('reports.destroy', $reports->id)}}">
              @method('delete')
              @csrf 
              <input type="submit" value="Удалить">
            </form>
            <a href="{{ route('reports.edit',  ['report' => $reports->id]) }}">Обновить заявление</a>
          </div>
        @endforeach
       
        <div>
          <span>Сортировка</span>
          <a href="{{ route('report.index', ['sort' => 'desc', 'status' => $status]) }}">Сначала новые</a>
          <a href="{{ route('report.index', ['sort' => 'asc', 'status' => $status]) }}">Сначала старые</a>
        </div>

        <div>
          <p>Фильтрация по статусу заявки</p>
          <ul>
            @foreach($statuses as $status)
            <li>
              <a href="{{ route('report.index', ['status' => $status -> id]) }}">
                {{ $status -> name }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>
    </div>
    <a href="{{ route('reports.create') }}">Создать заявление</a>
    </div>
</body>
</html>