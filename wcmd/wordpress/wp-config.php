<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dfedchuk5' );

/** Database username */
define( 'DB_USER', 'dfedchuk5' );

/** Database password */
define( 'DB_PASSWORD', '52&eQPpt#M77' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FbiJ!JYaAs6 >zDatFG$}6Vj=DACoYkB6%HtP9}lde7W(=R,ZHeL0<5..iy%K^RR' );
define( 'SECURE_AUTH_KEY',  'ijcumF^;f>!9^IhrV|f2aV[Ov:)F.BcRr&g 2D%AQX?*YRkqX`0r~<6YHG/j@^jB' );
define( 'LOGGED_IN_KEY',    'a&JWsvr(hU5};[@he=}|sc7[=L65c+If$%PEySwQ;nmj@`PK^p{7}eMHSyk#Zrhl' );
define( 'NONCE_KEY',        '/{JG[u@*/Mr0uh|f3dxdy|*R3UUAOJZDF&$jMAG0JaUx7~B18BjC)c-68M0yAfAp' );
define( 'AUTH_SALT',        'I9p@+X#(ES3].CeA<Z4=jXT8$OQ=P kSresX?2UQ*|V9R$moAp.GySAe$}^4z8.b' );
define( 'SECURE_AUTH_SALT', '`m?=*h{^|ft@6yKF ];NZ5ysulY(d2<Sw!4w,BJwcU)Vib2|5]d-]qh:u|rx[WQv' );
define( 'LOGGED_IN_SALT',   'pE,~aL&ZK0PvXi3g.<z9%?6*qQ`fq~(=(B`%A}]k]EOp)CmpAbt[QEQ+OkC;;,C.' );
define( 'NONCE_SALT',       ' T7K`AI(,d&X%[D#9u=;u~1}`5s`^Yl>unzz!gJ^nDYnHguSW}YR3Q]S1B7Jr]}w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wcmd_2238_a_wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
