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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SbPw+2mSgREHEtvFostAraxU+ZAP8cMNoEquaVASI8CWbdi0Lw1tpMKVIMlO+InvcHkrElTDmQK4taayE7vDBg==');
define('SECURE_AUTH_KEY',  'Ln8zPVTcnsIwSBqhNsrmQWnHOtlfbpLaMLmM9QBivZsrW7PiqvdMVOUwLeQjOfMKHhgbZ3zYxcvQQf6YCVPGhA==');
define('LOGGED_IN_KEY',    'zwhTt/XDERs1FH/qkJHwKAWniuvv99RfEBtiV0r4VoRU3j0A7sIuYcXVdxfmFhVoolw7kxb594/0pGj0JYljVA==');
define('NONCE_KEY',        'TK9P+v0Aj0ZCOkWQHfpO4sind9YiMeK9ZaQWREZs88N0I18oWzR3dUw2QrGJx86X013VpbGpG8o1qm6OhTrcKw==');
define('AUTH_SALT',        'FFukkDYN1Asjjka4JjFEe/J+aOaPDaWGjC0jWyDIYQl1+JI+HeNQkpWC1SByHiYABYnCsE9FyBZXqRkh6/58Iw==');
define('SECURE_AUTH_SALT', 't7EjQzRnfHVAeLY4ogbOLqA4MLu7P31IT/clzVYnEzgTiNd9guveuNNtqZRttGwjRs/faekw/BRAMC3rf4G6uA==');
define('LOGGED_IN_SALT',   'fUNhiSzkLeJmHM4QgrjltZI9KFlZ5RH76bbOLZOfdJalQEc5lwEgSETacxHWsbLEfKvE0aI5cAmRAQqydeB7+A==');
define('NONCE_SALT',       'Tp/PbvfrfgaebpKZv8taLpkcNaGf+trQoWa2NgxGySIabqW/x4VlrlFO1OhVC7AUlXN58oJasLTSXWDftVbNSg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
