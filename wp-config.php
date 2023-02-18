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
define('DB_NAME', 'db740935159');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo740935159');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Hitools92*');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db740935159.db.1and1.com');

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
define('AUTH_KEY',         '!M/i(XE$r1B@,l(BqB[Q7gU0aj00?szKPw:1B.4Kgf}T.o-Hu cLu+r*A&d:=Ue}');
define('SECURE_AUTH_KEY',  'Uu]YL+1Qjqfef^}YFHVSu6[&aYtt~BI5L0?nj<I@DOiO&Y=gt-7N%T0oTNE2E!vx');
define('LOGGED_IN_KEY',    '#[7+]`!ek1F{at]x_2_$IdwO/O6:ni;LMEcf|F82|oZkO PU*`aj> HG)NT9-<yy');
define('NONCE_KEY',        '6h[P5y SAc*?Q0OgbZy;}2)1ruAC#+d1%P9?>Y,)sx8N0Ba_cAJ|c*u4D>(/-Qp7');
define('AUTH_SALT',        '(zC(j!$%;P4T@}<7&%Dd0et0%XW/?q+o4{&8)[Dkh_fIU|BjnR(#8/cb4]Zj>_br');
define('SECURE_AUTH_SALT', 'sgX$w.7rK8xc9#$gKetla9^X$7|I5,3yNH~<{%U4=-(m0%PK%]`~6<|4*tz:BkZ+');
define('LOGGED_IN_SALT',   'Oox,Y_=RQF2+!qOE|i#,1R4I5$(th;&YwRjDY=.8`k`Yv)QVCOFYK#/8+tz]Zf<]');
define('NONCE_SALT',       '`b1j#JR|h:{01lPJ3f`&{`0S.,=cqU~ tqL?4 Wv  XVK$?t+YM;pOpoOZ|)`M (');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'hit_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');