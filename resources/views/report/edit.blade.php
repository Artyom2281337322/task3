 
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
            --border-focus: #3b82f6;
            --success: #10b981;
            --danger: #ef4444;
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
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .page-title {
            font-size: 2rem;
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

        /* Форма */
        .form-container {
            background: var(--white);
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-light);
            margin-top: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.75rem;
        }

        .form-label {
            display: block;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .form-label i {
            color: var(--primary-blue);
            margin-right: 8px;
            width: 20px;
        }

        .form-input {
            width: 100%;
            padding: 0.9rem 1rem;
            font-size: 1rem;
            border: 2px solid var(--border-light);
            border-radius: 8px;
            background: var(--white);
            color: var(--text-dark);
            transition: all 0.2s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-input:hover {
            border-color: #cbd5e1;
        }

        textarea.form-input {
            min-height: 180px;
            resize: vertical;
            line-height: 1.6;
            font-family: inherit;
        }

        .form-hint {
            display: block;
            font-size: 0.85rem;
            color: var(--text-gray);
            margin-top: 0.4rem;
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

        .btn-secondary {
            background: var(--white);
            color: var(--text-dark);
            border: 2px solid var(--border-light);
            box-shadow: var(--shadow-sm);
        }

        .btn-secondary:hover {
            background: #f1f5f9;
            border-color: #cbd5e1;
            transform: translateY(-2px);
        }

        .btn-back {
            background: transparent;
            color: var(--text-gray);
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
        }

        .btn-back:hover {
            color: var(--primary-blue);
            background: #f1f5f9;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-light);
            flex-wrap: wrap;
            gap: 1rem;
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

        /* Карточка с информацией */
        .info-card {
            background: #f0f9ff;
            border: 1px solid #bae6fd;
            border-radius: 8px;
            padding: 1.25rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
        }

        .info-card i {
            color: var(--primary-blue);
            font-size: 1.2rem;
            margin-top: 2px;
        }

        .info-card h4 {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        .info-card p {
            font-size: 0.9rem;
            color: var(--text-gray);
            line-height: 1.5;
        }

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-container {
            animation: fadeIn 0.4s ease forwards;
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
                font-size: 1.75rem;
            }
            
            .form-container {
                padding: 1.75rem;
            }
            
            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }
            
            .form-actions .btn {
                width: 100%;
                justify-content: center;
            }
            
            .btn-back {
                order: -1;
                align-self: flex-start;
                margin-bottom: 1rem;
            }
        }

        /* Валидация */
        .error-message {
            color: var(--danger);
            font-size: 0.85rem;
            margin-top: 0.4rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .error-message i {
            font-size: 0.9rem;
        }

        .form-input.error {
            border-color: var(--danger);
        }

        .form-input.error:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        /* Заголовок формы */
        .form-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-light);
        }

        .form-header i {
            color: var(--primary-blue);
            font-size: 1.8rem;
            background: #f0f9ff;
            padding: 12px;
            border-radius: 10px;
        }

        .form-header h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        /* Статус заявки */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 0.4rem 0.9rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            margin-left: 1rem;
            background: #dbeafe;
            color: var(--primary-blue);
        }

        /* Счетчик символов */
        .char-counter {
            text-align: right;
            font-size: 0.85rem;
            color: var(--text-gray);
            margin-top: 0.4rem;
        }

        .char-counter.warning {
            color: #f59e0b;
        }

        .char-counter.error {
            color: var(--danger);
        }
    </style>


    <<body>
    <!-- Навигация -->
    <nav x-data="{ open: false }">
        <div class="nav-container">
            <!-- Логотип -->
            <a href="#" class="logo">
                <i class="fas fa-tasks"></i>
                <span>Заявки</span>
            </a>

            <!-- Меню пользователя -->
             <a class="user-menu" href="{{route('profile.edit')}}" style="text-decoration: none;">
                <div class="user-avatar" title="{{ Auth::user()->name }}">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
    </a>
        </div>
    </nav>

    <!-- Основной контент -->
    <div class="container">
        
        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <i class="fas fa-chevron-right"></i>
            <a href="{{ route('report.index') }}">Заявки</a>
            <i class="fas fa-chevron-right"></i>
            <span>Редактирование заявки</span>
        </div>

        <!-- Заголовок страницы -->
        <div class="header">
            <h1 class="page-title">Редактирование заявки</h1>
            <a href="{{ route('report.index') }}" class="btn btn-back">
                <i class="fas fa-arrow-left"></i> Назад к списку
            </a>
        </div>

        <!-- Информационная карточка -->
        <div class="info-card">
            <i class="fas fa-info-circle"></i>
            <div>
                <p>Измените необходимые поля заявки. После сохранения изменения будут применены к текущей заявке.</p>
            </div>
        </div>

        <!-- Форма редактирования -->
        <div class="form-container">

            <form method="POST" action="{{ route('reports.update', $report->id) }}">
                 @csrf
            @method('PUT')

                <!-- Номер заявки -->
                <div class="form-group">
                    <label class="form-label" for="number">
                        <i class="fas fa-hashtag"></i> Номер автомобиля
                    </label>
                    <input 
                        type="text" 
                        name="number" 
                        id="number"
                        class="form-input"
                        value="{{ old('number', $report->number) }}"
                        required
                        placeholder="Введите номер автомобиля"
                    >
                    @error('number')
                    <div class="error">{{ $message }}</div>
                @enderror
                    
                </div>

                <!-- Описание заявки -->
                <div class="form-group">
                    <label class="form-label" for="description">
                        <i class="fas fa-align-left"></i> Описание
                    </label>
                    <textarea 
                        name="description" 
                        id="description"
                        class="form-input"
                        rows="6"
                        placeholder="Подробно опишите суть заявки..."
                        required
                    >{{ old('description', $report->description) }}</textarea>
                    <div class="char-counter" id="charCounter">
                        <span id="charCount">0</span> / 2000 символов
                    </div>
                </div>

               
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-calendar-alt"></i> Информация о заявке
                    </label>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div style="background: #f8fafc; padding: 1rem; border-radius: 8px;">
                            <div style="font-size: 0.85rem; color: var(--text-gray); margin-bottom: 0.25rem;">Дата создания</div>
                            <div style="font-weight: 600;">{{ $report->created_at->format('d.m.Y H:i') }}</div>
                        </div>
                        <div style="background: #f8fafc; padding: 1rem; border-radius: 8px;">
                            <div style="font-size: 0.85rem; color: var(--text-gray); margin-bottom: 0.25rem;">Последнее обновление</div>
                            <div style="font-weight: 600;">{{ $report->updated_at->format('d.m.Y H:i') }}</div>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <div>
                        <a href="{{ route('report.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Отмена
                        </a>
                    </div>
                    <div style="display: flex; gap: 0.75rem;">
                        <button type="submit" class="btn btn-primary" href="{{ route('report.index') }}">
                            <i class="fas fa-save"></i> Сохранить изменения
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Подсчет символов в описании
            const descriptionTextarea = document.getElementById('description');
            const charCounter = document.getElementById('charCounter');
            const charCount = document.getElementById('charCount');
            
            function updateCharCount() {
                const count = descriptionTextarea.value.length;
                charCount.textContent = count;
                
                // Изменяем цвет счетчика в зависимости от количества символов
                charCounter.className = 'char-counter';
                if (count > 1900) {
                    charCounter.classList.add('warning');
                }
                if (count > 2000) {
                    charCounter.classList.add('error');
                }
            }
            
            descriptionTextarea.addEventListener('input', updateCharCount);
            updateCharCount(); // Инициализируем счетчик
            
            // Валидация формы
            const form = document.getElementById('editForm');
            form.addEventListener('submit', function(e) {
                let isValid = true;
                const inputs = form.querySelectorAll('.form-input[required]');
                
                inputs.forEach(input => {
                    input.classList.remove('error');
                    
                    if (!input.value.trim()) {
                        isValid = false;
                        input.classList.add('error');
                        
                        // Создаем или находим сообщение об ошибке
                        let errorMessage = input.nextElementSibling;
                        if (!errorMessage || !errorMessage.classList.contains('error-message')) {
                            errorMessage = document.createElement('div');
                            errorMessage.className = 'error-message';
                            errorMessage.innerHTML = '<i class="fas fa-exclamation-circle"></i> Это поле обязательно для заполнения';
                            input.parentNode.insertBefore(errorMessage, input.nextSibling);
                        }
                    } else {
                        // Удаляем сообщение об ошибке, если оно есть
                        const errorMessage = input.nextElementSibling;
                        if (errorMessage && errorMessage.classList.contains('error-message')) {
                            errorMessage.remove();
                        }
                    }
                });
                
                // Проверка максимальной длины описания
                if (descriptionTextarea.value.length > 2000) {
                    isValid = false;
                    descriptionTextarea.classList.add('error');
                    
                    let errorMessage = descriptionTextarea.nextElementSibling;
                    if (!errorMessage || !errorMessage.classList.contains('error-message')) {
                        errorMessage = document.createElement('div');
                        errorMessage.className = 'error-message';
                        errorMessage.innerHTML = '<i class="fas fa-exclamation-circle"></i> Описание не должно превышать 2000 символов';
                        descriptionTextarea.parentNode.insertBefore(errorMessage, descriptionTextarea.nextSibling);
                    }
                }
                
                if (!isValid) {
                    e.preventDefault();
                    
                    // Прокрутка к первой ошибке
                    const firstError = form.querySelector('.error');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstError.focus();
                    }
                } else {
                    // Показываем сообщение о сохранении
                    const submitButton = form.querySelector('button[type="submit"]');
                    const originalText = submitButton.innerHTML;
                    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Сохранение...';
                    submitButton.disabled = true;
                    
                    setTimeout(() => {
                        submitButton.innerHTML = originalText;
                        submitButton.disabled = false;
                    }, 2000);
                }
            });
            
            // Анимация фокуса на полях формы
            const formInputs = document.querySelectorAll('.form-input');
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentNode.style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentNode.style.transform = 'translateY(0)';
                });
            });
        
            
            // Отмена подтверждения при отправке формы
            form.addEventListener('submit', function() {
                window.removeEventListener('beforeunload', arguments.callee);
            });
        });
    </script>
</body>

