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
define( 'DB_NAME', 'kanopy_brands' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qQ6Jxs6S22pOhUr6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'SIrr59m~85Q^g7u8kdCkOIf*G?6I}W0rR:uh_cgt4IN~;&rzlJJY*AR3E4ER||]b');
define('SECURE_AUTH_KEY',  '^ur[=YMC!n)4Ms(3&1/W9&n[Va>Pviz)zdAJEvD/SYGasm-/[hnVdog+j<|*h8PG');
define('LOGGED_IN_KEY',    '9X[V? m?Q|{eP#1+N~j-5.vC-{.BVRE3cfBhu!W*EMXJo$)T/Rsc|0Lfb2qh+%Zo');
define('NONCE_KEY',        'oC.bVw{8#+!=v+P#itNde[AbTGimUyM-a)|pq:AxK]oNoxu%oyM2KQbzQ2cw]e=k');
define('AUTH_SALT',        '|^{EL0c4Ye(Rb{k DkVWQb<CgDJVEu!-$iWFJI$P..};&tY$8BbKLE1CH.:mU|jP');
define('SECURE_AUTH_SALT', '_lW3Qe|<k7=+[1]2?[8#aDY6C49&_f#WmgK++y}.X2F2oOMgx.:#Q(O`U0KO=h|-');
define('LOGGED_IN_SALT',   '-|?:4PsE-o3^[U<i4JhA$be))EW8S=F9?O4?.?J`.c[-U3!=YtD+is^(_|xvJ{gr');
define('NONCE_SALT',       'F}h(B+ePRT1X+%P-SP6Hb~~pOM<y#ezk#h_!#|-<Ho-wl@+dq%(_+CILr4$-RQRQ');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
