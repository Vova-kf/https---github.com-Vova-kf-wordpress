<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ecoverde' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k`QpDawyo16-Sulr.t^k,#rdOgxT^H$wT?zBhe@im4w>ZmZrq;HjNQvPVn[2pcDW' );
define( 'SECURE_AUTH_KEY',  'Yb3UTwh^@{>@JT{!YWs[PL|@^KyYRKVw0?gW:^bP2ULg/0a=lO!o]Bl*kkDpkunT' );
define( 'LOGGED_IN_KEY',    'TO&.)v^,A~aUW^[-ZGp3e!uQ]ppQ7jI]i5on~:NOa SZ(&mimr^@!>vnnRNI^!kj' );
define( 'NONCE_KEY',        'f# 9{)_MZn*pJypfET$c] vOQ&PF6|9?Ms]u@A>O(J#ju79<QO^v2av|{)z3?&sM' );
define( 'AUTH_SALT',        ',[ARh+(WaOvnV:mB5-_>^R ^KB{mZo$o#_V.dpyx(.gBl[E/)9_?2d|+jil.%*u?' );
define( 'SECURE_AUTH_SALT', 'gn+-F-d^hK^02A*+R2DaT;m#Vv!k==~~r1:oQbO]<0H^g-|P$X4V=dk)[/c`~Vv1' );
define( 'LOGGED_IN_SALT',   '8Ocr::a-d`EO,#!~N80,2n0bTZf-%v{qz>aDGmbi4a;aoAcoq^+;KPXiKmA |a,B' );
define( 'NONCE_SALT',       '}39TODz{<QV3w?( C:l^OPpEo@7!p(E2 gv.%vXtv9AV]AzuvRM;2,.i>et);@rS' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
