<x-app-layout>
    <form action="{{ route('reports.update', $report->id) }}" method="POST">
        @csrf
        @method('put')
        <input type="text" name = "number" value="{{ $report -> number }}">
        <textarea name="description" id="" placeholder = "">{{ $report -> description }}</textarea>
        <input type="submit" value = "Обновить">
        <a href="{{ route('report.index') }}"><-</a>
    </form>
</x-app-layout>
