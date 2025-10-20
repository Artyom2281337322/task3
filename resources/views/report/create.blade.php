<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    <header class="header">
        <div class="logo">НАРУШЕНИЙ <span>.НЕТ</span> </div>
    </header>
    <main>
        <form action=" {{ route('reports.store') }} " method="POST">
         
        @csrf
           
        <input type="text" name="number"  placeholder="Номер автомобиля">
        <textarea name="description"  placeholder="Описание"></textarea>
        <button type="submit">Создать</button>
        <a href="{{ route('report.index') }}"><</a>
        </form>
    </main>
</body>
</html>