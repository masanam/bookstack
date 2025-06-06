<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Ви не маєте дозволу на доступ до цієї сторінки.',
    'permissionJson' => 'Ви не маєте дозволу виконувати заявлену дію.',

    // Auth
    'error_user_exists_different_creds' => 'Користувач з електронною адресою: електронна адреса вже існує, але з іншими обліковими даними.',
    'auth_pre_register_theme_prevention' => 'Обліковий запис користувача не може бути зареєстрований за наданими деталями',
    'email_already_confirmed' => 'Електронна пошта вже підтверджена, спробуйте увійти.',
    'email_confirmation_invalid' => 'Цей токен підтвердження недійсний або вже був використаний, будь ласка, спробуйте знову зареєструватися.',
    'email_confirmation_expired' => 'Термін дії токена підтвердження минув, новий електронний лист підтвердження був відправлений.',
    'email_confirmation_awaiting' => 'Потрібно підтвердити адресу електронної пошти для облікового запису, який використовується',
    'ldap_fail_anonymous' => 'LDAP-доступ невдалий, з використання анонімного зв\'язку',
    'ldap_fail_authed' => 'LDAP-доступ невдалий, використовуючи задані параметри dn та password',
    'ldap_extension_not_installed' => 'Розширення PHP LDAP не встановлено',
    'ldap_cannot_connect' => 'Неможливо підключитися до ldap-сервера, Помилка з\'єднання',
    'saml_already_logged_in' => 'Вже увійшли',
    'saml_no_email_address' => 'Не вдалося знайти електронну адресу для цього користувача у даних, наданих зовнішньою системою аутентифікації',
    'saml_invalid_response_id' => 'Запит із зовнішньої системи аутентифікації не розпізнається процесом, розпочатим цим додатком. Повернення назад після входу могла спричинити цю проблему.',
    'saml_fail_authed' => 'Вхід із використанням «:system» не вдався, система не здійснила успішну авторизацію',
    'oidc_already_logged_in' => 'Вже ввійшли в систему',
    'oidc_no_email_address' => 'Не вдалося знайти адресу електронної пошти для цього користувача у даних, наданих зовнішньою системою автентифікації',
    'oidc_fail_authed' => 'Увійти за допомогою :system не вдалося, система не надала успішної авторизації',
    'social_no_action_defined' => 'Жодних дій не визначено',
    'social_login_bad_response' => "Помилка, отримана під час входу з :socialAccount помилка : \n:error",
    'social_account_in_use' => 'Цей :socialAccount обліковий запис вже використовується, спробуйте ввійти з параметрами :socialAccount.',
    'social_account_email_in_use' => 'Електронна пошта :email вже використовується. Якщо у вас вже є обліковий запис, ви можете підключити свій обліковий запис :socialAccount з налаштувань вашого профілю.',
    'social_account_existing' => 'Цей :socialAccount вже додано до вашого профілю.',
    'social_account_already_used_existing' => 'Цей обліковий запис :socialAccount вже використовується іншим користувачем.',
    'social_account_not_used' => 'Цей обліковий запис :socialAccount account не пов\'язаний з жодним користувачем. Будь ласка, додайте його в налаштуваннях вашого профілю. ',
    'social_account_register_instructions' => 'Якщо у вас ще немає облікового запису, ви можете зареєструвати обліковий запис за допомогою параметра :socialAccount.',
    'social_driver_not_found' => 'Драйвер для СоціальноїМережі не знайдено',
    'social_driver_not_configured' => 'Ваші соціальні настройки :socialAccount не правильно налаштовані.',
    'invite_token_expired' => 'Термін дії цього запрошення закінчився. Замість цього ви можете спробувати скинути пароль свого облікового запису.',
    'login_user_not_found' => 'Користувач для цієї дії не знайдений.',

    // System
    'path_not_writable' => 'Не вдається завантажити шлях до файлу :filePath. Переконайтеся, що він доступний для запису на сервер.',
    'cannot_get_image_from_url' => 'Неможливо отримати зображення з :url',
    'cannot_create_thumbs' => 'Сервер не може створювати ескізи. Будь ласка, перевірте, чи встановлено розширення GD PHP.',
    'server_upload_limit' => 'Сервер не дозволяє завантажувати файли такого розміру. Спробуйте менший розмір файлу.',
    'server_post_limit' => 'Сервер не може отримати вказаний обсяг даних. Спробуйте ще раз з меншими даними або меншим файлом.',
    'uploaded'  => 'Сервер не дозволяє завантажувати файли такого розміру. Спробуйте менший розмір файлу.',

    // Drawing & Images
    'image_upload_error' => 'Виникла помилка під час завантаження зображення',
    'image_upload_type_error' => 'Тип завантаженого зображення недійсний',
    'image_upload_replace_type' => 'Замінники файлів зображень повинні мати однаковий тип',
    'image_upload_memory_limit' => 'Не вдалося завантажити зображення і/або створити ескізи через обмеження системних ресурсів.',
    'image_thumbnail_memory_limit' => 'Не вдалося створити варіації розміру зображення через обмеження системних ресурсів.',
    'image_gallery_thumbnail_memory_limit' => 'Не вдалося створити галерею через обмеження системних ресурсів.',
    'drawing_data_not_found' => 'Не вдалося завантажити дані малюнка. Файл малюнка може більше не існувати або у вас немає дозволу на доступ до нього.',

    // Attachments
    'attachment_not_found' => 'Вкладення не знайдено',
    'attachment_upload_error' => 'Сталася помилка при завантаженні файлу',

    // Pages
    'page_draft_autosave_fail' => 'Не вдалося зберегти чернетку. Перед збереженням цієї сторінки переконайтеся, що у вас є зв\'язок з сервером.',
    'page_draft_delete_fail' => 'Не вдалося видалити чернетку сторінки та отримати збережений вміст сторінки',
    'page_custom_home_deletion' => 'Неможливо видалити сторінку, коли вона встановлена як домашня сторінка',

    // Entities
    'entity_not_found' => 'Об\'єкт не знайдено',
    'bookshelf_not_found' => 'Книжкова полиця не знайдена',
    'book_not_found' => 'Книга не знайдена',
    'page_not_found' => 'Сторінку не знайдено',
    'chapter_not_found' => 'Розділ не знайдено',
    'selected_book_not_found' => 'Вибрана книга не знайдена',
    'selected_book_chapter_not_found' => 'Вибрана книга або глава не знайдена',
    'guests_cannot_save_drafts' => 'Гості не можуть зберігати чернетки',

    // Users
    'users_cannot_delete_only_admin' => 'Ви не можете видалити єдиного адміністратора',
    'users_cannot_delete_guest' => 'Ви не можете видалити гостьового користувача',
    'users_could_not_send_invite' => 'Не вдалося створити користувача, оскільки не вдалося надіслати електронний лист із запрошенням',

    // Roles
    'role_cannot_be_edited' => 'Цю роль не можна редагувати',
    'role_system_cannot_be_deleted' => 'Ця роль є системною, і її не можна видалити',
    'role_registration_default_cannot_delete' => 'Цю роль не можна видалити, бо вона встановлена як роль реєстрації за умовчанням',
    'role_cannot_remove_only_admin' => 'Цей користувач є єдиним користувачем, призначеним для ролі адміністратора. Призначте роль адміністратора іншому користувачеві, перш ніж спробувати його видалити.',

    // Comments
    'comment_list' => 'Під час отримання коментарів сталася помилка.',
    'cannot_add_comment_to_draft' => 'Ви не можете додати коментарі до проекту.',
    'comment_add' => 'Під час додавання/оновлення коментарів сталася помилка.',
    'comment_delete' => 'Під час видалення коментаря сталася помилка.',
    'empty_comment' => 'Неможливо додати порожній коментар.',

    // Error pages
    '404_page_not_found' => 'Сторінку не знайдено',
    'sorry_page_not_found' => 'Вибачте, сторінку, яку ви шукали, не знайдено.',
    'sorry_page_not_found_permission_warning' => 'Якщо ви очікували що ця сторінки існує – можливо у вас немає дозволу на її перегляд.',
    'image_not_found' => 'Зображення не знайдено',
    'image_not_found_subtitle' => 'Вибачте, файл зображення, що ви шукали, не знайдено.',
    'image_not_found_details' => 'Якщо ви очікували існування цього зображення, його, можливо, було видалено.',
    'return_home' => 'Повернутися на головну',
    'error_occurred' => 'Виникла помилка',
    'app_down' => ':appName зараз недоступний',
    'back_soon' => 'Він повернеться найближчим часом.',

    // Import
    'import_zip_cant_read' => 'Не вдалося прочитати ZIP-файл.',
    'import_zip_cant_decode_data' => 'Не вдалося знайти і розшифрувати контент ZIP data.json.',
    'import_zip_no_data' => 'ZIP-файл не містить очікуваної книги, глави або вмісту сторінки.',
    'import_validation_failed' => 'Не вдалося виконати перевірку ZIP-адреси із помилками:',
    'import_zip_failed_notification' => 'Не вдалося імпортувати ZIP-файл.',
    'import_perms_books' => 'У Вас не вистачає необхідних прав для створення книг.',
    'import_perms_chapters' => 'Вам не вистачає необхідних дозволів для створення розділів.',
    'import_perms_pages' => 'У Вас немає необхідних прав для створення сторінок.',
    'import_perms_images' => 'У Вас немає необхідних прав для створення зображень.',
    'import_perms_attachments' => 'У Вас немає необхідних прав для створення вкладень.',

    // API errors
    'api_no_authorization_found' => 'У запиті не знайдено токен авторизації',
    'api_bad_authorization_format' => 'У запиті знайдено токен авторизації, але формат недійсний',
    'api_user_token_not_found' => 'Не знайдено відповідного API-токена для наданого токена авторизації',
    'api_incorrect_token_secret' => 'Секрет, наданий для даного використовуваного токена API є неправильним',
    'api_user_no_api_permission' => 'Власник використовуваного токена API не має дозволу здійснювати виклики API',
    'api_user_token_expired' => 'Термін дії токена авторизації закінчився',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Помилка під час надсилання тестового електронного листа:',

    // HTTP errors
    'http_ssr_url_no_match' => 'URL-адреса не відповідає налаштованим дозволеним SSR хостів',
];
