<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'nicolas_portfolio');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'nicolas_nag');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '8%t@UhiljaWIxwbpf*');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'RMkZ3~YGVB47AjDgg3mrGr$0Q(sZR(MBx19<mlKFp2lxP<j[0&Z}Zx$fa;)[KUft');
define('SECURE_AUTH_KEY', 'r4QC?^RSrxxe;OY?Oy7C vz5s1Q[tc}(P|Hm[EGLK^DO&!)DTzhiq}SK@)6Jm4V-');
define('LOGGED_IN_KEY', 'Q:6/+Hd+Lq@8Axgse#& >M~1*<M03MS7ul#enik*t]&<Y(EtR$%=S,DGa.z!GZ,J');
define('NONCE_KEY', '}/pE~hFG++LqFpV[1w~/%G5iIe9x4WxG*?p$;gk]5l9D>8k~>[W/_#5Jc(L4 :7)');
define('AUTH_SALT', '>|kQs-W .vM@ t1d1mk((r +dUYJ?$A>j1h16n>Kj1ZKSl:(/gg3=1O*s)/TX2Z)');
define('SECURE_AUTH_SALT', '>#|LJ7z &9`%OmFO>hWDsx<5Sf+)T=V)*(VJO/^QV#99T*J#*Ob|20eK}tpAE#d7');
define('LOGGED_IN_SALT', '.86F,COjcsN]]41c`3u ELfU!!z^bu/T#R>QCHGVKBiC(O-OdD>wBnI5G=tJ=two');
define('NONCE_SALT', 'S6;HsWfVa/|tOl5)jr-AQ^SQMgQfUeB](y0z+)g_+]D(K#oI[)y6f8>#/U3] f_f');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'nag_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

