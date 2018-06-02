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
define('DB_NAME', 'appell');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ORN-lDOs_7]*+]u):2]{,o<ip>R&m2%gNKn:g: -15e|<{.r@l-vk>bEIE6qqfVA');
define('SECURE_AUTH_KEY',  'JMI96|eqsz<ph =j^>R/ARUK}(u@ZWZ|PIP^MSM=Xd-=pGx!nov;ALleAkI@+sR1');
define('LOGGED_IN_KEY',    'mr2uI?HccxvRE,R`k`.|D;.QA79Isi!UmKv<a`zK9UHakIwZz~<YT-N~L9>w~QE-');
define('NONCE_KEY',        '8IP.[w@sn!$m[QC%YUg/UIs#DXJhXo;R[=RTt8{:C0^(KNn ;1cNt/Bk/][h&B7x');
define('AUTH_SALT',        ',IA.HhNXgv/&Oc^Sskgxi:U]LQfp%[3oh,sQl0XUd/3IoojL*I2+k.iEc5V{izMV');
define('SECURE_AUTH_SALT', 'RBLJo)>?<&ge (*$^^@**p=A@ozFs*)*{}P}ou-GEK@eKvQ4a`N6-CaViit<),p.');
define('LOGGED_IN_SALT',   '2V8n3,THmpY}Yi^gx&!^QJ<1L^?=,j]{)Qr$7?;b6t4@$A=S)^ITMglhU^y}tY4:');
define('NONCE_SALT',       'Jx*-/F<@Lw6) N_3bwa.V|!Da3kix].CGAw3/0>8ukX<yr{r%SwZy7sRx$veU2Yz');

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
