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
define( 'DB_NAME', 'platzigift' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '$;f(:6xAS$kn5QF~fSBK_6NNl,)0c%}v;{Q>%R#nRN.<ON%B]e[B)JE?1lmpU|Jp');
define('SECURE_AUTH_KEY',  'Kr0:1Fu<nBshL+5L7+nD)$Y52 +UPIBZ.!s,k)htguv PMixC/`-;KUTt0,hs8+#');
define('LOGGED_IN_KEY',    'j{>*O(nKE9diG;;t-{~$C+d{Jo5e7@BLbb%t/u9L$.-j44?y$AH.}Uw0t7`B~#z%');
define('NONCE_KEY',        '^#6uu-:#+glzyEhnq6/k+HLXyF;%J@>,LX|ymfuBgu9FL*od9pFBtP}FHio5Nl,X');
define('AUTH_SALT',        '`&-:D`%5.Vcj/qQ.@dVrhY)!C1XfzFJ,:S39Iqx^ZW!m-|en|AE95RWA2m2zX#+S');
define('SECURE_AUTH_SALT', 'srO*j|+mznE#8Tn/npEpK4DI#<}JaC+KV@^X~ze)(K^YJT,5)7,PGB3HDgSX<+Ng');
define('LOGGED_IN_SALT',   'j6naGh]rat<>?NO+B;WZ!{6-=j[ihY>hTK$oy6H{$Nt#QA-h*ch$}Naf`C$^m/ci');
define('NONCE_SALT',       'wLsE1U{@6{YR1x])UX6RHCIF+`}x;KXr:yc%AOPkQL,n97$c,r)-t=)?AewkYi4O');

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
