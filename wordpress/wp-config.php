<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'impresa_locale' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_~zq0VdB^jx;Fkps<Oh*Z*vmsQM|u`L1-6UM>1OU<RbUQOXX6FBno.mVD#v>Jf$R' );
define( 'SECURE_AUTH_KEY',  '7>56adAYe8-q.wbh-@}Fv0vv0@*1$*Df)RB(fBr2T8YSN`m~|0nih2.6.UU=S?7,' );
define( 'LOGGED_IN_KEY',    'c551~?9iIv.FQ5f:PAsn5:F=*dq{EN+((GM$zvQG;>t#|bAr^r3Ux:Go*4r9Ydwa' );
define( 'NONCE_KEY',        'Zd$5]LS9IqQTR^F rG*~Br~+dZp~P54w2,5~?i.3a*<1.S::[gKtc?k67J?4IAZ`' );
define( 'AUTH_SALT',        '@1E^G-Ue:8USZ+m~#G_sA+2qJrk*Cr?]r*OWb5,%s**dN+TO)6H*)S-0OiC;j+h/' );
define( 'SECURE_AUTH_SALT', '^({)aYk&+M$irX3p(}d6*(L<Y?m,yM?E5#eb-8eJkZ)^oFsGf8B<{}=,Fai?=EAx' );
define( 'LOGGED_IN_SALT',   'j:n2V|>e9P}WgMQi_s8uyze8F45[8>2{PiaTqz-r1s6!X}YcqCME|,M$W}yS%NA5' );
define( 'NONCE_SALT',       'XN]?plE25cW@98oGB:mxf|ulC0pn x@Bu4BaZc_2+<^xLJtDkP(@VZ^W{@eCP)rv' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */

define('FS_METHOD', 'direct');

/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
