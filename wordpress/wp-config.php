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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Zx-Rqsb1g. ]E5lo>9yLd4Oyf#pl38L0~[u%^76o8{V5`^($=%?-,:8L&Qsy6?{&' );
define( 'SECURE_AUTH_KEY',  'y1oSN0b$TL$M&q:ih/bNVz@Q/rx~t/jEMVoBc9N{&*p@JeC@*l,`HXyYj%Jx^Ed@' );
define( 'LOGGED_IN_KEY',    'W!i8OsS$J*4UT:y?xA%H_-rT<>!g2r7#451aaeBugp^Jal`M;%7VGieG9uw-yUvL' );
define( 'NONCE_KEY',        '9IabItaK:G^B%9P)E{(,{z/d[;sn@jvGMQZ#i{-yj!HCOQGr-ZGl2W718q0iujyY' );
define( 'AUTH_SALT',        ';Dtm}[|:y!47w:J{+TAm2l`]:kIf^uoA:$C@B*~K:8MY`4k}DY,vj`S-3wuYCRl<' );
define( 'SECURE_AUTH_SALT', '~gu/aJuauc]kDHX84GABMD:-hyI=KGYnB6q-Y8Vx<)QA4o>w2@<-*u7Y:z:rWrio' );
define( 'LOGGED_IN_SALT',   'M)$iV ~{@@Fom+pDyvKtBrkG7Px#D|1=xA=0a%mcK)fBHvITpUu^+|iW2zD1Wt?M' );
define( 'NONCE_SALT',       'X9/PN3O,1~XRW*l*LH|FPwPyo-S[}Rb:[xdIo8$J*LD3u7;WV-k??&kYF~c^SLfe' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
