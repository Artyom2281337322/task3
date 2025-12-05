@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    :root {
        --primary-blue: #2563eb;
        --primary-blue-light: #3b82f6;
        --secondary-blue: #1e40af;
        --light-bg: #f8fafc;
        --white: #ffffff;
        --card-bg: #ffffff;
        --text-dark: #1e293b;
        --text-gray: #64748b;
        --text-light: #94a3b8;
        --border-light: #e2e8f0;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --success-light: #d1fae5;
        --warning-light: #fef3c7;
        --danger-light: #fee2e2;
        --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
    }

    body {
        background-color: var(--light-bg);
        color: var(--text-dark);
        min-height: 100vh;
        line-height: 1.5;
    }

    /* Навигация */
    nav {
        background: var(--white) !important;
        border-bottom: 1px solid var(--border-light) !important;
        box-shadow: var(--shadow-sm);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .nav-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 70px;
    }

    .logo {
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--primary-blue);
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
    }

    .logo i {
        font-size: 1.8rem;
        color: var(--primary-blue);
    }

    .logo:hover {
        color: var(--secondary-blue);
    }

    .user-menu {
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-light));
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    .user-avatar:hover {
        transform: scale(1.05);
    }

    /* Основной контейнер */
    .container {
        max-width: 1400px;
        margin: 2rem auto;
        padding: 0 2rem;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2.5rem;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-dark);
        position: relative;
        display: inline-block;
    }

    .page-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 60px;
        height: 4px;
        background: var(--primary-blue);
        border-radius: 2px;
    }

    /* Кнопки */
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 0.75rem 1.5rem;
        font-size: 0.95rem;
        font-weight: 600;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.2s ease;
        cursor: pointer;
        border: none;
        outline: none;
    }

    .btn-primary {
        background: var(--primary-blue);
        color: white;
        box-shadow: var(--shadow-md);
    }

    .btn-primary:hover {
        background: var(--secondary-blue);
        transform: translateY(-2px);
        box-shadow: var(--shadow-lg);
    }

    .btn-outline {
        background: transparent;
        color: var(--primary-blue);
        border: 2px solid var(--primary-blue);
    }

    .btn-outline:hover {
        background: var(--primary-blue);
        color: white;
        transform: translateY(-2px);
    }

    .btn-danger {
        background: var(--danger);
        color: white;
        box-shadow: var(--shadow-md);
    }

    .btn-danger:hover {
        background: #dc2626;
        transform: translateY(-2px);
        box-shadow: var(--shadow-lg);
    }

    /* Таблица заявок */
    .reports-table-container {
        background: var(--card-bg);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-md);
        border: 1px solid var(--border-light);
        margin-bottom: 3rem;
        animation: fadeIn 0.4s ease forwards;
    }

    .reports-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 1000px;
    }

    .reports-table thead {
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-light));
        color: white;
    }

    .reports-table th {
        padding: 1.25rem 1.5rem;
        text-align: left;
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
    }

    .reports-table th i {
        margin-right: 8px;
        font-size: 1rem;
    }

    .reports-table tbody tr {
        border-bottom: 1px solid var(--border-light);
        transition: all 0.2s ease;
    }

    .reports-table tbody tr:hover {
        background-color: rgba(37, 99, 235, 0.03);
    }

    .reports-table tbody tr:last-child {
        border-bottom: none;
    }

    .reports-table td {
        padding: 1.25rem 1.5rem;
        color: var(--text-dark);
        font-size: 0.95rem;
    }

    /* Стили для ячеек */
    .report-number {
        font-weight: 700;
        color: var(--primary-blue);
        font-size: 1.05rem;
    }

    .report-user {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .user-avatar-small {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-light));
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
    }

    .user-info {
        display: flex;
        flex-direction: column;
    }

    .user-name {
        font-weight: 600;
        color: var(--text-dark);
    }

    .user-email {
        font-size: 0.85rem;
        color: var(--text-gray);
    }

    .report-description {
        max-width: 300px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: var(--text-gray);
    }

    /* Статусы */
    .status-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
        text-align: center;
        min-width: 120px;
    }

    .status-new {
        background: var(--success-light);
        color: var(--success);
    }

    .status-in-progress {
        background: var(--warning-light);
        color: var(--warning);
    }

    .status-completed {
        background: #dbeafe;
        color: var(--primary-blue);
    }

    .status-cancelled {
        background: var(--danger-light);
        color: var(--danger);
    }

    /* Действия */
    .table-actions {
        display: flex;
        gap: 0.5rem;
    }

    .action-btn {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--light-bg);
        color: var(--text-dark);
        text-decoration: none;
        transition: all 0.2s ease;
        border: 1px solid var(--border-light);
    }

    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .action-view:hover {
        background: var(--primary-blue);
        color: white;
        border-color: var(--primary-blue);
    }

    .action-edit:hover {
        background: var(--warning);
        color: white;
        border-color: var(--warning);
    }

    .action-delete:hover {
        background: var(--danger);
        color: white;
        border-color: var(--danger);
    }

    /* Панели сортировки и фильтрации */
    .controls-panel {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        margin-bottom: 2.5rem;
        background: var(--white);
        border-radius: 12px;
        padding: 1.5rem;
        border: 1px solid var(--border-light);
        box-shadow: var(--shadow-sm);
    }

    .control-group {
        flex: 1;
        min-width: 300px;
    }

    .control-title {
        font-size: 1.1rem;
        margin-bottom: 1rem;
        color: var(--text-dark);
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
    }

    .control-title i {
        font-size: 1.2rem;
        color: var(--primary-blue);
    }

    .sort-buttons,
    .filter-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
    }

    .sort-btn,
    .filter-btn {
        padding: 0.6rem 1rem;
        background: var(--light-bg);
        border-radius: 8px;
        text-decoration: none;
        color: var(--text-dark);
        font-weight: 500;
        transition: all 0.2s ease;
        border: 1px solid var(--border-light);
        font-size: 0.9rem;
    }

    .sort-btn:hover,
    .filter-btn:hover,
    .sort-btn.active,
    .filter-btn.active {
        background: var(--primary-blue);
        color: white;
        border-color: var(--primary-blue);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
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

    /* Адаптивность */
    @media (max-width: 768px) {
        .container {
            padding: 0 1rem;
        }

        .nav-container {
            padding: 0 1rem;
        }

        .page-title {
            font-size: 2rem;
        }

        .controls-panel {
            padding: 1.25rem;
            gap: 1.5rem;
        }

        .control-group {
            min-width: 100%;
        }

        .header {
            flex-direction: column;
            align-items: flex-start;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }

        .reports-table-container {
            overflow-x: auto;
        }
    }

    /* Пустой state */
    .empty-state {
        text-align: center;
        padding: 3rem 2rem;
        background: var(--white);
        border-radius: 12px;
        border: 2px dashed var(--border-light);
        margin: 2rem 0;
        grid-column: 1 / -1;
    }

    .empty-state i {
        font-size: 3rem;
        margin-bottom: 1.25rem;
        color: var(--primary-blue);
        opacity: 0.7;
    }

    .empty-state h3 {
        font-size: 1.5rem;
        margin-bottom: 0.75rem;
        color: var(--text-dark);
    }

    .empty-state p {
        color: var(--text-gray);
        margin-bottom: 1.5rem;
    }

    /* Пагинация */
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }

    .pagination {
        display: flex;
        gap: 0.5rem;
        list-style: none;
    }

    .page-item {
        margin: 0;
    }

    .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background: var(--white);
        color: var(--text-dark);
        text-decoration: none;
        font-weight: 600;
        border: 1px solid var(--border-light);
        transition: all 0.2s ease;
    }

    .page-link:hover {
        background: var(--primary-blue);
        color: white;
        border-color: var(--primary-blue);
        transform: translateY(-2px);
    }

    .page-item.active .page-link {
        background: var(--primary-blue);
        color: white;
        border-color: var(--primary-blue);
    }

    .page-item.disabled .page-link {
        background: var(--light-bg);
        color: var(--text-light);
        cursor: not-allowed;
    }

    /* Статистика */
    .stats {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .stat-card {
        flex: 1;
        min-width: 150px;
        background: var(--white);
        padding: 1.25rem;
        border-radius: 10px;
        box-shadow: var(--shadow-sm);
        border-left: 4px solid var(--primary-blue);
        animation: fadeIn 0.4s ease forwards;
    }

    .stat-card h4 {
        font-size: 0.9rem;
        color: var(--text-gray);
        margin-bottom: 0.5rem;
        font-weight: 500;
    }

    .stat-card .value {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-dark);
    }

    /* Уведомление */
    .alert {
        padding: 1rem 1.25rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-weight: 500;
        animation: fadeIn 0.3s ease;
    }

    .alert-success {
        background: var(--success-light);
        color: var(--success);
        border-left: 4px solid var(--success);
    }

    .alert-info {
        background: #dbeafe;
        color: var(--primary-blue);
        border-left: 4px solid var(--primary-blue);
    }

    .alert i {
        font-size: 1.2rem;
    }

    /* Хлебные крошки */
    .breadcrumbs {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 1.5rem;
        color: var(--text-gray);
        font-size: 0.9rem;
    }

    .breadcrumbs a {
        color: var(--primary-blue);
        text-decoration: none;
    }

    .breadcrumbs a:hover {
        text-decoration: underline;
    }

    .breadcrumbs i {
        font-size: 0.8rem;
    }

    /* Индикатор загрузки */
    .loading {
        text-align: center;
        padding: 3rem;
    }

    .loading-spinner {
        display: inline-block;
        width: 40px;
        height: 40px;
        border: 3px solid var(--border-light);
        border-top: 3px solid var(--primary-blue);
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Дата и время */
    .date-time {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .date {
        font-weight: 500;
        color: var(--text-dark);
    }

    .time {
        font-size: 0.85rem;
        color: var(--text-gray);
    }

    .status-form {
        position: relative;
    }

    .status-form select {
        width: 100%;
        padding: 0.625rem 1rem;
        padding-right: 2.5rem;
        border: 1px solid var(--border-light);
        border-radius: 8px;
        background-color: var(--white);
        color: var(--text-dark);
        font-size: 0.95rem;
        font-weight: 500;
        cursor: pointer;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        transition: all 0.2s ease;
        box-shadow: var(--shadow-sm);
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%2364748b' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 16px;
    }

    .status-form select:hover {
        border-color: var(--primary-blue-light);
        box-shadow: var(--shadow-md);
        transform: translateY(-1px);
    }

    .status-form select:focus {
        outline: none;
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    /* Опции в селекте */
    .status-form select option {
        padding: 0.75rem;
        font-size: 0.95rem;
        color: var(--text-dark);
        background-color: var(--white);
    }

    /* Кастомные стили для опций в зависимости от статуса */
    .status-form select option[value="1"] {
        color: var(--success);
        font-weight: 600;
    }

    .status-form select option[value="2"] {
        color: var(--warning);
        font-weight: 600;
    }

    .status-form select option[value="3"] {
        color: var(--primary-blue);
        font-weight: 600;
    }

    /* Индикатор загрузки при изменении статуса */
    .status-form.loading select {
        opacity: 0.7;
        cursor: wait;
    }

    .status-form.loading::after {
        content: '';
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        width: 16px;
        height: 16px;
        border: 2px solid var(--border-light);
        border-top: 2px solid var(--primary-blue);
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    /* Компактная версия для таблицы */
    .status-form.compact select {
        padding: 0.375rem 0.75rem;
        padding-right: 2rem;
        font-size: 0.875rem;
        min-width: 140px;
    }

    /* Версия с индикатором текущего статуса */
    .status-form.with-indicator select {
        padding-left: 2.5rem;
    }

    .status-indicator {
        position: absolute;
        left: 0.75rem;
        top: 50%;
        transform: translateY(-50%);
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .status-indicator.new {
        background-color: var(--success);
        box-shadow: 0 0 0 3px var(--success-light);
    }

    .status-indicator.in-progress {
        background-color: var(--warning);
        box-shadow: 0 0 0 3px var(--warning-light);
    }

    .status-indicator.completed {
        background-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
</style>
</head>

<body>
    <!-- Навигация -->
    <nav>
        <div class="nav-container">
            <a href="{{ url('/admin') }}" class="logo">
                <i class="fas fa-tachometer-alt"></i>
                Админ-панель
            </a>

            <a class="user-menu" href="{{route('profile.edit')}}" style="text-decoration: none;">
                <div class="user-avatar" title="{{ Auth::user()->name }}">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </a>
        </div>
    </nav>

    <!-- Основной контент -->
    <div class="container">
        <!-- Заголовок -->
        <div class="header">
            <div>
                <h1 class="page-title">Все заявки</h1>
                <p class="text-muted" style="margin-top: 0.5rem; color: var(--text-gray);">
                    Просмотр и управление всеми заявками системы
                </p>
            </div>
        </div>

        <!-- Статистика -->
        <div class="stats">
            <div class="stat-card">
                <h4>Всего заявок</h4>
                <div class="value">{{ $reports->total() }}</div>
            </div>
            <div class="stat-card">
                <h4>На этой странице</h4>
                <div class="value">{{ $reports->count() }}</div>
            </div>
            @php
            $newCount = $reports->where('status_id', 1)->count();
            $inProgressCount = $reports->where('status_id', 2)->count();
            $completedCount = $reports->where('status_id', 3)->count();
            @endphp
            <div class="stat-card">
                <h4>Новые</h4>
                <div class="value" style="color: var(--success);">{{ $newCount }}</div>
            </div>
            <div class="stat-card">
                <h4>В работе</h4>
                <div class="value" style="color: var(--warning);">{{ $inProgressCount }}</div>
            </div>
            <div class="stat-card">
                <h4>Завершены</h4>
                <div class="value" style="color: var(--primary-blue);">{{ $completedCount }}</div>
            </div>
        </div>




        <!-- Таблица заявок -->
        @if($reports->isEmpty())
        <div class="empty-state">
            <i class="fas fa-inbox"></i>
            <h3>Заявки отсутствуют</h3>
            <p>В системе пока нет ни одной заявки</p>
            <a href="{{ route('reports.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Создать первую заявку
            </a>
        </div>
        @else
        <div class="reports-table-container">
            <table class="reports-table">
                <thead>
                    <tr>
                        <th>
                            <i class="fas fa-hashtag"></i> ID
                        </th>
                        <th>
                            <i class="fas fa-file-alt"></i> Номер автомобиля
                        </th>
                        <th>
                            <i class="fas fa-align-left"></i> Описание
                        </th>
                        <th>
                            <i class="fas fa-user"></i> Пользователь
                        </th>
                        <th>
                            <i class="fas fa-tag"></i> Статус
                        </th>
                        <th>
                            <i class="fas fa-calendar"></i> Дата создания
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                    <tr>
                        <td>
                            <strong>#{{ $report->id }}</strong>
                        </td>
                        <td>
                            <span class="report-number">{{ $report->number }}</span>
                        </td>
                        <td>
                            <div class="report-description" title="{{ $report->description }}">
                                {{ Str::limit($report->description, 60) }}
                            </div>
                        </td>
                        <td>
                            @if($report->user)
                            <div class="report-user">
                                <div class="user-avatar-small" title="{{ $report->user->name }}">
                                    {{ strtoupper(substr($report->user->name, 0, 1)) }}
                                </div>
                                <div class="user-info">
                                    <span class="user-name">{{ $report->user->name }}</span>
                                    <span class="user-email">{{ $report->user->email }}</span>
                                </div>
                            </div>
                            @else
                            <span class="text-muted">Пользователь удален</span>
                            @endif
                        </td>
                        <td>
                            <form class="status-form">
                                @method('patch')
                                @csrf
                                <select name="status_id" id="status_id" class="status-select">
                                    @php
                                    $statuses = \App\Models\Status::all();
                                    @endphp
                                    @foreach($statuses as $status)
                                    <option value="{{ $status->id }}" {{ $status->id === $report->status_id ? 'selected' : '' }}>
                                        {{ $status->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </form>
                        </td>
                        <td>
                            <div class="date-time">
                                <span class="date">
                                    {{ $report->created_at->format('d.m.Y') }}
                                </span>
                                <span class="time">
                                    {{ $report->created_at->format('H:i') }}
                                </span>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
        @endif
    </div>

    <!-- Скрипты -->
    <script>
        
     
    </script>
</body>

</html>