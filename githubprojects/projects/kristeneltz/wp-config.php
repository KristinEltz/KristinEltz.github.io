<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'u0769198_default' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u0769198_default' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '_gO8PuCm' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/** SSl */
define( 'FORCE_SSL_ADMIN', true );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dRf~V0xf 2SqP1)BD&._8t Ag#4Pl7Gi#m]X<_+/|~37)degVrJU5nq+5z;O?/<^' );
define( 'SECURE_AUTH_KEY',  'Hn!e 6_1nxBWYNVPyX:u>{rh0%8)_0@[%[$I{?^m?C*#1_2Nj~ih <=ozKBWi?!b' );
define( 'LOGGED_IN_KEY',    'nq@d>+!iEI*TN)DmXpcYmkPzFPKNP2=!n?5Tdx`6nTXx!c7nfKAtKXn$Lv(_uxjj' );
define( 'NONCE_KEY',        ')kV`^)DB]9gRZT-l<UD9pA6VJbKr6SnCcB<ImE>,&Ny[K*ajd42 %lRCNQl?.iv:' );
define( 'AUTH_SALT',        'g wKy&{%>YG+,or|2r 6$P0|!Mdn-!&h:r/hec4T(o;9yd[w~~rx.+kA=WXC%W_X' );
define( 'SECURE_AUTH_SALT', 'aiomc!x67d^y2ZlVJA[]n>{.J.AP<:UBhEbs7U3}T`EaPgJ:K/kV+h2>7,p00xlb' );
define( 'LOGGED_IN_SALT',   ':UJFZdjxn-&(FJ,Cvv-Vs{P;4,tSHN<T9^Tv|1R4*.ARavY:jdH6NoLGb:qIF?BY' );
define( 'NONCE_SALT',       ')IO@)FwsLUe3i$sW;L+7zO05NXucpeJeW;xD%,Y OugYj2$$y`FR*3O;w#>^0h?l' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
