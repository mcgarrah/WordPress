<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'akc_main_wp');

/** MySQL database username */
define('DB_USER', 'akcwpuser');

/** MySQL database password */
define('DB_PASSWORD', 'zki9FibFpoavWJKrmVQ7aQ==');

/** MySQL hostname */
define('DB_HOST', 'akc-tst-eos-db.akc.org');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0R*pct0@jTpE6hGZ?/pZ,C3h[cZi,-R$qBc0Q&<m|a`c*zAqnL2QD[h!9O2t~w_/');
define('SECURE_AUTH_KEY',  '*p@[S8NhKH%Ko`C;}aRd3A=TFm=xfS+$cNiA#*_aE?}/2`cclRMJ&.Z/G-2I)p4)');
define('LOGGED_IN_KEY',    'Xl:;B=K%4Husc}{]-C5M+=aaqa`mZ+/wdLq!&FiAMQ`sJAd`1Hs3Y&^8`g-_d0Hh');
define('NONCE_KEY',        '1ebwjwXn<Q/G`N-g+S-%B[EXYb.BdAUf/-5um1$2d^;TAHU1-@;hYr/UNi%>LeB}');
define('AUTH_SALT',        'tjN(b[K{QlG5{Ho84?y0tL-buT--.6!vm?MIJGH+VkM; <7CtvYMjR&CB&;*UIzc');
define('SECURE_AUTH_SALT', 'CPFNN&votYjQGr{%EMl7b%X`*PL`P=|]K::iQj,npcbA69yA9!m<J <zz+m2{%U:');
define('LOGGED_IN_SALT',   'j)eB<`S>OX0]i-t+ErLnep@Ss~Ak[I|plWmXQO8-]J-L<@+2C|I4iO5zpj6~qf;c');
define('NONCE_SALT',       'T&Tmw2?@ h~8wb:.Pm;6Hdm!$*OiY>waO[]kL)M1;U?++6tT1k&]mvl|Ho5kwHh)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
//$table_prefix  = 'wp_';
$table_prefix  = 'akc_wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
