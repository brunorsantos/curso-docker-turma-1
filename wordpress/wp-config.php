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
define('DB_NAME', 'wpdocker');

/** MySQL database username */
define('DB_USER', 'wpdocker');

/** MySQL database password */
define('DB_PASSWORD', 'wpdocker');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'A/_f<|3+@@@ JJi5_|E$=Y3w9<_$@ik-^Jt^Fx{*K$ZaQ!#F*YEP>&dnIwb3i^9h');
define('SECURE_AUTH_KEY',  'g<&6,X06J,,?h|W;aXmi45#QgET&MZ?P|B|D|Pf>)nhJ`4;2|d)eyYy2V=`T}:o5');
define('LOGGED_IN_KEY',    'Ge[-vV*I-{Q`$~Ig7{qCc/6J 2,VWCYhh4)lqmdlT:(:<yl-)[?]G|`$:|2#13{ ');
define('NONCE_KEY',        '@y#k{-:y`~ kw3#YX#RoyEr3A>+r>y(^M*>au~R;`iW6}!CF+v/_U>nnnElWCzbk');
define('AUTH_SALT',        '3efE&(q< WrZ59IFX^$Es%tj/|Ph<Ln}M-1RSq-UJJd$e5kTb@m)<57_p`jXASlv');
define('SECURE_AUTH_SALT', 'Qenqt;GxV^jJ&#5(*%`c3HW9/1DGQWoS}tb_M,rXM_gB0X?N?lw%&M>}6(24`%;o');
define('LOGGED_IN_SALT',   '.2d3Q*L--F[lDYw6YU~A45(m[89w6]_]_N`Ov_LM5dXdYVSn[!RKGf*8lbpR$KJq');
define('NONCE_SALT',       '~aZ}H!pUb@!6 (w^&w0+fFHD#D$~0u)Qn~,MOVlQCcpz^vXf6JU|m+h/|NP8yFL`');

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
