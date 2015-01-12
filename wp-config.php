<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bunitedwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ENV', 'development');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3e<|Nw/i_aU@1.y0IY3kI]~8)z_<f7kjK,U:+^|}%(PS/oP|!N8i1f `[?an|7=L');
define('SECURE_AUTH_KEY',  's4c/KtCsYlj~;RcLprQ1,P(8Pz)=$p/[-Hd=8|29h4DTbnr[jjKF*+[D|Gz`)3[(');
define('LOGGED_IN_KEY',    '0;6|vW>kq}ef5i-|q]_$/@BBl5e?j|CYX=R/nK8:35;e!|/P)zP|{QT$tS~VBA!r');
define('NONCE_KEY',        '- <6o-w#Ql+l<n;ZED?@D@n~q;bQp)JM}x~/L?BqQE,l<}dSblBne^-t <)+rM;f');
define('AUTH_SALT',        '{$/9l1Pged30W1^ah`=+x9Bd(6FhzCbm[]}F3d1i3qE8`Xymsl|8XUVgNd3XHLmb');
define('SECURE_AUTH_SALT', '|fG^sT.f?o^]L- ?TNz>;^L.pjXp/,]S+A0$dG<~2olg{J-9rPQp{~y?_+5:-%<5');
define('LOGGED_IN_SALT',   '^fBu2]S###;]dW*v7;%s8xXMRcbOK.9oN:}a-6OB%f=CvrBEOamJ)Cq0dZopO}r#');
define('NONCE_SALT',       'PYShzzxdo7nZ!$<nZtin92~6@x5z+WpGob<%-4R9G*8kDZW&1:m55weG4wKo/XwE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
