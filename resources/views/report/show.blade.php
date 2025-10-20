<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="{{route('reports.update, $report->id}}">
        @csrf
        @method('put')
        @foreach($reports as $report)
        <input type="text" placeholder="{{ $report -> number }}">
        <textarea name="" id="" placeholder = "{{ $report -> description }}"></textarea>
        <input type="submit" value = "Обновить">
        @endforeach
    </form>
</body>
</html>