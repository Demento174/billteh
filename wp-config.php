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
define( 'DB_NAME', 'billteh' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Ramza1990' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x-bMavX6o|SlY;1z$<o4ZnPh%?{N[]5I2,(?!4 N%z`bUhl$tzi$ZMXd&(ex8Y#Q' );
define( 'SECURE_AUTH_KEY',  '5NRm?^M%<hg81&:BO7[j&?V4W}vXt:c@P<l >f(q7qW&d872vo0|A[LW=X6ajM}{' );
define( 'LOGGED_IN_KEY',    'v4Zs:4)]ys>Q`siMyXK}aFi:RV[n8;?1qo}yV-FX!!FD[r.be0qY*L]$}{=F,U9&' );
define( 'NONCE_KEY',        'Fna*5_-92xg#75>w~5jxT Mxn_!u J1 ZOASB37$gPM)K9ALO>v<B?S5I8+>iQn]' );
define( 'AUTH_SALT',        's;g[T>Tt/u]T|#rQ84*Mzg1TZz@?1,5kY]T5tBW(VdrN| Ef/W~b=`9*)LF%r=(O' );
define( 'SECURE_AUTH_SALT', '6REWT$@^EYu,6uLGHzX-/OM?3X`WdfG;W&60qt+wwpk;;V?kh8.4Ey$MWS7$Hk^t' );
define( 'LOGGED_IN_SALT',   ')1b0ZuV5s%~%/WDtd^P0-vY!:JwEQUe-6uR*MpcvF<d>9NK4S ?Su_TJb@aXSSlU' );
define( 'NONCE_SALT',       'Q=Ek!E3HtCi!a?Fizh(X>_H5YR8Y:+_1J[[+z5`,VEiW9^4i@c?6|P5AD$qO[.%%' );

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