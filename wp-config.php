<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'landing-page-escort-v2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't:28B)V;t >qs%N:5FsrU`4[-]5CRT*@H>z`%xY#e$L~@A$9H`R=_hoXv]L0,Ns_');
define('SECURE_AUTH_KEY',  'vY(u(z[HoT=6,~67)Pw7wCR ZX=Hmpk~-4}8JkMi83ScEv:5S[S4<,H[fa>Qe]B!');
define('LOGGED_IN_KEY',    'JR~Y:Ie{zy?R_6ZYbcWb>uZ=P0:MWz{T:$=}{_hJ8aqxC1wyPtzx`5OA02it=f*<');
define('NONCE_KEY',        'x*o$bmOsGxmB&^8,}Qj)7*s2T].U!@zhD BkrH[^9ScJE]xtP|2K5cw5ZTO4fhhU');
define('AUTH_SALT',        'd@5*G2sU5Q]H7.[VG[)Nk +H=HJ3b)y6`lA[g2~|i*zoV!Wp[0dkrhDo1 H<O>R]');
define('SECURE_AUTH_SALT', '+T/.06%ofa <W1*g2c|6O[irJc{<1o=M?D)BdAc*BHmf+.#aGc/PC@!EZ.X{Ab_-');
define('LOGGED_IN_SALT',   'T<ypmYX0]i0x4DB8_$,=${I+V{.|`x_:k3-Ad>b-$@hO}.HV>$w8~IuZ|c?`saxF');
define('NONCE_SALT',       'F:D{3:]jn &sr2q/>);}5dd:sKbA;KY:o6L1Nq0SgoF6#g~F=wpfghi(sYBkyGZ+');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '96M' );

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
