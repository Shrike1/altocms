<?php
/*---------------------------------------------------------------------------
 * @Project: Alto CMS
 * @Project URI: http://altocms.com
 * @Description: Advanced Community Engine
 * @Version: 0.9a
 * @Copyright: Alto CMS Team
 * @License: GNU GPL v2 & MIT
 *----------------------------------------------------------------------------
 */

/**
 * Языковой файл для Админпанели (Русский язык)
 */
return array(
    'title' => 'Админпанель',

    'menu_info' => 'Информация',
    'menu_info_dashboard' => 'Консоль',
    'menu_info_report' => 'Отчет',
    'menu_info_php' => 'Информация о PHP',

    'menu_content' => 'Контент',
    'menu_content_pages' => 'Страницы',
    'menu_content_blogs' => 'Блоги',
    'menu_content_topics' => 'Статьи',
    'menu_content_comments' => 'Комментарии',

    'menu_users' => 'Пользователи',
    'menu_users_users' => 'Все пользователи',
    'menu_users_banlist' => 'Бан-лист',
    'menu_users_invites' => 'Приглашения',

    'menu_config' => 'Настройки',
    'menu_config_site' => 'Настройки сайта',
    'menu_config_lang' => 'Языки',
    'menu_config_content' => 'Типы контента',
    'menu_config_userfields' => 'Пользовательские поля',

    'menu_site' => 'Сайт',
    'menu_site_skins' => 'Оформление',
    'menu_site_widgets' => 'Виджеты',
    'menu_site_plugins' => 'Плагины',

    'menu_logs' => 'Журналы',
    'menu_logs_error' => 'Ошибки системы',
    'menu_logs_sql_error' => 'Ошибки SQL',
    'menu_logs_sql_log' => 'SQL-запросы',

    'menu_tools' => 'Инструменты',
    'menu_tools_reset' => 'Сброс данных',
    'menu_tools_commentstree' => 'Дерево комментариев',
    'menu_tools_recalcfavourites' => 'Счетчики избранного',
    'menu_tools_recalcvotes' => 'Счетчики голосования',
    'menu_tools_recalctopics' => 'Кол-во статей в блогах',
    'menu_tools_recalcblograting' => 'Пересчет рейтинга блогов',
    'menu_tools_checkdb' => 'Контроль БД',

    /* DASHBOARD */
    'dashboard_updates_title' => 'Обновления Alto CMS и плагинов',
    'dashboard_news_title' => 'Информация и новости Alto CMS',
    'dashboard_turn_title' => 'Отключение консоли',
    'dashboard_turn_on_text' => 'Если Вы не хотите получать информацию о новостях Alto CMS и о новых версиях плагинов, Вы можете отключить эту функцию',
    'dashboard_turn_off_text' => 'Вы отключили получение информации с сервера Alto CMS.<br/><br/>Если Вы хотите получать информацию о новостях Alto CMS и о новых версиях плагинов, Вы можете включить эту функцию',
    'dashboard_add_widget' => 'Вы можете добавить виджеты на эту страницу при помощи кнопки "Добавить"',
    'dashboard_main' => 'Главная',

    /* common texts */
    'word_yes' => 'Да',
    'word_no' => 'Нет',
    'include' => 'Добавить',
    'exclude' => 'Исключить',
    'delete' => 'Удалить',
    'activate' => 'Активировать',
    'deactivate' => 'Деактивировать',

    'action_ok' => 'Команда выполнена',
    'action_err' => 'Ошибка выполнения команды',

    'no_data' => 'Нет данных',
    'execute' => 'Выполнить',
    'update' => 'Обновить',

    'menu_list' => 'Список',
    'menu_options' => 'Опции',
    'turn_on' => 'Включить',
    'turn_off' => 'Выключить',

    'file_write_error' => 'Ошибка записи в файл <b>%%file%%</b>',
    'file_not_found' => 'Файл не найден <b>%%file%%</b>',
    'err_read' => 'Ошибка чтения',
    'err_read_dir' => 'Ошибка чтения папки',
    'err_read_file' => 'Ошибка чтения файла',
    'err_copy_file' => 'Ошибка копирования файла %%file%%',
    'err_open_zip_file' => 'Ошибка чтения ZIP-файла',
    'err_extract_zip_file' => 'Ошибка распаковки ZIP-файла',

    'goto_site' => 'Перейти на сайт',
    'need_upgrade' => '<b>ВНИМАНИЕ!</b> Вам необходимо выполнить обновление модуля, кликнув по ссылке ниже',
    'denied_title' => 'Ошибка доступа',
    'denied_text' => 'У вас нет доступа к этому режиму',
    'banned1_text' => 'Вам закрыт доступ к этому сайту до %%date%%',
    'banned2_text' => 'Вам закрыт доступ к этому сайту',
    'banned3_text' => 'Закрыт доступ к этому сайту с вашего IP-адреса',

    'form_choose_file' => 'Выберите файл',
    'form_no_file_selected' => 'Файл не выбран',

    'menu_panel' => 'Админпанель',
    'menu_params' => 'Параметры',

    'menu_statistics' => 'Статистика',
    'menu_plugins' => 'Плагины',
    'menu_delegates' => 'Делегирование',

    /* INFO & REPORTS */
    'info_versions' => 'Версии',

    'info_version_php' => 'Версия PHP',
    'info_version_smarty' => 'Версия Smarty',
    'info_version_alto' => 'Версия Alto CMS',

    'site_statistics' => 'Статистика сайта',
    'site_stat_users' => 'Пользователей',
    'site_stat_blogs' => 'Блогов',
    'site_stat_topics' => 'Топиков',
    'site_stat_comments' => 'Комментариев',

    'site_info' => 'Информация о сайте',
    'info_site_url' => 'Адрес сайта',
    'info_site_skin' => 'Текущий скин',
    'info_site_jslib' => 'Используемая библиотека javascript',
    'info_site_client' => 'Веб-клиент',

    'button_report' => 'Сформировать отчет',
    'button_checkin' => 'Включить в отчет',

    /* BLOGS */
    'blogs_title' => 'Блоги',
    'blogs_list' => 'Список',

    /* TOPICS */
    'topics_title' => 'Топики',

    /* COMMENTS */
    'comments_title' => 'Комментарии',

    /* USERS */
    'users_title' => 'Пользователи',
    'menu_users_profile' => 'Профиль пользователя',
    'menu_users_list' => 'Список',

    'users_list' => 'Пользователи',
    'admins_list' => 'Администраторы',
    'users_date_reg' => 'Дата регистрации',
    'users_ip_reg' => 'IP регистрации',
    'users_ip_last' => 'IP последний',
    'users_activated' => 'Активирован',
    'users_last_activity' => 'Последняя активность',
    'users_banned' => 'Забанен',
    'users_activate' => 'Активировать',
    'users_action' => 'Действие',

    'user_login' => 'Логин пользователя',
    'user_email' => 'E-mail пользователя',
    'user_not_found' => 'Пользователь %%user%% не найден',
    'user_ip_addresses' => 'IP-адреса пользователя',
    'user_ip' => 'IP пользователя',
    'user_filter_ip_notice' => 'Напр., 83.167.100.46 или 83.167.*.* ',
    'user_filter_regdate_notice' => 'Напр., 2009-2 или 2009-3-31',
    'user_filter_email_notice' => 'Укажите email пользователя',

    'users_ban' => 'Забанить',
    'users_unban' => 'Разбанить',
    'cannot_ban_self' => 'Вы не можете забанить сами себя',
    'cannot_banned_admin' => 'Нельзя сделать администратором забаненного пользователя',
    'already_added' => 'Этот пользователь уже администратор',
    'cannot_ban_admin' => 'Нельзя забанить администратора',
    'cannot_with_admin' => 'Операция невозможна с пользователем admin',
    'users_del_warning' => 'ВНИМАНИЕ!<br/>Удаляя пользователя, Вы удалите ВСЕ его блоги, статьи, комментарии, голосования. Могут быть удалены также комментарии других пользователей, написанные в ответ на удаляемые комментарии',
    'users_del_confirm' => 'Подтвердите удаление',
    'cannot_del_self' => 'Вы не можете удалить сами себя',
    'cannot_del_admin' => 'Вы не можете удалить администратора',
    'cannot_del_confirm' => 'Вы не подтвердили удаление пользователя',
    'user_deleted' => 'Пользователь %%user%% удален',
    'msg_sent_ok' => 'Сообщение успешно отправлено',

    'seek_users' => 'Искать пользователей',
    'selected_users' => 'Выбраны пользователи',
    'users_not_selected' => 'Пользователи не выбраны',

    'user_photo' => 'Фото пользователя',
    'user_voted' => 'Голосовал',
    'user_voted_title' => 'Пользователь голосовал',
    'user_voted_users' => 'За пользователей',
    'user_voted_topics' => 'За статьи',
    'user_voted_blogs' => 'За блоги',
    'user_voted_comments' => 'За комментарии',

    'user_votes_title' => 'За пользователя голосовали',
    'user_votes_users' => 'В его профиле',
    'user_votes_topics' => 'За его статьи',
    'user_votes_blogs' => 'За его блоги',
    'user_votes_comments' => 'За его комментарии',

    'user_wrote_topics' => 'Написал статей',
    'user_wrote_comments' => 'Написал комментариев',
    'comment_edit' => 'Редактирование комментария',

    /* INVITES */
    'invites_title' => 'Приглашения',
    'invite_code' => 'Код приглашения',
    'invite_user_from' => 'Отправитель',
    'invite_user_to' => 'Получатель',
    'invite_date_add' => 'Дата создания',
    'invite_date_used' => 'Дата использования',
    'send_invite_mail' => 'Выслать приглашения по e-mail',
    'make_invite_text' => 'Сколько приглашений надо создать',
    'invite_mode_mail' => 'Отправить приглашения по e-mail',
    'invite_mode_text' => 'Сгенерировать и показать приглашения',
    'invite_submit' => 'Сгенерировать приглашения',
    'invaite_mail_empty' => 'Необходимо указать хотя бы один e-mail',
    'invaite_text_empty' => 'Количество требуемых приглашений должно быть больше нуля',
    'invaite_mail_done' => 'Разослано новых приглашений: %%num%%',
    'invaite_text_done' => 'Создано новых приглашений: %%num%%',


    /* BANLIST */
    'banlist_title' => 'Бан-лист',
    'banlist_ids' => 'Пользователи',
    'banlist_ips' => 'IP-адреса',
    'banlist_add' => 'Добавить в бан-лист',

    'menu_users_fields' => 'Дополнительные поля',

    'menu_additional' => 'Дополнительно',
    'menu_db' => 'Контроль БД',
    'menu_additional_item' => 'Дополнительно ',

    'params_title' => 'Параметры Админпанели',

    'param_items_per_page' => 'Число строк на странице',
    'param_items_per_page_notice' => 'Число строк, выводимых на странице в табличных списках (пользователи, бан листы и т.д.)',
    'param_votes_per_page' => 'Число последних голосований в профайле',
    'param_votes_per_page_notice' => 'Число последних голосований, выводимых в профайле пользователя в каждой таблице - голосование за других пользователей, их статьи, комментарии',
    'param_edit_footer' => 'Подпись редактируемых статей/комментариев',
    'param_edit_footer_notice' => 'Подпись, которая автоматически будет добавляться при редактировании статей/комментариев из Админпанели',
    'param_vote_value' => 'Сила администраторского голоса',
    'param_vote_value_notice' => 'Значение "усиленного голосования", доступного в профайле пользователя в Админпанели',

    'vote_error' => 'Ошибка при голосовании администратора',
    'repeat_vote_error' => 'Ошибка при повторном голосовании администратора',

    'ban_period' => 'Срок бана',
    'ban_upto' => 'Бан до',
    'ban_unlim' => 'Бан бессрочный',
    'ban_for' => 'Бан на',
    'ban_days' => 'дней',
    'ban_comment' => 'Комментарий',

    'close_open_site' => 'Закрыть/открыть сайт',
    'site_closed' => 'Cайт закрыт',
    'site_openned' => 'Сайт открыт',
    'close_site_notice' => 'Вы можете закрыть сайт от посетителей. В этом режиме только администраторы имеют доступ к сайту.',
    'close_site_text_notice' => 'Укажите текст, который будут видеть посетители на закрытом сайте',
    'close_site_file_notice' => 'Или укажите имя HTML-файла, на который будут перенаправляться посетители (должен находиться в корневой папке)',
    'close_site_text_empty' => 'Текст сообщения не может быть пустым',
    'close_site_file_empty' => 'Имя файла не может быть пустым',

    'seek' => 'Искать',
    'save' => 'Сохранить',
    'reset' => 'Сброс',
    'cancel' => 'Отмена',
    'continue' => 'Продолжить',
    'saved_ok' => 'Данные сохранены',
    'saved_err' => 'Ошибка сохранения данных',
    'err_wrong_ip' => 'Неверный IP-адрес',
    'config_err_read' => 'Ошибка чтения файла конфигурации',
    'config_err_backup' => 'Ошибка создания бэкап-файла',
    'config_err_save' => 'Ошибка сохранения файла конфигурации',
    'config_save_ok' => 'Измененный файл конфигурации сохранен',

    'include_admin' => 'Добавить администратора',
    'exclude_admin' => 'Исключить администратора',

    'select_file' => 'Выбрать файл',

    'send_copy_self' => 'Отослать копию себе',
    'send_err_to_user' => 'Ошибка отправки сообщения пользователю %%user%%',
    'send_common_message' => 'Общее сообщение',
    'send_separate_messages' => 'Отдельные сообщения',
    'send_common_notice' => 'Пользователи получат общее сообщение и любой ответ на него будут видеть все остальные получатели',
    'send_separate_notice' => 'Каждый пользователь получит отдельное персональное сообщение',

    /* LOGS */
    'logs_errors_title' => 'Журналы: Ошибки системы',
    'logs_sql_errors_title' => 'Журналы: Ошибки SQL',
    'logs_sql_title' => 'Журналы: SQL-запросы',
    'logs_title' => 'Настройки журналов',
    'logs_users_enable_title' => 'Журнал действий пользователей',
    'logs_users_enable_notice' => 'Вы можете включить/выключить ведение журнала действий пользователей',
    'logs_turned_on' => 'Включено',
    'logs_turned_off' => 'Выключено',
    'logs_users_file' => 'Имя файла журнала действий пользователей',
    'logs_users_file_notice' => 'Укажите имя файла журнала действий пользователей, размещаемого в папке logs',
    'logs_users_debug' => 'Включать отладочную информацию',
    'logs_users_debug_notice' => 'В журнал будет включаться отладочная информация (стек вызовов)',
    'logs_users_logins' => 'Включить журналы только для этих пользователей',
    'logs_users_logins_notice' => 'Перечисляются логины пользователей через запятую без пробелов. Если заданы, то журналы ведутся только для этих пользователей, иначе ведется единый журнал для всех',

    'logs_admin_enable_title' => 'Журнал действий администраторов',
    'logs_admin_enable_notice' => 'Вы можете включить/выключить ведение журнала действий администраторов',
    'logs_admin_file' => 'Имя файла журнала действий администраторов',
    'logs_admin_file_notice' => 'Укажите имя файла журнала действий администраторов, размещаемого в папке logs',

    'logs_max_size' => 'Максимальный размер лог-файла',
    'logs_max_size_notice' => 'При достижении этого размера, создается копия и создается новый файл. Если ноль, то новый файл создается каждые сутки',
    'logs_max_files' => 'Число копий лог-файлов',
    'logs_max_files_notice' => 'Количество архивных копий лог-файлов, сохраняемых на сайте',

    'blog_edit' => 'Редактировать блог',
    'blog_delete' => 'Удалить блог',
    'blog_del_confirm' => 'Этот блог будет удален: ',
    'blog_del_topics' => 'Статей в блоге: ',
    'blog_del_topics_choose' => 'Что делать со статьями блога?',
    'blog_del_error' => 'Ошибка удаления блога',
    'blog_del_move_error' => 'Ошибка перемещения статей в новый блог',

    'topic_edit' => 'Редактировать статью',
    'topic_delete' => 'Удалить статью',
    'topic_del_confirm' => 'Топик &quot;%%topic%%&quot; будет удален навсегда со всем его содержимым. \nПродолжить?',

    'param_check_password' => 'Проверять пароль администратора',
    'param_check_password_notice' => 'Если задано, то проверяется качество пароля администратора на надежность',

    'password_quality' => 'У Вас очень слабый пароль! Настоятельно рекомендуется изменить текущий пароль!',

    'cache_title' => 'Настройки кеширования',
    'cache_type' => 'Тип кеширования',
    'cache_type_notice' => 'Укажите "none" для отключения кеширования. Вариант "memory" использует memcached',
    'cache_type_none' => 'Не используется',
    'cache_type_file' => 'Файловый кеш',
    'cache_type_memo' => 'Использовать Memcached',

    'cache_prefix' => 'Префикс кеширования',
    'cache_prefix_notice' => 'Должен быть уникальным для каждого сайта, чтобы можно было держать несколько сайтов с общим кеш-хранилищем',

    'admin_list_restorecomment' => 'Перестроение дерева комментариев',
    'admin_list_recalcfavourite' => 'Пересчитать счетчики избранных',
    'admin_list_recalcvote' => 'Пересчитать счетчики голосований',
    'admin_list_recalctopic' => 'Пересчитать количество статей в блогах',

    /* CONFIG */
    'config_title' => 'Настройки сайта',
    'menu_close_site' => 'Закрыть сайт',
    'menu_cache' => 'Кеширование',

    'menu_languages' => 'Языки',
    'menu_installed' => 'Установленные',

    'settings_title' => 'Настройки',
    'settings_base' => 'Основные',
    'settings_edit' => 'Редактирование',
    'settings_links' => 'Ссылки',
    'settings_sys' => 'Системные',
    'settings_cssjs' => 'CSS и javascript',
    'settings_acl' => 'Права',

    'set_links_homepage' => 'Главная',
    'set_links_homepage_label' => 'Что показывать на главной',
    'set_links_homepage_home' => 'Домашнюю страницу',
    'set_links_homepage_index' => 'Ленту статей',
    'set_links_homepage_page' => 'Заданную страницу',

    'set_links_drafts' => 'Черновики',
    'set_links_drafts_enable' => 'Показывать черновики по прямой ссылке',

    'set_links_topics' => 'Статьи',
    'set_links_topics_mode' => 'Ссылки на статьи',
    'set_links_topics_mode_ls' => 'Как в LiveStreet',
    'set_links_topics_mode_id' => 'ID статьи (числовой)',
    'set_links_topics_mode_day_name' => 'День и название',
    'set_links_topics_mode_month_name' => 'Месяц и название',
    'set_links_topics_mode_custom' => 'Произвольная',

    'set_links_generate' => 'Генерация ссылок',
    'set_links_generate_text' => 'Вы можете выполнить генерацию ссылок для всех статей. Это может быть необходимо, если Вы перешли на Alto CMS с какой-нибудь другой системы управления сайтом. Вы также можете выполнить эту операцию для каждой статьи в отдельности, входя в режим редактиования статьи.',
    'set_links_generate_button' => 'Выполнить генерацию ссылок для статей',
    'set_links_generate_count' => 'Количество статей без ссылок: ',
    'set_links_generate_done' => 'Ссылки для статей сгенерированы',
    'set_links_generate_next' => 'Ссылки сгенерированы, но не для всех статей. Осталось %%num%% статей без ссылок. Необходимо продолжить генерацию ссылок.',
    'set_links_generate_error' => 'Ошибка генерации ссылок для статей',

    'set_edit_comment' => 'Редактирование комментариев',
    'set_edit_comment_disabled' => 'Запрещено',
    'set_edit_comment_enabled' => 'Разрешено в течение',

    'set_section_site' => 'Сайт',
    'set_view_name' => 'Название сайта',
    'set_view_description' => 'Значение meta-тега description',
    'set_view_keywords' => 'Значение meta-тега keywords',

    'set_section_general' => 'Общие',
    'set_general_close' => 'Использовать закрытый режим работы сайта',
    'set_general_reg_invite' => 'Регистрация доступна только по приглашениям',
    'set_general_reg_activation' => 'При регистрации использовать активацию пользователей',

    'set_title_lang' => 'Языки',
    'set_lang_current' => 'Основной язык',
    'set_lang_default' => 'Язык по умолчанию (если нет фразы на текущем языке)',
    'set_lang_used' => 'Используемые языки',
    'set_lang_avail' => 'Доступные языки',

    'activate_language' => 'Активировать язык',
    'compare_language' => 'Сравнить языковые файлы',
    'languages_select' => 'Выбрать язык',
    'languages_activate' => 'Активировать',
    'languages_compare' => 'Сравнить',
    'languages_default' => 'По умолчанию',
    'languages_activate_label' => 'Выберите язык для активации',
    'languages_activate_notice' => 'Выберите язык для активации из списка установленных языков',
    'language_not_found' => 'Язык не определен',
    'current_language' => 'Текущий язык',
    'selected_language' => 'Выбран язык',

    'set_section_edit' => 'Редактирование',
    'set_view_tinymce' => 'Использовать визуальный редактор TinyMCE',
    'set_view_noindex' => '"Прятать" ссылки в тексте статей от поисковиков',
    'set_view_img_resize_width' => 'До какого размера по ширине ужимать картинки в тексте',
    'set_view_img_max_width' => 'Максимальная ширина загружаемых изображений',
    'set_view_img_max_height' => 'Максимальная высота загружаемых изображений',
    'set_topic_max_height' => 'Максимальное количество символов в статье',
    'set_topic_tag_required' => 'Теги к статье обязательны',

    'set_section_sys_cookie'=>'Куки и сессии',
    'set_sys_cookie_host'=>'Хост для установки куков',
    'set_sys_cookie_path'=>'Путь для установки куков',
    'set_sys_session_standart'=>'Использовать стандартный механизм сессий',
    'set_sys_session_name'=>'Имя сессии',
    'set_sys_session_timeout'=>'Тайм-аут сессии в секундах',
    'set_sys_session_host'=>'Хост сессии в куках',
    'set_sys_session_path'=>'Путь сессии в куках',

    'set_section_sys_mail'=>'Настройки почтовых отправлений',
    'set_sys_mail_type'=>'Какой тип отправки использовать',
    'set_sys_mail_from_email'=>'Адрес с которого отправляются все уведомления',
    'set_sys_mail_from_name'=>'Имя отправителя, от которого отправляются все уведомления',
    'set_sys_mail_charset'=>'Какую кодировку использовать в письмах',
    'set_sys_mail_smtp_host'=>'Настройки SMTP - хост',
    'set_sys_mail_smtp_port'=>'Настройки SMTP - порт',
    'set_sys_mail_smtp_user'=>'Настройки SMTP - пользователь',
    'set_sys_mail_smtp_password'=>'Настройки SMTP - пароль',
    'set_sys_mail_smtp_auth'=>'Использовать авторизацию при отправке',
    'set_sys_mail_include_comment'=>'Включает в уведомление о новых комментах текст коммента',
    'set_sys_mail_include_talk'=>'Включает в уведомление о новых личных сообщениях текст сообщения',

    'set_section_sys_logs' => 'Настройки логгирования (журналов)',
    'set_sys_logs_sql_query' => 'Включить логгирование всех SQL-запросов',
    'set_sys_logs_sql_query_file' => 'Файл журнала SQL-запросов',
    'set_sys_logs_sql_error' => 'Включить логгирование ошибочных SQL-запросов',
    'set_sys_logs_sql_error_file' => 'Файл журнала ошибочных SQL-запросов',
    'set_sys_logs_profiler' => 'Включить профилирование процессов',
    'set_sys_logs_profiler_file' => 'Файл журнала профилирования процессов',
    'set_sys_logs_cron_file' => 'Файл журнала запуска крон-процессов',

    'set_section_css' => 'Настройки обработки CSS-файлов',
    'set_csscompress_merge' => 'Объединять CSS-файлы',
    'set_csscompress_merge_notice' => 'CSS-файлы будут объединяться для ускорения загрузки',
    'set_csscompress_use' => 'Использовать сжатие CSS',
    'set_csscompress_use_notice' => 'Сжатие используется только в активированном режиме слияния CSS-файлов',
    'set_csscompress_force' => 'Принудительно обрабатывать CSS',
    'set_csscompress_force_notice' => 'Если заданно слияние CSS-файлов, то оно выполняется, даже если результирующий файл есть',

    'set_section_js' => 'Настройки обработки js-файлов',
    'set_jscompress_merge' => 'Объединять js-файлы',
    'set_jscompress_merge_notice' => 'js-файлы будут объединяться для ускорения загрузки',
    'set_jscompress_use' => 'Использовать сжатие javascript',
    'set_jscompress_use_notice' => 'Сжатие используется только в активированном режиме слияния js-файлов',
    'set_jscompress_force' => 'Принудительно обрабатывать javascript',
    'set_jscompress_force_notice' => 'Если заданно слияние js-файлов, то оно выполняется, даже если результирующий файл есть',

    'set_section_acl' => 'Настройки контроля доступа',
    'set_acl_create_blog_rating' => 'Порог рейтинга, при котором юзер может создать коллективный блог',
    'set_acl_create_comment_rating' => 'Порог рейтинга, при котором юзер может добавлять комментарии',
    'set_acl_create_comment_limit_time' => 'Время (сек) между постингом комментариев, если 0 то ограничение не работает',
    'set_acl_create_comment_limit_time_rating' => 'Рейтинг, выше которого перестаёт действовать ограничение по времени на постинг комментариев',
    'set_acl_create_topic_limit_time' => 'Время (сек) между созданием записей, если 0 то ограничение не работает',
    'set_acl_create_topic_limit_time_rating' => 'Рейтинг, выше которого перестаёт действовать ограничение по времени на создание записей',
    'set_acl_create_talk_limit_time' => 'Время (сек) между отправкой внутренней почты, если 0 то ограничение не работает',
    'set_acl_create_talk_limit_time_rating' => 'Рейтинг, выше которого перестаёт действовать ограничение по времени на отправку внутренней почты',
    'set_acl_create_talk_comment_limit_time' => 'Время (сек) между отправкой внутренней почты',
    'set_acl_create_talk_comment_limit_time_rating' => 'Рейтинг, выше которого перестаёт действовать ограничение по времени на отправку внутренней почты',
    'set_acl_vote_blog_rating' => 'Порог рейтинга, при котором юзер может голосовать за блог',
    'set_acl_vote_topic_rating' => 'Порог рейтинга, при котором юзер может голосовать за статью',
    'set_acl_vote_comment_rating' => 'Порог рейтинга, при котором юзер может голосовать за комментарии',
    'set_acl_vote_user_rating' => 'Порог рейтинга, при котором юзер может голосовать за пользователя',
    'set_acl_vote_topic_limit_time' => 'Ограничение времени голосования за статью (сек)',
    'set_acl_vote_comment_limit_time' => 'Ограничение времени голосования за комментарий (сек)',

    /* SKINS */
    'skins_title' => 'Оформление (скины)',
    'active_skin' => 'Активный скин',
    'available_skins' => 'Доступные скины',
    'skin_settings' => 'Настройки скина',
    'skin_themes' => 'Темы',

    /* WIDGETS */
    'widgets_title' => 'Виджеты',
    'menu_widgets' => 'Виджеты',
    'widget_edit_title' => 'Редактирование виджета',

    'widget_name' => 'Виджет',
    'widget_plugin' => 'Плагин',
    'widget_priority' => 'Приоритет',
    'widget_group' => 'Группа (местоположение)',

    'widget_display' => 'Когда показывать',
    'widget_display_alwyas' => 'Всегда',
    'widget_display_period' => 'В период',
    'widget_display_from' => ' с ',
    'widget_display_upto' => ' по ',

    'widget_showto' => 'Кому показывать',
    'widget_showto_all' => 'Всем посетителям',
    'widget_showto_users' => 'Авторизованным',
    'widget_showto_admins' => 'Администраторам',

    'widget_active' => 'Включен',
    'widget_turn_on' => 'Включить виджет',
    'widget_turn_off' => 'Отключить виджет',

    /* PLUGINS */
    'plugins_title' => 'Управление плагинами',
    'all_plugins' => 'Все плагины',
    'active_plugins' => 'Активные плагины',
    'inactive_plugins' => 'Неактивные плагины',

    'plugin_file_not_found' => 'Файл плагина <b>%%file%%</b> не найден',
    'plugin_havenot_getversion_method' => 'Требуемый плагин <b>%%plugin%%</b> не возвращает номер версии (нет метода <b>GetVersion()</b>)',
    'plugin_activation_reqversion_error_eq' => 'Для работы плагина необходим активированный плагин <b>%%plugin%%</b> версии <b>%%version%%</b>',
    'plugin_activation_reqversion_error_ge' => 'Для работы плагина необходим активированный плагин <b>%%plugin%%</b> версии не ниже <b>%%version%%</b>',
    'plugin_activation_reqversion_error_gt' => 'Для работы плагина необходим активированный плагин <b>%%plugin%%</b> версии выше <b>%%version%%</b>',
    'plugin_activation_reqversion_error_le' => 'Для работы плагина необходим активированный плагин <b>%%plugin%%</b> версии не выше <b>%%version%%</b>',
    'plugin_activation_reqversion_error_lt' => 'Для работы плагина необходим активированный плагин <b>%%plugin%%</b> версии ниже <b>%%version%%</b>',

    'plugin_activation_error_php' => 'Для работы плагина необходима версии PHP не ниже <b>%%version%%</b>',

    'plugin_priority_notice' => 'Плагины будут загружаться в том порядке, в котором они выводятся в таблице. Вы можете изменить порядок загрузки плагинов, используя стрелки в правом крайнем столбце',
    'plugin_priority_up' => 'Увеличить приоритет',
    'plugin_priority_down' => 'Уменьшить приоритет',

    'plugin_name' => 'Название',
    'plugin_author' => 'Автор',
    'plugin_version' => 'Версия',
    'plugin_action' => '',
    'plugin_activate' => 'Активировать',
    'plugin_deactivate' => 'Деактивировать',
    'plugin_settings' => 'Настройки',
    'plugin_unknown_action' => 'Указано неизвестное действие',
    'plugin_activation_overlap' => 'Конфликт с активированным плагином. Ресурс %%resource%% переопределен на %%delegate%% плагином %%plugin%%.',
    'plugin_activation_overlap_inherit' => 'Конфликт с активированным плагином. Ресурс %%resource%% используется как наследник в плагине %%plugin%%.',
    'plugin_activation_file_not_found' => 'Файл плагина не найден',
    'plugin_activation_file_write_error' => 'Файл плагина не доступен для записи',
    'plugin_activation_version_error' => 'Для работы плагина необходима Alto CMS версии не ниже %%version%%',
    'plugin_activation_requires_error' => 'Для работы этого плагина необходим активированный плагин <b>%%plugin%%</b>',

    'plugin_submit_delete' => 'Удалить плагины',
    'plugin_delete_confirm' => 'Вы уверены, что желаете удалить указанные плагины?',
    'plugin_need_select_for_delete' => 'Выберите плагины для удаления',

    'plugin_load' => 'Загрузить плагин',
    'plugin_added_ok' => 'Плагин был успешно добавлен в список неактивных',
    'plugin_added_err' => 'Ошибка копирования плагина в общую папку плагинов',

    /* USERFIELDS */
    'user_fields_title' => 'Поля контактов пользователей',
    'user_field_admin_title_add' => 'Добавить поле',
    'user_field_admin_title_edit' => 'Изменить поле',
    'user_field_add' => 'Добавить',
    'user_field_cancel' => 'Отмена',
    'user_field_added' => 'Поле успешно добавлено',
    'user_field_update' => 'Изменить',
    'user_field_updated' => 'Поле успешно изменено',
    'user_field_delete' => 'Удалить',
    'user_field_delete_confirm' => 'Удалить поле?',
    'user_field_deleted' => 'Поле удалено',
    'userfield_form_name' => 'Имя',
    'userfield_form_type' => 'Тип',
    'userfield_form_title' => 'Заголовок',
    'userfield_form_pattern' => 'Шаблон (значение подставляется в токен {*})',
    'user_field_error_add_no_name' => 'Необходимо указать название поля',
    'user_field_error_add_no_title' => 'Необходимо указать заголовок поля',
    'user_field_error_name_exists' => 'Поле с таким именем уже существует',

    /* TOOLS */
    'reset_title' => 'Сброс данных',
    'menu_reset_cache' => 'Сброс кеша',
    'menu_reset_config' => 'Сброс конфигурации',

    'cache_clear_data' => 'Очистка кеша данных',
    'cache_clear_data_notice' => 'Сброс кеш-хранилища данных',
    'cache_clear_assets' => 'Очистка кеша js- и css-файлов',
    'cache_clear_assets_notice' => 'Сброс кеш-хранилища js- и css-файлов',
    'cache_clear_smarty' => 'Очистка кеша Smarty',
    'cache_clear_smarty_notice' => 'Сброс кеш-хранилища компилированных файлов Smarty',

    'cache_clean' => 'Сброс кеша',
    'cache_clean_notice' => 'Установите, если хотите сбросить кеш',

    'reset_config_data' => 'Сброс измененных параметров конфигурации',
    'reset_config_data_notice' => 'Все параметры, которые Вы меняли через Админпанель, будут сброшены в первоначальное значение, т.е. те, что заданны в конфигурационных файлах',

    'action_for_admin_only' => 'Это действие доступно только администраторам',

    'cannot_clear_dir' => 'Невозможно очистить папку %%dir%%. Рекомендуется сделать это вручную',

    'comments_tree_title' => 'Перестроение дерева комментариев',
    'comments_tree_message' => 'Будет перестроено все дерево комментариев. Внимание! Операция может занять длительное время!',
    'comments_tree_disabled' => 'Это действие недоступно',
    'comments_tree_restored' => 'Дерево комментариев перестроенно',

    'recalcfavourites_title' => 'Пересчет счетчиков избранных',
    'recalcfavourites_message' => 'Будут пересчитаны счетчки избранных статей и комментариев для всех пользователей.<br><br> Внимание! Операция может занять длительное время!',
    'favourites_recalculated' => 'Счетчики избранных пересчитаны',

    'recalcvotes_title' => 'Пересчет счетчиков голосования',
    'recalcvotes_message' => 'Будут пересчитаны счетчки голосования.<br><br> Внимание! Операция может занять длительное время!',
    'votes_recalculated' => 'Счетчики голосований пересчитаны',

    'recalctopics_title' => 'Пересчет количества статей в блогах',
    'recalctopics_message' => 'Будет пересчитано количество статей во всех блогах.<br><br> Внимание! Операция может занять длительное время!',
    'topics_recalculated' => 'Количество статей пересчитанно',

    'recalcblograting_title' => 'Пересчет рейтинга блогов',
    'recalcblograting_message' => 'Будет пересчитан рейтинг блогов.<br><br> Внимание! Операция может занять длительное время!',
    'blograting_recalculated' => 'Рейтинг блогов пересчитан',


    'checkdb_title' => 'Контроль базы данных',
    'checkdb_deleted_blogs' => 'Проверка удаленных блогов',
    'checkdb_deleted_topics' => 'Проверка удаленных статей',
    'checkdb_blogs_joined' => 'Удаленные блоги, в которых состоят пользователи',
    'checkdb_blogs_comments_online' => 'Удаленные блоги с онлайн-комментариями',
    'checkdb_clear_unlinked_blogs' => 'Удалить связи',

    'checkdb_topics_comments_online' => 'Удаленные статьи с онлайн-комментариями',
    'checkdb_clear_unlinked_comments' => 'Удалить несвязанные комментарии',

    /* PAGES */
    'pages_title' => 'Управление статическими страницами',
    'pages_create' => 'Создание новой страницы',
    'pages_edit' => 'Редактирование страницы',
    'pages_create_parent_page' => 'Вложить в',
    'pages_create_parent_page_error' => 'Неверно выбрана страница для вложения',
    'pages_create_title' => 'Название',
    'pages_create_title_error' => 'Название страницы должно быть от 2 до 200 символов',
    'pages_create_url' => 'URL',
    'pages_create_url_error' => 'URL должен быть от 1 до 50 символов и только на латинице + цифры и знаки "-", "_"',
    'pages_create_url_error_bad' => 'URL должен отличаться от:',
    'pages_create_text' => 'Текст',
    'pages_create_text_error' => 'Текст страницы должен быть от 1 до 50000 символов',
    'pages_create_seo_keywords' => 'SEO keywords',
    'pages_create_seo_keywords_notice' => 'Ключевые слова для SEO-оптимизации',
    'pages_create_seo_description' => 'SEO description',
    'pages_create_seo_description_notice' => 'Описание для SEO-оптимизации',
    'pages_create_sort' => 'Сортировка',
    'pages_create_sort_notice' => 'Устанавливает сортировку при отображении',
    'pages_create_sort_error' => 'Сортировка должна быть числом',
    'pages_create_active' => 'Показывать страницу',
    'pages_create_auto_br' => 'Автоматические переносы строк',
    'pages_create_main' => 'Добавить в главное меню',
    'pages_create_submit_save' => 'сохранить',
    'pages_create_submit_save_ok' => 'Новая страница добавлена',
    'pages_create_submit_cancel' => 'отмена',
    'pages_edit_notfound' => 'Страница для редактирования не найдена',
    'pages_edit_submit_save_ok' => 'Страница обновлена',
    'pages_admin_title' => 'Название',
    'pages_admin_url' => 'URL',
    'pages_admin_active' => 'Активна',
    'pages_admin_main' => 'В главном меню',
    'pages_admin_sort_up' => 'Выше',
    'pages_admin_sort_down' => 'Ниже',
    'pages_admin_active_yes' => 'да',
    'pages_admin_active_no' => 'нет',
    'pages_admin_action' => 'Действие',
    'pages_admin_action_edit' => 'Редактировать',
    'pages_admin_action_delete' => 'Удалить страницу',
    'pages_admin_action_delete_ok' => 'Страница удалена',
    'pages_admin_action_delete_error' => 'Возникла ошибка при удалении страницы',
    'pages_admin_action_delete_message' => 'Эта страница будет удалена:',
    'pages_admin_action_delete_confirm' => 'Вы действительно хотите удалить эту страницу со всеми вложенными страницами?',

    'pages' => 'Статические страницы',
    'pages_new' => 'Новая страница',
    'pages_options' => 'Опции',
    'page_options_urls' => 'Зарезервированные URLs',
    'page_options_urls_notice' => 'Зарезервированные URLs (через запятую), которые нельзя использовать при создании новых страниц',

    'pages_list' => 'Все страницы',
    'pages_active' => 'Активные страницы',
    'pages_inactive' => 'Неактивные страницы',

    'menu_pages_new' => 'Новая',
    'menu_pages_options' => 'Опции',

    /*
     * Content types
     */
	'content_menu'=>'Типы контента',
	'content_add'=>'Добавить новый',
	'content_add_title'=>'Добавление нового типа контента',
	'content_edit_title'=>'Редактирование типа контента',
	'content_add_field_title'=>'Добавление нового поля',
	'content_edit_field_title'=>'Редактирование поля',
	'content_types_list'=>'Список типов контента',
	'content_add_additional'=>'Подключить',

	'content_title'=>'Название',
	'content_title_notice'=>'Например, <b>Обзор</b>',
	'content_title_decl'=>'Название во множественном числе',
	'content_title_decl_notice'=>'Например, <b>Обзоры</b>',
	'content_type_access'=>'Доступ на создание',
	'content_type_access_all'=>'Всем',
	'content_type_access_admin'=>'Только администратору',
	'content_type_access_role'=>'Только выбранным ролям(редактируются в плагине role)',
	'content_type_access_notice'=>'Выберите тип доступа на добавление к этому типу статьи',
	'content_url'=>'Служебный идентификатор',
	'content_url_notice'=>'Только латиница и подчеркивание. Например, <b>review</b>',

	'save_sort_success'=>'Сортировка успешно сохранена',


	/*
	 * Поля
	 */
	'content_field'=>'Поле',
	'content_fields'=>'Поля',
	'content_fields_added'=>'Добавленные поля',
	'content_add_field'=>'Добавить поле',
	'content_name'=>'Название',
	'content_description'=>'Описание',
	'content_type'=>'Тип',
	'content_values'=>'Значения (по одному на каждой строке)',

	'content_required'=>'Обязательное',
	'content_required_notice'=>'Обязательное для заполнения поле',

	'content_field_input'=>'Строковое поле',
	'content_field_textarea'=>'Текстовое поле ',
	'content_field_file'=>'Файл',
	'content_field_photoset'=>'Блок загрузки фото',
	'content_field_link'=>'Ссылка',
	'content_field_select'=>'Выпадающий список',
	'content_field_date'=>'Дата(календарь)',
	'content_field_map'=>'Карта',
	'content_field_daoobj'=>'Объекты каталогов DAO',
	'content_field_litepoll'=>'Блок опросов плагина LitePoll',
	'content_field_gallery'=>'Блок вставки альбомов плагина LsGallery',

	'content_field_input_notice'=>'Однострочное поле',
	'content_field_textarea_notice'=>'Многострочное поле с редактором ',
	'content_field_file_notice'=>'Поле для загрузки файла',
	'content_field_photoset_notice'=>'Подключится пакетный загрузчик фото(как в фотосете)',
	'content_field_link_notice'=>'URL',
	'content_field_select_notice'=>'Выпадающий список',
	'content_field_date_notice'=>'Дата(календарь)',
	'content_field_map_notice'=>'Карта',
	'content_field_daoobj_notice'=>'Объекты каталогов DAO',
	'content_field_litepoll_notice'=>'Блок опросов плагина LitePoll',
	'content_field_gallery_notice'=>'Блок вставки альбомов плагина LsGallery',

	'content_count_downloads'=>'Скачиваний',

	'content_delete_file'=>'Удалить файл',
	'content_file_rewrite'=>'будет перезаписан',
	'content_field_detele_confirm'=>'Вы действительно хотите удалить это поле?',

	'content_additional_photoset'=>'Фотосет',
	'content_additional_question'=>'Опрос',
	'content_additional_link'=>'Ссылка на оригинал',


	/*
	 * Администрирование
	 */
	'content_actions'=>'Действия',

	'content_status'=>'Состояние',
	'content_on'=>'активен',
	'content_off'=>'отключен',
	'content_turn_on'=>'включить',
	'content_turn_off'=>'выключить',

	'content_submit'=>'Сохранить',
	'content_save'=>'Сохранить',
	'content_edit'=>'Редактирование',
	'content_delete'=>'удалить',
	'content_standart'=>'стандартный',
	'content_for'=>'для',

	'content_by_type'=>'Топики по типу',
	'content_nocomments'=>'Нет комментариев',

	'content_topic_edit'=>'Редактирование статьи',

	'content_add_prefix'=>'Добавить',
	'content_afteradd'=>'Добавление дополнительных полей станет доступно после добавления нового типа',


	//ошибки
	'content_error_noallow_type'=>'Вам запрещено добавлять статьи данного типа',
	'content_type_title_error'=>'Поле название может быть от 2 до 200 символов',
	'content_type_title_decl_error'=>'Поле название(множ числа) может быть от 2 до 200 символов',
	'content_type_url_error'=>'Поле служебного названия (URL) может быть от 2 до 50 символов, только латиница, без пробелов. Также адрес не может совпадать с существующими адресами экшенов',

	'content_field_name_error'=>'Название поля должно быть от 2 до 100 символов',
	'content_field_description_error'=>'Описание поля должно быть от 2 до 200 символов',
	'content_field_type_error'=>'Неверный тип поля',
	'content_field_daoobj_error'=>'Ошибка в данных связи с объектом DAO',
	'content_download_file_error'=>'Ошибка при скачивании файла',


	//'text_length_error'=>'Поле %%name%% может быть длиной от '.Config::Get('plugin.topiccck.text_length_min').' до '.Config::Get('plugin.topiccck.text_length_max').' символов',



	'content_save_sort_success'=>'Сортировка сохранена',
	'content_success'=>'Новый тип успешно добавлен',
	'content_success_edit'=>'Успешно отредактировано',
	'content_success_fieldadd'=>'Поле добавлено',
	'content_success_fieldedit'=>'Поле успешно отредактировано',
	'content_success_fielddelete'=>'Поле успешно удалено',

	'content_dao_link_view_type'=>'Тип вывода при просмотре статьи',
	'content_dao_link_view_type_link'=>'Ссылками',
	'content_dao_link_view_type_obj'=>'Списком объектов в оформлении DAO',

	'content_role_topiccck'=>'Добавление статьи',

);

// EOF