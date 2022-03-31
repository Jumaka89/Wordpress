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
define( 'DB_NAME', 'suntravels' );

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
define( 'AUTH_KEY',         '|,]97U$HOD55v1EbpZEQ5wJ*ZuFHe(!!+PZ#}lZRo]|85mkdV~G7r]i4lAu#Tf}1' );
define( 'SECURE_AUTH_KEY',  '=QD4]8*!]X]RlQ0cMUHZ>0jgC?J+O+vz$n:)(m`TW.6WNTy(HWe)R&s2JUO%~s3q' );
define( 'LOGGED_IN_KEY',    'B|9z#M@8mIG_U&=qw/5I5OE;-nmr2FL=+H*`*/>ldky{ZDSNg+)$M]H-#S^t{_h8' );
define( 'NONCE_KEY',        'W|c{%,M6|4|mif4cJXrd){GCB8R|8JOtRl)t%sP!.h=dl$6EcP=#<.,V1 j+B#Dg' );
define( 'AUTH_SALT',        ' 3-Dd^k~^D2Z~@a^)r8ub%vB3%jKFmW|U b}_H%0Tr||^<BAK$B~oDn-R4Oa}QXR' );
define( 'SECURE_AUTH_SALT', '=XIrUpUN=@s hv!z0@spm91`)iJ)2BELoWHLW*P8esd8SFQ*qYpRQ5L.aW;MtdAq' );
define( 'LOGGED_IN_SALT',   'f0Zx:F(H4>g*|m@Hj~gm;schRQf4I:}udI0w2+&3!%;}$q7J._zj$IkxvtBcuUY-' );
define( 'NONCE_SALT',       'Q{4X_Ad{#?NVmE%aDwux{ qi7~,{u2Qi}ExYS=vAy}Ez-Pem,|=7PHp C6w&alhY' );
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
