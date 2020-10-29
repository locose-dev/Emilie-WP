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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Dimensi0n!' );

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
define( 'AUTH_KEY',         'QsoR?msSE2iECP~SPV)[U[i=D)|a5PECTT{+ciHtvJhF!&7,i3fXSkFxf@)kS((x' );
define( 'SECURE_AUTH_KEY',  '6#XV*gnzsQd/94cL ,{2~@C2?tKhV>(hK~8&FYU**pUWGO8&?c(SqWq+TP9Zrm1;' );
define( 'LOGGED_IN_KEY',    'b8zna2QUv1kU+KTqt7!g@I@&]E%8-nSxg_>2?l%%?E>Vdu8LY)$1r=te)vzoLq/D' );
define( 'NONCE_KEY',        'OkF;s3Hb|Dq:lTL[Tlu^[9H^GWN8`fjpWeQ0R;7x~*`S<j4^ o@4=*wrZO%E4k6t' );
define( 'AUTH_SALT',        'luA5tY^u,q1#aIn)OOlYdK4!ZKBa4Zi~6C2e[m_Wq=wa/x|3jz]d]|:%2?hF^f(p' );
define( 'SECURE_AUTH_SALT', '#~&*cY:KKNw?P. fxHYozUo7`Q)e*X1?=P&RV-21>x1+d;xIGy{=gucS-!X?T@9T' );
define( 'LOGGED_IN_SALT',   '4)V.aR3TT;0^(#fy<r$xO;@*!AG.Ojb+)Z&u{2,IDnSHTv N!]TjBX 5#BL[:lbP' );
define( 'NONCE_SALT',       'lBuJE>Ubv9Gb:$EW$PH s!:gP.OvTPf$%ucqEGsX[e[DpU a@=#k~%!zP=gX]P%>' );

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

