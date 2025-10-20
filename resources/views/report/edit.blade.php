<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('reports.update', $report->id) }}" method="POST">
        @csrf
        @method('put')
       
        <input type="text" name = "number" placeholder="{{ $report -> number }}">
        <textarea name="description" id="" placeholder = "{{ $report -> description }}"></textarea>
        <input type="submit" value = "Обновить">
        <a href="{{ route('report.index') }}"><</a>
    </form>
</body>
</html>