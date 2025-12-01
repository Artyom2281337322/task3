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
            --success-light: #d1fae5;
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

        /* Форма создания */
        .form-container {
            background: var(--white);
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-light);
            margin-top: 1.5rem;
        }

        .form-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
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

        .form-header p {
            color: var(--text-gray);
            font-size: 0.95rem;
            margin-top: 0.25rem;
        }

        /* Группы полей формы */
        .form-group {
            margin-bottom: 1.75rem;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .form-label i {
            color: var(--primary-blue);
            width: 20px;
            text-align: center;
        }

        .form-label .required {
            color: var(--danger);
            font-size: 0.8rem;
            margin-left: 4px;
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

        .form-input::placeholder {
            color: #94a3b8;
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
            line-height: 1.4;
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

        /* Информационная карточка */
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

        /* Примеры номеров автомобилей */
        .examples {
            background: #f8fafc;
            border-radius: 8px;
            padding: 1rem;
            margin-top: 1rem;
            border-left: 3px solid var(--primary-blue);
        }

        .examples h5 {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .examples h5 i {
            color: var(--primary-blue);
        }

        .examples ul {
            list-style: none;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .examples li {
            background: white;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-size: 0.85rem;
            color: var(--text-gray);
            border: 1px solid var(--border-light);
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .examples li:hover {
            background: var(--primary-blue);
            color: white;
            border-color: var(--primary-blue);
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
            
            .examples ul {
                flex-direction: column;
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

        /* Сообщение об успехе */
        .success-message {
            background: var(--success-light);
            border: 1px solid #a7f3d0;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--success);
            font-weight: 500;
        }

        .success-message i {
            font-size: 1.2rem;
        }
    </style>

    <nav x-data="{ open: false }">
        <div class="nav-container">
            <!-- Логотип -->
            <a href="{{ route('dashboard') }}" class="logo">
                <i class="fas fa-tasks"></i>
                <span>Заявки</span>
            </a>

            <!-- Меню пользователя -->
            <div class="user-menu">
                <div class="user-avatar" title="{{ Auth::user()->name }}">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </div>
        </div>
    </nav>

    <!-- Основной контент -->
    <div class="container">
        <!-- Хлебные крошки -->
        <div class="breadcrumbs">
            <a href="{{ route('dashboard') }}">Главная</a>
            <i class="fas fa-chevron-right"></i>
            <a href="{{ route('report.index') }}">Заявки</a>
            <i class="fas fa-chevron-right"></i>
            <span>Создание заявки</span>
        </div>

        <!-- Заголовок страницы -->
        <div class="header">
            <h1 class="page-title">Создание новой заявки</h1>
            <a href="{{ route('report.index') }}" class="btn btn-back">
                <i class="fas fa-arrow-left"></i> Назад к списку
            </a>
        </div>

        <!-- Информационная карточка -->
        <div class="info-card">
            <i class="fas fa-lightbulb"></i>
            <div>
                <h4>Создание новой заявки</h4>
                <p>Заполните все обязательные поля для создания новой заявки. После создания заявка будет добавлена в общий список и ей будет присвоен статус "Новая".</p>
            </div>
        </div>

        <!-- Форма создания -->
        <div class="form-container">
            <div class="form-header">
                <i class="fas fa-plus-circle"></i>
                <div>
                    <h2>Новая заявка</h2>
                    <p>Заполните форму для создания новой заявки</p>
                </div>
            </div>

            <form action="{{ route('reports.store') }}" method="POST" id="createForm">
                @csrf

                <!-- Номер автомобиля -->
                <div class="form-group">
                    <label class="form-label" for="number">
                        <i class="fas fa-car"></i> Номер автомобиля
                        <span class="required">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="number" 
                        id="number"
                        class="form-input"
                        placeholder="Например: А123ВС777"
                        required
                        maxlength="20"
                    >
                    <span class="form-hint">Введите номер автомобиля в любом формате. Максимум 20 символов.</span>
                    
                    <!-- Примеры номеров -->
                    <div class="examples">
                        <h5><i class="fas fa-lightbulb"></i> Примеры форматов:</h5>
                        <ul>
                            <li onclick="document.getElementById('number').value = 'А123ВС777'">А123ВС777</li>
                            <li onclick="document.getElementById('number').value = 'ВТ234ОР'">ВТ234ОР</li>
                            <li onclick="document.getElementById('number').value = 'С567ТУ178'">С567ТУ178</li>
                            <li onclick="document.getElementById('number').value = 'МО1234О'">МО1234О</li>
                        </ul>
                    </div>
                </div>

                <!-- Описание заявки -->
                <div class="form-group">
                    <label class="form-label" for="description">
                        <i class="fas fa-align-left"></i> Описание проблемы
                        <span class="required">*</span>
                    </label>
                    <textarea 
                        name="description" 
                        id="description"
                        class="form-input"
                        rows="6"
                        required
                        maxlength="2000"
                    ></textarea>
                    <div class="char-counter" id="charCounter">
                        <span id="charCount">0</span> / 2000 символов
                    </div>
                   
                </div>

                <!-- Дополнительные поля (можно добавить позже) -->
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-info-circle"></i> Дополнительная информация
                    </label>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 0.5rem;">
                        <div style="background: #f8fafc; padding: 1rem; border-radius: 8px;">
                            <div style="font-size: 0.85rem; color: var(--text-gray); margin-bottom: 0.25rem;">Статус</div>
                            <div style="font-weight: 600; color: var(--success);">Новая</div>
                        </div>
                        <div style="background: #f8fafc; padding: 1rem; border-radius: 8px;">
                            <div style="font-size: 0.85rem; color: var(--text-gray); margin-bottom: 0.25rem;">Дата создания</div>
                            <div style="font-weight: 600;">{{ now()->format('d.m.Y H:i') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Кнопки формы -->
                <div class="form-actions">
                    <div>
                        <a href="{{ route('report.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Отмена
                        </a>
                    </div>
                    <div style="display: flex; gap: 0.75rem;">
                        <button type="reset" class="btn btn-secondary" id="resetBtn">
                            <i class="fas fa-redo"></i> Очистить
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Создать заявку
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
            
            // Форматирование номера автомобиля (опционально)
            const numberInput = document.getElementById('number');
            numberInput.addEventListener('input', function(e) {
                // Автоматически переводим в верхний регистр
                this.value = this.value.toUpperCase();
                
                // Удаляем все символы, кроме букв, цифр и пробелов
                this.value = this.value.replace(/[^А-ЯЁA-Z0-9\s]/g, '');
            });
            
            // Валидация формы
            const form = document.getElementById('createForm');
            form.addEventListener('submit', function(e) {
                let isValid = true;
                const inputs = form.querySelectorAll('.form-input[required]');
                
                // Сброс предыдущих ошибок
                document.querySelectorAll('.error-message').forEach(el => el.remove());
                document.querySelectorAll('.form-input').forEach(el => el.classList.remove('error'));
                
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.classList.add('error');
                        
                        // Создаем сообщение об ошибке
                        const errorMessage = document.createElement('div');
                        errorMessage.className = 'error-message';
                        errorMessage.innerHTML = '<i class="fas fa-exclamation-circle"></i> Это поле обязательно для заполнения';
                        input.parentNode.insertBefore(errorMessage, input.nextSibling);
                    }
                });
                
                // Проверка максимальной длины описания
                if (descriptionTextarea.value.length > 2000) {
                    isValid = false;
                    descriptionTextarea.classList.add('error');
                    
                    const errorMessage = document.createElement('div');
                    errorMessage.className = 'error-message';
                    errorMessage.innerHTML = '<i class="fas fa-exclamation-circle"></i> Описание не должно превышать 2000 символов';
                    descriptionTextarea.parentNode.insertBefore(errorMessage, descriptionTextarea.nextSibling);
                }
                
                // Проверка номера автомобиля
                if (numberInput.value.trim() && numberInput.value.length < 3) {
                    isValid = false;
                    numberInput.classList.add('error');
                    
                    const errorMessage = document.createElement('div');
                    errorMessage.className = 'error-message';
                    errorMessage.innerHTML = '<i class="fas fa-exclamation-circle"></i> Номер автомобиля должен содержать минимум 3 символа';
                    numberInput.parentNode.insertBefore(errorMessage, numberInput.nextSibling);
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
                    // Показываем анимацию загрузки
                    const submitButton = form.querySelector('button[type="submit"]');
                    const originalText = submitButton.innerHTML;
                    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Создание...';
                    submitButton.disabled = true;
                    
                    // Через 2 секунды возвращаем обычное состояние (на случай если форма не отправится)
                    setTimeout(() => {
                        submitButton.innerHTML = originalText;
                        submitButton.disabled = false;
                    }, 3000);
                }
            });
            
            // Кнопка сброса формы
            const resetBtn = document.getElementById('resetBtn');
            resetBtn.addEventListener('click', function() {
                if (confirm('Вы уверены, что хотите очистить все поля формы?')) {
                    form.reset();
                    updateCharCount();
                    
                    // Показываем сообщение об успешном сбросе
                    const resetMessage = document.createElement('div');
                    resetMessage.className = 'success-message';
                    resetMessage.innerHTML = '<i class="fas fa-check-circle"></i> Форма очищена. Вы можете начать заполнение заново.';
                    resetMessage.style.marginTop = '1rem';
                    
                    // Удаляем предыдущее сообщение если есть
                    const prevMessage = form.querySelector('.success-message');
                    if (prevMessage) prevMessage.remove();
                    
                    form.insertBefore(resetMessage, form.querySelector('.form-actions'));
                    
                    // Автоматически скрываем сообщение через 5 секунд
                    setTimeout(() => {
                        resetMessage.remove();
                    }, 5000);
                    
                    // Фокус на первое поле
                    numberInput.focus();
                }
            });
            
            // Автоматический фокус на первое поле при загрузке
            numberInput.focus();
            
            // Подсказки при фокусе
            const formInputs = document.querySelectorAll('.form-input');
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentNode.style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentNode.style.transform = 'translateY(0)';
                });
            });
            
            // Предупреждение при закрытии страницы с несохраненными данными
            let formChanged = false;
            
            formInputs.forEach(input => {
                input.addEventListener('input', function() {
                    formChanged = true;
                });
            });
            
            window.addEventListener('beforeunload', function(e) {
                if (formChanged) {
                    e.preventDefault();
                    e.returnValue = 'У вас есть несохраненные данные. Вы уверены, что хотите покинуть страницу?';
                }
            });
            
            // Отмена предупреждения при отправке формы
            form.addEventListener('submit', function() {
                formChanged = false;
                window.removeEventListener('beforeunload', arguments.callee);
            });
            
    </script>
</body>