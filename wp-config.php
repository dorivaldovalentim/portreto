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
define( 'DB_NAME', 'portreto' );

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
define( 'AUTH_KEY',         'RU1o{0nh&[{mR7 PT|eQ4I`Z4E1+nQH79E WSV=v7p,_w%]I[V{WK1Rt(d.N^[Bf' );
define( 'SECURE_AUTH_KEY',  'KT!-RwscPLl`(cNH4CO:f7OtPXIaG4/7RN!fDDw1+Cc~D)e?[/$s/Jql<VzNvgNl' );
define( 'LOGGED_IN_KEY',    '^Qg{%[I53zOjUMDHPj,B|s<5&(75h8PjLJun4bm8]>bpFR$tz< >{E* VxSw:RcT' );
define( 'NONCE_KEY',        'I n[8XYM@&@ec;DsZ~FP75i/(W/:{;w5i5&^<Rk$u:v<<jznlf_K$sP(~wI9-/f:' );
define( 'AUTH_SALT',        '=a4$23G~y)!$P+gx/DqcW[x4Rn.2:`O|.SVF0j`NX9)6k7sR%GlnICUSs6P3Gp}y' );
define( 'SECURE_AUTH_SALT', 'Lf;hsKR@3] kt~hv7,RaKj{1KQA^EgkF7-<8ut2A .10.hegOkb.~a8x^..s~:UA' );
define( 'LOGGED_IN_SALT',   '1fN@uIo~%5*j(5GLvY6%U`.oq-x*KVE%WSe,SCe|6HhwwX>w7#K4U/n(lYec kOf' );
define( 'NONCE_SALT',       '1.eeL&&r*98r^*-k@WWk&I**ICKAGs0Uf )@NP^mmY>k5?=agnQr=E7Ew~w{8zxD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portreto_';

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
