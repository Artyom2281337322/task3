<x-app-layout>
  <style>
    .container {
      display: flex;
      flex-direction: column;
    }

    .cards {
      display: flex;
      flex-direction: row;
      gap: 20px;
    }

    .card {
      border: 1px solid black;
      padding: 10px;
      min-width: 150px;
      background-color: lightgray
    }

   a {
      margin-top: 20px;
    }

    .sort {
      background-color: lightgray;
      min-width: 170px;
      max-height: 200px;
      padding: 10px;
      display: flex;
      align-items: center;
      flex-direction: column;
    }

    .sort-btn {
      background-color: lightslategrey;
      padding: 10px;
    }

    .filt {
      background-color: lightgray;
      min-width: 170px;
      max-height: 260px;
      padding: 10px;
      display: flex;
      align-items: center;
      flex-direction: column;
    }

    .filt-btn {
      background-color: lightslategrey;
      padding: 10px;
      width: 120px;
    }
  </style>
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
          <input type="submit" value="Удалить" style="background-color: red;">
        </form>
        <a style="background-color: lightblue;" href="{{ route('reports.edit',  ['report' => $reports->id]) }}">Обновить заявление</a>
      </div>
      @endforeach

      <div class="sort">
        <span>Сортировка</span>
        <a href="{{ route('report.index', ['sort' => 'desc', 'status' => $status]) }}" class="sort-btn">Сначала новые</a>
        <a href="{{ route('report.index', ['sort' => 'asc', 'status' => $status]) }}" class="sort-btn">Сначала старые</a>
      </div>

      <div class="filt">
        <p>Фильтрация по статусу заявки</p>

        @foreach($statuses as $status)

        <a href="{{ route('report.index', ['status' => $status -> id]) }}" class="filt-btn">
          {{ $status -> name }}
        </a>

        @endforeach

      </div>
    </div>
    <a href="{{ route('reports.create') }}">Создать заявление</a>
  </div>
</x-app-layout>