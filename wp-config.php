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
define('DB_NAME', 'maximova');

/** Имя пользователя MySQL */
define('DB_USER', 'maximova');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'V2szBkCeXoshUEeR');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y|lJbUP uRryL8!kg~clC8#o<bIQh@L&&|WMkvh6&P2;)BsM5Nguqzuw!T_AO.XL');
define('SECURE_AUTH_KEY',  '`FQzhF3[rE2nUpdfEr+?r!_jbjSR^9.;c8NP1S(jLNIBWJe09Zi73q, ZrgSt4*S');
define('LOGGED_IN_KEY',    'nYW*C7{(WXo|rs~>|uTdndy0wyiz2`IOu`*S9vpAuk`,fKng#1dx*6,%RKodf_7S');
define('NONCE_KEY',        'x9a|{IW8rlQmQ0WCdf0IoAe#v8ymjqE5Q(|e?[A2*/6]~u565/VE3jr9W:&GNBfl');
define('AUTH_SALT',        'P8M|.$oDfl3w*pR*8_O+YQ)3(T:SdLB8R/n<`H tK/2PQO@hF[<I@!zQGnZ+p=MI');
define('SECURE_AUTH_SALT', 'GAA}*+i08m_z$ENpZGJJ,Cd>cDWl:9]mue^AEhrMr3cxl8g9R!bO9g]O,lXDM~F?');
define('LOGGED_IN_SALT',   '|%AY#&:7&K20BP/Bhq0v+e.ZbMDJm6xpl,kgdtN|nKEp9$}T3};zoI$$&=F|,4#0');
define('NONCE_SALT',       'gsm!k=`+ @B(48Attq_WTecf9L0c2ENo_H];U@AZJ!4AzTjpMJE;Msb.Ujtw&5n8');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
