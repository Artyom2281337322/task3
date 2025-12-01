
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

        /* Карточки заявок */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-blue-light);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .card-number {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-blue);
        }

        .card-date {
            font-size: 0.85rem;
            color: var(--text-gray);
            background: var(--light-bg);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-weight: 500;
        }

        .card-description {
            margin: 1rem 0;
            line-height: 1.6;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .card-status {
            display: inline-block;
            padding: 0.35rem 0.9rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            margin-bottom: 1.2rem;
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

        .card-actions {
            display: flex;
            gap: 0.75rem;
            margin-top: 1.2rem;
            padding-top: 1rem;
            border-top: 1px solid var(--border-light);
        }

        .card-actions .btn {
            flex: 1;
            padding: 0.6rem;
            font-size: 0.85rem;
            border-radius: 6px;
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

        .sort-buttons, .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .sort-btn, .filter-btn {
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

        .sort-btn:hover, .filter-btn:hover, .sort-btn.active, .filter-btn.active {
            background: var(--primary-blue);
            color: white;
            border-color: var(--primary-blue);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            animation: fadeIn 0.4s ease forwards;
        }

        .card:nth-child(2) { animation-delay: 0.05s; }
        .card:nth-child(3) { animation-delay: 0.1s; }
        .card:nth-child(4) { animation-delay: 0.15s; }
        .card:nth-child(5) { animation-delay: 0.2s; }

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
            
            .cards-grid {
                grid-template-columns: 1fr;
                gap: 1.2rem;
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

        /* Форма удаления */
        .delete-form {
            display: inline;
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

        /* Уведомление */
        .alert {
            padding: 1rem 1.25rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
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

        /* Загрузка */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid var(--border-light);
            border-top: 2px solid var(--primary-blue);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

 
  <body>
  
    <nav x-data="{ open: false }">
        <div class="nav-container">
            
            <a href="{{ route('dashboard') }}" class="logo">
                <i class="fas fa-tasks"></i>
                <span>Заявки</span>
            </a>

       
            <a class="user-menu" href="{{route('profile.edit')}}" style="text-decoration: none;">
                <div class="user-avatar" title="{{ Auth::user()->name }}">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
    </a>
        </div>
    </nav>

    
    <div class="container">
      
        <div class="breadcrumbs">
            <a href="{{ route('dashboard') }}">Главная</a>
            <i class="fas fa-chevron-right"></i>
            <span>Заявки</span>
        </div>

       
        <div class="header">
            <h1 class="page-title">Управление заявками</h1>
            <a href="{{ route('reports.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Новая заявка
            </a>
        </div>

        
        <div class="controls-panel">
        
            <div class="control-group">
                <h3 class="control-title"><i class="fas fa-sort"></i> Сортировка</h3>
                <div class="sort-buttons">
                    <a href="{{ route('report.index', ['sort' => 'desc', 'status' => $status]) }}" 
                       class="sort-btn {{ request('sort') == 'desc' ? 'active' : '' }}">
                        <i class="fas fa-arrow-down"></i> Сначала новые
                    </a>
                    <a href="{{ route('report.index', ['sort' => 'asc', 'status' => $status]) }}" 
                       class="sort-btn {{ request('sort') == 'asc' ? 'active' : '' }}">
                        <i class="fas fa-arrow-up"></i> Сначала старые
                    </a>
                </div>
            </div>

           
            <div class="control-group">
                <h3 class="control-title"><i class="fas fa-filter"></i> Фильтр по статусу</h3>
                <div class="filter-buttons">
                    <a href="{{ route('report.index') }}" 
                       class="filter-btn {{ !request('status') ? 'active' : '' }}">
                        Все
                    </a>
                    @foreach($statuses as $statusItem)
                    <a href="{{ route('report.index', ['status' => $statusItem->id]) }}" 
                       class="filter-btn {{ request('status') == $statusItem->id ? 'active' : '' }}">
                        {{ $statusItem->name }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="cards-grid">
            @forelse($reports as $report)
            <div class="card">
                <div class="card-header">
                    <span class="card-number">Номер автомобиля {{ $report->number }}</span>
                    <span class="card-date">{{ $report->created_at->format('d.m.Y') }}</span>
                </div>
                
                <p class="card-description">Описание:{{ Str::limit($report->description, 120) }}</p>
                
                <div>
                    <span class="card-status 
                        @if(strpos($report->status->name, 'нов') !== false) status-new
                        @elseif(strpos($report->status->name, 'процесс') !== false) status-in-progress
                        @else status-completed
                        @endif">
                        <i class="fas fa-circle" style="font-size: 0.6rem; margin-right: 5px;"></i> 
                        {{ $report->status->name }}
                    </span>
                </div>
                
                <div class="card-actions">
                    <a href="{{ route('reports.edit',  ['report' => $report->id]) }}" class="btn btn-outline">
                        <i class="fas fa-edit"></i> Редактировать
                    </a>
                    
                    <form method="POST" action="{{route('reports.destroy', $report->id)}}" class="delete-form">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены, что хотите удалить эту заявку?')">
                            <i class="fas fa-trash"></i> Удалить
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <h3>Заявок не найдено</h3>
                <p>Создайте первую заявку, нажав на кнопку "Новая заявка"</p>
                <a href="{{ route('reports.create') }}" class="btn btn-primary" style="margin-top: 1rem;">
                    <i class="fas fa-plus"></i> Создать заявку
                </a>
            </div>
            @endforelse
        </div>
    </div>

 <script>
        // Добавляем интерактивность
        document.addEventListener('DOMContentLoaded', function() {
            // Плавное появление карточек
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(15px)';
                
                setTimeout(() => {
                    card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100);
            });
            
            // Подсветка активных кнопок фильтрации и сортировки
            const currentUrl = window.location.href;
            document.querySelectorAll('.sort-btn, .filter-btn').forEach(btn => {
                if (btn.href === currentUrl || (btn.href.includes('report.index') && !btn.href.includes('status') && !currentUrl.includes('status'))) {
                    btn.classList.add('active');
                }
            });
            
            // Анимация при наведении на карточки
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-4px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Подтверждение удаления с улучшенным диалогом
            document.querySelectorAll('.btn-danger').forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!confirm('Вы уверены, что хотите удалить эту заявку? Это действие нельзя отменить.')) {
                        e.preventDefault();
                    }
                });
            });
            
            // Анимация кнопок при нажатии
            document.querySelectorAll('.btn').forEach(button => {
                button.addEventListener('mousedown', function() {
                    this.style.transform = 'translateY(0)';
                });
                
                button.addEventListener('mouseup', function() {
                    this.style.transform = 'translateY(-2px)';
                });
            });
        });
    </script>
</body>
       
    </script>