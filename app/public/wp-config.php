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
define('AUTH_KEY',         '7RyTlGqgqU3NxPwL+o1Q8CzHcm9HmirlTNT7sbjTi0ZHabmckWvhIlGqgewrW5+XUsA+QxIW6d8BrIXqRdpCAg==');
define('SECURE_AUTH_KEY',  'kyAZcATOmYhsvLCBRMNucqCrIaZWDyjCP7h5BlktKRMG/Exc4WqDd4sQMKubcX9Jo2Ift2OhcYz0+opgCQapBA==');
define('LOGGED_IN_KEY',    'q1yyXwJ76aFQEOXRJfY7tDBf89zy1/AEduTtM/faFRHQ91oxm+t9XQXKK8XC1hpHdRLSIifEwg3tGDAt47tyXg==');
define('NONCE_KEY',        '2Hkg6dfm3pL7jtwQw5fm4qCycdNc4wCflmb6BMREoVQIsVlHNCCff1RsnWaMT4G+hkI14WytDnzDKQyLd4F8lw==');
define('AUTH_SALT',        '60zGJIv/nVL5SA6iN6O0+txz7pFX79VOhtdOd1ZmOgHk+RBJ4rvD9xhkhy+wRg3AR1uuNZ3HX5VhGecCD75uMA==');
define('SECURE_AUTH_SALT', '+f/QD/BHwG7Tw9gnSD61tRg+4aNAwcjnVqCdYNMlU4i44P2CcYWzndZOp4xnLhFiKMmz4+BoDXRF45QzT0daIw==');
define('LOGGED_IN_SALT',   'OeERuSSiKSf7pSe0lEdX3DcW04cafYiIpR814bzWVHOnm5TEN3kp+lYaWrih3tp0qZfXlNjMWFUrCRCZFBx7Ww==');
define('NONCE_SALT',       'WEqb6MiffXgElgigaI15+lHBAHl/a27IM9ncCXzDx5qaScCIPp/YLbN6E7/rTykRzmO3shm4oXbHkE0unljm1w==');

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
