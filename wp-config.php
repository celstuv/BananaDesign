<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\MonSuperSite\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'monsupersite' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!mQ*eM`%xk_~oql![5z8ZRi<QK<Nv0$b=uJtp74I8$z5Dz[z#j@}Wf]_LXZ}UVmm' );
define( 'SECURE_AUTH_KEY',  'W2peQ4iY>(O68VL,)a9kN>snuO_FJM+xKh)@se#v#h%<iT$7H/@&zyh~^`GH{?Gz' );
define( 'LOGGED_IN_KEY',    'PN75gX35J&.~V=915Uv}=JYJLpI+an-bcyC&nj&_ (|S_e9Z%,P?11Z/!b&s:MgD' );
define( 'NONCE_KEY',        '@{7^EZ-0Ag@ygE>2!v[q@/Qyr%@XyJ!tm%w?4T+#u{|2EM9OS-gRVa) K|qxlF-N' );
define( 'AUTH_SALT',        '$e;yqOL}+?~!uPHQpXvY?xn8tvqt23K*dUi`ecg. .%KLw[QfZ_C2|H{td#i^.SO' );
define( 'SECURE_AUTH_SALT', '_=<c,*TG/k0c@T9y}bMohA%G^4<H<=,zEZ$:yekWwDP`;@Hn5zNGW}NEMRE|=f8a' );
define( 'LOGGED_IN_SALT',   'ZGKWvQ.>fNPQ*peL1O?thWwxkcDsN0+hid/1b!E#hAoGUHD`-NoDDzczKMYhz$&4' );
define( 'NONCE_SALT',       '-D1efjS+oTyl#wI#;!rRaTN=8M^i4tvTo%wHD5mXsGp(gSc&a_]a*`&Z;foO >Q:' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
