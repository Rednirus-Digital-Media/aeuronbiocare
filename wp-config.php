<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );
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
define( 'DB_NAME', 'aeuronbi_aeuron' );

/** Database username */
define( 'DB_USER', 'aeuronbi_aeuron' );

/** Database password */
define( 'DB_PASSWORD', '.&-xQJT+Uv*p' );

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
define( 'AUTH_KEY',         'fn9j2hxotcrsxxx8clkpoff2h0ge0odhaear0rg2pgifaii12phmrn56idrkxcux' );
define( 'SECURE_AUTH_KEY',  'rfo8zamzto4j8qwaxbkuwjykwtowftb939lykxekwb8hiyjwfhil7apwbsyb2esd' );
define( 'LOGGED_IN_KEY',    'nynkvmiyejtxamqtxcyxw009u3atjuisanyhvbsffsz1rgoljjsyeqconoqxuvxe' );
define( 'NONCE_KEY',        'dfwq5jz6pobjvahx0psr26kjhwiyi59azik65eaxkidc6rzpu4bqm8pfn3ytjmbi' );
define( 'AUTH_SALT',        'mwbdqpvbxbxzxyk4soutfo0otu0qjoyqlnhoqmmuofysbauo1cfbuhcekirivs3a' );
define( 'SECURE_AUTH_SALT', 'dpqlt1r8clgrmmoezwjlb8voeqqkbl7tm3qen2rmyiypyi1p0h71po2lg1xljqtz' );
define( 'LOGGED_IN_SALT',   '6ljbgzls5ab1cd0jm4tslwdotpe02oiala8y6jqflt8t3oxnkwzqiqyaoamadayd' );
define( 'NONCE_SALT',       'g9atb8scdkjyv8efufcwttul393udzqs6n7ry31ozwpb9flm43qkogcgfsuezcpb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpth_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
