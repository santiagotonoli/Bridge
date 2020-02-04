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
define( 'DB_NAME', 'la ferté' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '_3$9rhGP(FJ &r[v|CSq7v@vH2N+EKbV&eCb/(t>ZG~*Lp%5 V;:dcl/0/f|35O7' );
define( 'SECURE_AUTH_KEY',  'kEH~FI:}&+*.pnT.v`oq4HE)8HB,P)}P!8I:40IGuYA-Y+ZEy>rjmsR:XKoP5Xv]' );
define( 'LOGGED_IN_KEY',    'IfKuf!:msyIGYLUs!=^c+hs&P^$tl )7=m[_`IM4_+g|#XSM%.Uy4BFK~-)Mt:iG' );
define( 'NONCE_KEY',        '/9:cQTiv?~!l)3SRn8LNB*/O3RW)c9|0{KIA>Hv]YNTTY`d.%RvJO{f<AfUPt0BH' );
define( 'AUTH_SALT',        '6[~g.O(,1@gO.u{^;6zH|QzaHE%l=ryi_M7t!dgBB9; <aeN8^gO(GOt|[8?g^+`' );
define( 'SECURE_AUTH_SALT', 'F<JhOxOCG=7S*OGIh*(?1~2u>[MfgHO$Q.gsFlvB&@PUoVDZcW;|?/%R@c[*Dva!' );
define( 'LOGGED_IN_SALT',   '.6<|[C^h%SB,9-H*x!4/jX}fRT@C<@R}_ZIx4qGlIM gP9hsm#6VRhE~^tnk<Llm' );
define( 'NONCE_SALT',       'D1TKH7:F2A?MQV2&I_Ij}-t=4H8aeD0Br K(H</hz_qQI)T!dij`{`#+_n1}@dGS' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
