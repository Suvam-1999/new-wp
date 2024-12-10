<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'redhat' );

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
define( 'AUTH_KEY',         'KfE8RQ*AzkJ&n4Mog|SesfONVzY&WS)3_<,sakJ#aVF)4dK}=Dz*npcH2lncVB+Z' );
define( 'SECURE_AUTH_KEY',  'r(c]ZWEFAnwu+/NUa%PH5Nr;#pw6C1WwmUoVaSlQG5*pzGl5{+(P>BOcHcGHb|U=' );
define( 'LOGGED_IN_KEY',    'g%8BWy/|6VX/OH]Ww!}9[APq>9~J-S^94t~YO_hD6/!NvRo/6;LUur?0|x&?} Yh' );
define( 'NONCE_KEY',        '_);B/vdxM.K|NlucCM! c<:kdJUI@nllKvHtEF%B|rNa!a*)N7oa2nxtq`|,Do~0' );
define( 'AUTH_SALT',        '2w6Gb)Bd!=i:Vdbvjb#-S<B%0!#lg<IG,8_mWeT@]yO6o(-%JzR#j%wkYmiC;jQ@' );
define( 'SECURE_AUTH_SALT', '$^[n4N0;|e,JQw5=#:CBs6,fk3)[_4>!94Y5TfkqUzt.yH#<WubCoJS&5{fo4~7|' );
define( 'LOGGED_IN_SALT',   'Y%GF?lMi</IvQO/!5JK q_rQ-y>RE6fj|6aq0o%@EI3!~[W3WFP|.ngtYH^;yC|A' );
define( 'NONCE_SALT',       '1x<1.aS>i+bj@)!Yy$94s?QMS{4=$U)H3q*>V/=Lt)yzpO>3-HswCj;DT7ht (*Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wptbl';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
