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
define( 'DB_NAME', 'clusterscu_db' );

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
define( 'AUTH_KEY',         '&@SHxzt@!Z@7E[/uILWXHm+Oj[TxaZwZ<|;hYO|UX)K]l2t57!5kcbl~^bf{cM|a' );
define( 'SECURE_AUTH_KEY',  'O5W{A%v)R(Ik?OjFyr+yg9[6icVTDfL0!=p4):JojYD~N/x/@?Nb14F07?;ymn*W' );
define( 'LOGGED_IN_KEY',    '4f[L7<`O>wS8E+R!-+{^_IrT,/Yy>_I,;wR%vgxy4ERy%%]u>|/;kanobrt1A*{C' );
define( 'NONCE_KEY',        'F`<psd5i?~Py!C7Q){g6lOt73pUh%TZW%hUV-kc#Id#po c}n[C/K4UqgQP$%}fP' );
define( 'AUTH_SALT',        'A.U`pRqbe3(;uFDE(G2$b`va/Q3 Q|o=hP*cmI&,g-TAaA1FA1/kyqX~bz)!>U^K' );
define( 'SECURE_AUTH_SALT', 'vh|-^ob4u$~%<g:d3,[P:JgPuKqfRs;T]`/}iMqK<(ds-ZN](H8DRC4rm(e&jiw_' );
define( 'LOGGED_IN_SALT',   '12u3NPCGq BGK><BId1Mj 3x) ;^ 4#(NX~BsI7b(s^*Uek%Jh:R=vjs8(6xkJ;n' );
define( 'NONCE_SALT',       ',0(h~4@UtoSu7_dw!Er|^|Gn{tv[me-~(ghdsP[@fXi 6eG]NA!0~A.%Y3];$pQ/' );

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
