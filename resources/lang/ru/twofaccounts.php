<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'service' => 'Сервис',
    'account' => 'Учётная запись',
    'icon' => 'Значок',
    'icon_to_illustrate_the_account' => 'Значок, который иллюстрирует учётную запись',
    'remove_icon' => 'Удалить значок',
    'no_account_here' => 'Ни одной учётной записи 2FA не добавлено!',
    'add_first_account' => 'Выберите способ и добавьте свою первую учётную запись',
    'use_full_form' => 'Или воспользуйтесь полной формой',
    'add_one' => 'Добавить один',
    'show_qrcode' => 'Показать QR код',
    'no_service' => '- нет сервисов -',
    'account_created' => 'Учётная запись успешно создана',
    'account_updated' => 'Учётная запись успешно обновлена.',
    'accounts_deleted' => 'Учётная(ые) запись(и) успешно удалена(ы)',
    'accounts_moved' => 'Учётная(ые) запись(и) успешно перемещена(ы)',
    'export_selected_accounts' => 'Экспорт выбранных аккаунтов',
    'twofauth_export_format' => '2FAuth формат',
    'twofauth_export_format_sub' => 'Экспорт данных, используя схему 2FAuth json',
    'twofauth_export_format_desc' => 'Предпочтительный вариант, если вам нужно создать резервную копию, которая может быть восстановлена в 2FAuth. Этот формат включает в себя информацию о значках.',
    'twofauth_export_format_url' => 'Определение схемы описывается здесь:',
    'twofauth_export_schema' => 'Схема экспорта 2FAuth',
    'otpauth_export_format' => 'OTPAuth URI',
    'otpauth_export_format_sub' => 'Экспорт данных в список OTPAuth URI',
    'otpauth_export_format_desc' => 'OTPAuth URI - наиболее распространенный формат, используемый для обмена данными 2FA, например, в форме QR-кода, когда вы включаете 2FA на веб-сайте. Выберите этот вариант, если вы хотите сменить 2FAuth на что-то другое.',
    'reveal' => 'показать',
    'forms' => [
        'service' => [
            'placeholder' => 'Google, Twitter, Apple',
        ],
        'account' => [
            'placeholder' => 'Иван Иванов',
        ],
        'new_account' => 'Новая учётная запись',
        'edit_account' => 'Редактировать учётную запись',
        'otp_uri' => 'OTP Uri',
        'scan_qrcode' => 'Сканировать QR-код',
        'upload_qrcode' => 'Загрузить QR-код',
        'use_advanced_form' => 'Использовать расширенную форму',
        'prefill_using_qrcode' => 'Предзаполнить используя QR-код',
        'use_qrcode' => [
            'val' => 'Использовать QR-код',
            'title' => 'Использовать QR-код для волшебного заполнения формы',
        ],
        'unlock' => [
            'val' => 'Разблокировать',
            'title' => 'Разблокировать (под вашу ответственность)',
        ],
        'lock' => [
            'val' => 'Заблокировать',
            'title' => 'Заблокировать',
        ],
        'choose_image' => 'Загрузить',
        'i_m_lucky' => 'Мне повезёт!',
        'i_m_lucky_legend' => 'The "Try my luck" button tries to get a standard icon from the selected icon collection. The simpler the Service field value, the more likely you are to get the expected icon: Do not append any extension (like ".com"), use the exact name of the service, avoid special chars.',
        'test' => 'Проверка',
        'group' => [
            'label' => 'Группа',
            'help' => 'Группа, к которой будет привязана учётная запись'
        ],
        'secret' => [
            'label' => 'Секрет',
            'help' => 'Ключ, используемый для генерации кодов безопасности'
        ],
        'plain_text' => 'Обычный текст',
        'otp_type' => [
            'label' => 'Выберите тип создаваемого OTP',
            'help' => 'OTP на основе времени, OTP на основе HMAC или Steam OTP'
        ],
        'digits' => [
            'label' => 'Количество цифр',
            'help' => 'Количество цифр в генерируемом коде безопасности'
        ],
        'algorithm' => [
            'label' => 'Алгоритм',
            'help' => 'Алгоритм, используемый для защиты ваших кодов безопасности'
        ],
        'period' => [
            'label' => 'Интервал',
            'placeholder' => 'По умолчанию - 30',
            'help' => 'Период действия сгенерированных кодов безопасности в секундах'
        ],
        'counter' => [
            'label' => 'Счётчик',
            'placeholder' => 'По умолчанию - 0',
            'help' => 'Начальное значение счётчика',
            'help_lock' => 'Редактирование счётчика рискованно, так как вы можете рассинхронизировать учётную запись с сервером службы верификации. Используйте значок блокировки, чтобы включить изменение, но только если вы точно знаете, что вы делаете'
        ],
        'image' => [
            'label' => 'Изображение',
            'placeholder' => 'http://...',
            'help' => 'Адрес внешнего изображения для использования в качестве значка учётной записи'
        ],
        'options_help' => 'Вы можете оставить следующие значения пустыми, если не знаете, как их установить. Наиболее распространённые значения будут применены.',
        'alternative_methods' => 'Альтернативные методы',
        'spaces_are_ignored' => 'Нежелательные пробелы будут автоматически удалены'
    ],
    'stream' => [
        'live_scan_cant_start' => 'Невозможно запустить сканирование в реальном времени :(',
        'need_grant_permission' => [
            'reason' => 'У 2FAuth нет разрешения на доступ к вашей камере',
            'solution' => 'Вам нужно предоставить разрешение для использования камеры вашего устройства. Если вы уже отказались и ваш браузер не запрашивает у вас разрешения снова, обратитесь к документации браузера для выяснения того, как предоставить разрешение.',
            'click_camera_icon' => 'Обычно это делается нажатием на перечёркнутый значок камеры в адресной строке браузера или рядом с ней',
        ],
        'not_readable' => [
            'reason' => 'Сбой загрузки сканера',
            'solution' => 'Камера уже используется? Убедитесь, что другое приложение не использует вашу камеру и попробуйте снова'
        ],
        'no_cam_on_device' => [
            'reason' => 'На устройстве нет камеры',
            'solution' => 'Может быть, вы забыли подключить веб-камеру'
        ],
        'secured_context_required' => [
            'reason' => 'Требуется HTTPS контекст',
            'solution' => 'Для сканирования в реальном времени требуется HTTPS. Если вы запускаете 2FAuth с вашего компьютера, не используйте виртуальный хост, отличный от localhost'
        ],
        'https_required' => 'Для потоковой передачи с камеры требуется HTTPS',
        'camera_not_suitable' => [
            'reason' => 'Установленные камеры не подходят',
            'solution' => 'Пожалуйста, используйте другое устройство/камеру'
        ],
        'stream_api_not_supported' => [
            'reason' => 'Steam API не поддерживается в этом браузере',
            'solution' => 'Вам следует использовать современный браузер'
        ],
    ],
    'confirm' => [
        'delete' => 'Вы уверены, что хотите удалить эту учётную запись?',
        'cancel' => 'Изменения будут утеряны. Вы уверены?',
        'discard' => 'Вы уверены, что хотите отклонить эту учётную запись?',
        'discard_all' => 'Вы уверены, что хотите отклонить все учётные записи?',
        'discard_duplicates' => 'Вы уверены, что хотите отклонить все дубликаты?',
    ],
    'import' => [
        'import' => 'Импорт',
        'to_import' => 'Импортировать',
        'import_legend' => '2FAuth может импортировать данные из различных 2FA приложений.',
        'import_legend_afterpart' => 'Используйте функцию экспорта данных приложений, чтобы получить ресурс миграции, такой как QR-код или JSON файл, а затем загрузите его здесь.',
        'upload' => 'Загрузить',
        'scan' => 'Сканировать',
        'supported_formats_for_qrcode_upload' => 'Принимается: jpg, jpeg, png, bmp, gif, svg или webp',
        'supported_formats_for_file_upload' => 'Принимается: Простой текст, json, 2fas',
        'expected_format_for_direct_input' => 'Ожидается: список OTPAuth URI, по одной в строке',
        'supported_migration_formats' => 'Поддерживаемые форматы миграции',
        'qr_code' => 'QR-код',
        'text_file' => 'Текстовый файл',
        'direct_input' => 'Быстрый ввод',
        'plain_text' => 'Простой текст',
        'parsing_data' => 'Анализ данных...',
        'issuer' => 'Эмитент',
        'imported' => 'Импортировано',
        'failure' => 'Неудачно',
        'x_valid_accounts_found' => 'Найдено действительных учётных записей :count',
        'submitted_data_parsed_now_accounts_are_awaiting_import' => 'В ресурсе миграции были найдены учётные записи 2FA. Пока ни одна из них не была добавлена в 2FAuth.',
        'use_buttons_to_save_or_discard' => 'Используйте доступные кнопки, чтобы навсегда сохранить их в вашей коллекции 2FA или отклонить их.',
        'import_all' => 'Импортировать все',
        'import_this_account' => 'Импортировать эту учётную запись',
        'discard_all' => 'Отклонить все',
        'discard_duplicates' => 'Отклонить дубликаты',
        'discard_this_account' => 'Отклонить эту учётную запись',
        'generate_a_test_password' => 'Сгенерировать тестовый код',
        'possible_duplicate' => 'Учётная запись с такими же данными уже существует',
        'invalid_account' => '- неверная учётная запись -',
        'invalid_service' => '- неверный сервис -',
        'do_not_set_password_or_encryption' => 'НЕ ВКЛЮЧАЙТЕ защиту паролем или шифрование при экспорте данных из приложения 2FA, иначе 2FAuth не сможет расшифровать их.',
    ],

];