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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themewoo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A2o_xID%UN3E5:wQwqY8QhRe}+YBJET.Z?dfm ;soWI0{J$Hc(/3P`8#HjB{6M_N' );
define( 'SECURE_AUTH_KEY',  'Bf1*.0x(-g-0CH#UdfE-GR:`^!Tc h*2)|rz%,xz8O,_.`z>?8weh |QpDR=E21{' );
define( 'LOGGED_IN_KEY',    'm]0=2#UV2)h<GT^Xb;?Pexe|B3C=}yCkYvYTDpzk5`4X62Qu]vyg8GVTsr&1!Bcw' );
define( 'NONCE_KEY',        '7)h^$[ar=vU<0PZ qvhX&OBHTGxbLP7EYL#8LYQuus}-`qi(, MyCs1>|5j(~5p}' );
define( 'AUTH_SALT',        'F~i#4@GD]WUuxjxy*H>ROswm4zyLtt7Q41sL/Bqv}5f>JgSR>Y7nh*S,hu;)?Tdz' );
define( 'SECURE_AUTH_SALT', '(I E8?1bd/8sJ>hJ3CZ[7{wi]={E?(<$vp%ou)$X5iAC<R%hr_6w*G[9:8]ckLlN' );
define( 'LOGGED_IN_SALT',   '~s~S(;5yc`d!iv{G;b7*a]^XcjUjj*;j=UMd|S8G[rsUQyA=Yvf5 >Q;~dxvT +6' );
define( 'NONCE_SALT',       'NQ~d]pnW!gJt_2K_LGYfgpS/?0%hoe/kh(<Pw)),Wh )}vOvPF9AzYOhL,YS`tIA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
