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
define('DB_NAME', 'deskera_2');

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
define('AUTH_KEY',         'Vz9Wr`H,Xo^PWIm.]vb=sOpT.ymT08*7q`J4%1THgo`VEvfs<CR%nd0.<rvlPw g');
define('SECURE_AUTH_KEY',  ' LYor~c^m{%~OHE>Haa~?3w#]@3n(/Evh=c)KpJ!lm~.khK)wj?auSGYedh,]X$I');
define('LOGGED_IN_KEY',    'ewWS+*]k~t:Ep;h)! R{Fvr?9x<okh,H`^:@^|OC`rs -9Lb{5(fV$o%$3B@`]Q@');
define('NONCE_KEY',        'kLY3%7&-H Gw8H)B6Q4QL#$&RWE1|O[w&z6Gfu7[A6y@,q~~tP)l<y5JdL{rthz&');
define('AUTH_SALT',        '!~u#. Rqe^O#xq0`d<8J0RMy2c:KLzafPW`H_X~K9m;1#S;r|K(%Ul2{t&Cv+-y2');
define('SECURE_AUTH_SALT', 'X8`UsujEM2v&~h 63^w{MS^$#Ze)FNmG`F(n=mH7xv`FxUMr7`r0gUhPolyNkNwA');
define('LOGGED_IN_SALT',   ';9S)P|/+M*EKX;tD4/~lIZ/EGy(eY:E;,^;Gqa`btH%BM&eqXIQi>%s*N`~2M,MX');
define('NONCE_SALT',       '!i,=~[n^v^_,3WA(uYI&V(r>szPI1!;y$q{F[Fa@Nwc_$2`j[22q!CM1fg OH<0Y');

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
