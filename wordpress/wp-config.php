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
define('DB_NAME', 'keepitsimple');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'KM] %e4B|,>k><%@nl|J5 SNPl<7X#Zf~U3mij^0UzP24^~r}U&kHY)%A(7YLa-H');
define('SECURE_AUTH_KEY',  'dZ]` oFBf1X(y>_/pHxcv8&K53dZ,U@d$3sB>Kk$i7~gl[aV<PlBFn7oiob2h<o-');
define('LOGGED_IN_KEY',    '+~AQ,lQ^9FwiZKxdDwVbWMST)8RAV|,j^2G(:8.29Nud+bd5KgRWx*hAf<c Fkb0');
define('NONCE_KEY',        'kGE<C,`RLLdEGyT^??G[R,C+NsL^7_ZcBbDS~(El/t`1SOO~Dgph} YUsfPA~AE;');
define('AUTH_SALT',        'cA Sa)2poqiyW8)$IesnfByDO7q0B^5:/L[rSRN-Q@G~|0q3xK&bQO{A&SR|UCO1');
define('SECURE_AUTH_SALT', '< @m>ZN)*=*^}-?g(6xAg+Y(.9C!E5&>2go}6}<2M^@4}-!]uje_^J/I?KI-CZI;');
define('LOGGED_IN_SALT',   '6=(Musaj${3rse6a;yxa575.B~Ac0O&HhRPDg]V&x6eas=22`B?Ac~_4AhN[3`M9');
define('NONCE_SALT',       '81%t,-?iFG9:^.%tX]9`-M03RJl(2o^0xR2slkKptiWnSUlbHhp8KC+qNQ=SC~}>');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTOMATIC_UPDATER_DISABLED', true);
