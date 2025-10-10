<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <div class="logo">НАРУШЕНИЙ <span>.НЕТ</span> </div>
    </header>
    <main>
        <form action=" {{ route('reports.store') }} " method="POST">
            @csrf
            @method('create')
        <input type="text" name="number" id = "1" placeholder="Номер автомобиля">
        <textarea name="description" id="2" placeholder="Описание"></textarea>
        <button type="submit">Создать</button>
        </form>
    </main>
</body>
</html>