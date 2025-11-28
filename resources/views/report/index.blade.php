
  <style>
  /* Общие стили */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #fff5f5 0%, #ffecec 100%);
    color: #5a3e3e;
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 30px;
    align-items: start;
}

/* Основной контент */
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 25px;
}

/* Боковая панель с сортировкой и фильтрацией */
.container > :not(.cards) {
    grid-column: 2;
}

.cards > .sort,
.cards > .filt {
    grid-column: 2;
    position: sticky;
    top: 20px;
}

/* Заголовок */
h1 {
    text-align: center;
    color: #d4a5a5;
    font-size: 3rem;
    margin-bottom: 30px;
    text-shadow: 0 2px 8px rgba(212, 165, 165, 0.2);
    position: relative;
    grid-column: 1 / -1;
}

h1::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #d4a5a5, transparent);
}

/* Карточки заявок */
.card {
    background: linear-gradient(145deg, #ffffff, #fdf2f2);
    border: 1px solid #f0d6d6;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 5px 20px rgba(212, 165, 165, 0.15);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, #f8d7d7, #e8c4c4, #f8d7d7);
}

.card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(212, 165, 165, 0.25);
    border-color: #e8c4c4;
}

.card p {
    margin-bottom: 12px;
    font-size: 1rem;
    line-height: 1.5;
    color: #7a5d5d;
}

.card p:last-of-type {
    font-weight: 600;
    color: #c89595;
    background: rgba(212, 165, 165, 0.08);
    padding: 8px 12px;
    border-radius: 8px;
    display: inline-block;
    border: 1px solid #f0d6d6;
}

/* Формы и кнопки */
form {
    margin: 15px 0;
}

input[type="submit"] {
    background: linear-gradient(135deg, #e8c4c4, #d4a5a5) !important;
    color: #5a3e3e;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    width: 100%;
    font-size: 1rem;
}

input[type="submit"]:hover {
    background: linear-gradient(135deg, #d4a5a5, #c89595) !important;
    transform: scale(1.02);
    box-shadow: 0 4px 12px rgba(212, 165, 165, 0.3);
}

a[style*="lightblue"] {
    background: linear-gradient(135deg, #d4e8ff, #b8d4f0) !important;
    color: #5a3e3e !important;
    text-decoration: none;
    padding: 12px 25px;
    border-radius: 8px;
    display: block;
    text-align: center;
    font-weight: 600;
    transition: all 0.3s ease;
    margin-top: 10px;
    border: 1px solid #c8d8f0;
}

a[style*="lightblue"]:hover {
    background: linear-gradient(135deg, #b8d4f0, #a8c4e8) !important;
    transform: scale(1.02);
    box-shadow: 0 4px 12px rgba(184, 212, 240, 0.3);
}

/* Сортировка и фильтрация */
.sort, .filt {
    background: linear-gradient(145deg, #ffffff, #fdf2f2);
    border: 1px solid #f0d6d6;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 5px 20px rgba(212, 165, 165, 0.15);
    position: sticky;
    top: 20px;
}

.sort span, .filt p {
    color: #c89595;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 15px;
    display: block;
}

.sort-btn, .filt-btn {
    display: block;
    background: linear-gradient(135deg, #f8d7d7, #f0d6d6);
    color: #7a5d5d;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 8px;
    margin: 8px 0;
    transition: all 0.3s ease;
    font-weight: 500;
    text-align: center;
    border: 1px solid #f0d6d6;
}

.sort-btn:hover, .filt-btn:hover {
    background: linear-gradient(135deg, #f0d6d6, #e8c4c4);
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(212, 165, 165, 0.2);
    color: #5a3e3e;
}

/* Кнопка создания заявления */
.container > a {
    display: block;
    width: fit-content;
    margin: 30px auto 0;
    background: linear-gradient(135deg, #f8d7d7, #e8c4c4);
    color: #5a3e3e;
    text-decoration: none;
    padding: 15px 30px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    text-align: center;
    grid-column: 1 / -1;
    border: 1px solid #f0d6d6;
}

.container > a:hover {
    background: linear-gradient(135deg, #e8c4c4, #d4a5a5);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(212, 165, 165, 0.25);
}

/* Адаптивность */
@media (max-width: 1024px) {
    .container {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .cards > .sort,
    .cards > .filt {
        grid-column: 1;
        position: static;
    }
    
    .sort, .filt {
        position: static !important;
    }
}

@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    
    h1 {
        font-size: 2.2rem;
    }
    
    .cards {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .card {
        padding: 20px;
    }
    
    .sort, .filt {
        padding: 20px;
    }
}

/* Анимации */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card {
    animation: fadeIn 0.5s ease-out;
}

.card:nth-child(even) {
    animation-delay: 0.1s;
}

.card:nth-child(odd) {
    animation-delay: 0.2s;
}

/* Скроллбар */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #fdf2f2;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, #f0d6d6, #e8c4c4);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(135deg, #e8c4c4, #d4a5a5);
}
  </style>
  <x-app-layout>
  <div class="container">
    <h1>Заявки</h1>
    <div class="cards">
      @foreach($reports as $reports)
      <div class="card">
        <p>Номер: {{ $reports -> number }}</p>
        <p>Описание: {{ $reports -> description }}</p>
        <p>Дата: {{ $reports -> created_at }}</p>
        <p>{{ $reports -> status -> name }}</p>
         <a style="background-color: lightblue;" href="{{ route('reports.edit',  ['report' => $reports->id]) }}">Обновить заявление</a>
        <form method="POST" action="{{route('reports.destroy', $reports->id)}}">
          @method('delete')
          @csrf
          <input type="submit" value="Удалить" style="background-color: red;">
        </form>
       
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