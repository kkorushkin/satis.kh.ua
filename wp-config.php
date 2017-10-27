<?php
define('DB_NAME', 'ogsnfknl_water2');
define('DB_USER', 'ogsnfknl_kirill');
define('DB_PASSWORD', '31058102bcl');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
/**#@+
 * Уникальные ключи и соли для аутентификации.
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 * @since 2.6.0
 */
define('AUTH_KEY',         '}Kb5k8dFttVl_tuFM%1{E_6?pf-^n_=InS{Zrz=4%maX9RJ;(>+7@?]P]G*S;)+G');
define('SECURE_AUTH_KEY',  'q3H3{WnX%<0{@5DP<!1|cX8th71ud4R,Of{Qb&KxZV4-F^PugZ;AOkMxG3^mAI~?');
define('LOGGED_IN_KEY',    'H ML{?OkDjO-&}0MdYcL=7jT>c!{,#XVU>4{`*%@={:lNA7SBy@$&ADyF DWAK@>');
define('NONCE_KEY',        '5W#7l=U4b3^r;#?:(GD5JOX!M&Ecia[pb1zCB&[Rx?f{.>]x<Hy;=L(0v:TNtGLY');
define('AUTH_SALT',        '?;R/={:glk*m*4f6^JkK%}bcD^)MxX3wJ#Z6Gli1AG;e 7?m9#&pAS%`1=WP7alS');
define('SECURE_AUTH_SALT', '^ho3<Y(c^?}P9F]u wgYmflO?0Pl*EB=Y?z1UZz[DC$7*T]Gi`xey4|gBmt0{:K;');
define('LOGGED_IN_SALT',   'q8JLv[wlSp_co,)I4v6+2wI1Bz$1`h3-@B>tQqKP9c-G}6 ,S)4OY^^H2qk.]-Q5');
define('NONCE_SALT',       'sBXdgeoE9xinrAaZ9r8<3*_NN;v)f00C >R+q1B_bZWoFEp]e#^^;wdC2i`~7dN%');
$table_prefix  = 'wtr_';
/**
 * Для разработчиков: Режим отладки WordPress.
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * Информацию о других отладочных константах можно найти в Кодексе.
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
define( 'WPCF7_AUTOP', false );
