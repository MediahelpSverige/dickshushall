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
define('DB_NAME', 'dicks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '>iW%5Q0j&(8I|J}r7U,mvZiJ+7`AR`I*9Li-8n]:ax$~E$~.* ,dm-|w#&cH^)V9');
define('SECURE_AUTH_KEY',  '-}YR8l9!+!w1&V`K$z)_422yMh$<Wf*8 6|Gzl.+&_x_39{V#hc6x`)R=Ui&wS9j');
define('LOGGED_IN_KEY',    'h+6W}R:iueHaD1WYrB{/{V]EX{vPyBE|-5vwsZzb<k7Cz,=NbsBaG#PK2X;5kL3;');
define('NONCE_KEY',        '6:|P^ ?emFc~*s;|::k4vpX>N6]L1i>UCWp(O.K trL2!G>V`UIfk+#78Kj_TV&K');
define('AUTH_SALT',        'Bm6@B^HPE1nE41q8@[-&@$N_o@ZYr83dg>(7yv]NLkCaI7#.-|6eGk8NW_xZ}wAa');
define('SECURE_AUTH_SALT', 'v:O4?_u*EN-SL?J%1B/E6zaz~Q)E/[-.$YtDym[?L>V`,i=W.DB>;D*a*#}+GU)2');
define('LOGGED_IN_SALT',   'RjEzZuuTU!8x>I_*}!n{/smQt;}eWGN<&a+uPW8T%+Z!(aK/$Y2 _jCxu{&{F!5U');
define('NONCE_SALT',       'zjv;`>6a9|s$.)x$Vfy|KnQhQ5]|KSx}c:0y*>fO|m5@K=.ZWYWzud-pi-&e}S2H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
