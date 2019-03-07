<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'iw_db_lokal_' );
// define('DB_NAME', 'IW_DB_LOKAL_');


/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );
// define('DB_USER', 'Shadowbound');


/** MySQL-databasens lösenord */
//define('DB_PASSWORD', 'Ange databaslösenord här');
define( 'DB_PASSWORD', 'r00t' );


/** MySQL-server */
define( 'DB_HOST', '127.0.0.1' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

// define('WP_SITE_URL', 'http://localhost/iw');
// define('WP_HOME', 'http://localhost/iw');





/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L!VJXR/Mcm`|o_K+(rZn&MD<Axr2?*+{in>{_#$7~3Ka8gCVARcp@pwiOPzOzP]V' );
define( 'SECURE_AUTH_KEY',  '}Ck7 :N08?UruFnXQb&Csy.3O{lT<h`F_jqK@cy=moaudgS`3K5n`X+FiF(9=(Ve' );
define( 'LOGGED_IN_KEY',    'M5u;2NNQC3j e$DTRR8Rv!Id=PYPN ctl=4 3aE}UUO5g=s,#32f2[0N_6IC! ]g' );
define( 'NONCE_KEY',        '|8k_@>Q hmm<&FCV_6p6-)`1T{5@^d7p6s5j)gRYH_r.wEbzmXq4*4`hAkiL>jRI' );
define( 'AUTH_SALT',        '5 8syOVXm7$E28#R6aBnY$u^v;y!Z1D/,#@=H69}lTM$)F~pmL5NVZIf{B896dDq' );
define( 'SECURE_AUTH_SALT', '._Q$p=xk}@.?L0!s*trBxV,8vu3,XDvl KLArpaUCe?|a~:BJVuzn`QMEs&H&Rm.' );
define( 'LOGGED_IN_SALT',   'xI!!JMHGE6C(]foK/!=w|o{,#0!!X#a3_DTMTgDs@_u9u`7)EIN@S<b8XBQh45}I' );
define( 'NONCE_SALT',       'OW]V`k8-xZpnWq4 i<3R1k(#$#|(eE3:]k6H8&9BVVs}Y%^t~~Q76?W@`j9}(907' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'iw_db_lokal_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');