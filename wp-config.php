<?php
define('FORCE_SSL_ADMIN', true);
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';
define('WP_CACHE', true);
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'viratopr57623');
/** Nome utente del database MySQL */
define('DB_USER', 'viratopr57623');
/** Password del database MySQL */
define('DB_PASSWORD', 'vira09020');
/** Hostname MySQL  */
define('DB_HOST', 'sql.viratoprugna.com');
/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');
/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');
/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'W2{!a(%+~97h3gKG^~Q-@a8zfJk#H%OLv3y8uW~|dVzmP&cTqxV@031fB~/E<f]~');
define('SECURE_AUTH_KEY', '6wjU]7&Co&z=E8DAt4nXAiVE= kwq~>Os1q~Bak/}ha@52Y!D880~x;#WVBWa _s');
define('LOGGED_IN_KEY', 'iW,r:FWsYnlHm*F4*Q$Lj+&h>$kdaccY}y)Cagdo=$>r?7EN(>jXb9CcBD-p4/Xw');
define('NONCE_KEY', '+?S,qu+_k&XP)gd+BaT/G*hjF`tD.MIjtGbV[x(c0]BW!KEIE}l5S/8U{H7y(m|V');
define('AUTH_SALT', 'bhnl`[x|5ut(`%p7$1=/*NaAq=s5Z-n+?#e~3TlXutZF/=Z{x5nPDw.rzRR{4Z?w');
define('SECURE_AUTH_SALT', '9xuk@_1NQJ)IrS/XAnz&sX|<oBBRl+;j/=2[g[^{<y|]n.tr+2CluK>v,#v/0I.C');
define('LOGGED_IN_SALT', '.0q42_61wu=C]ky}&2,-s,io-ja5&!u68*1{1FMZaB:L<#Y+j]T|c_-{GT7>KapJ');
define('NONCE_SALT', ';ufsmEW[**=0^j9y[83E68=A;6_iIbFF~@tiYE}z=#wldA42Jg9E/0NQgi9(n!k0');
/**#@-*/
/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('WP_POST_REVISIONS', 3);define('DISALLOW_FILE_EDIT', true);
define('AUTOSAVE_INTERVAL', 120);
/* Finito, interrompere le modifiche! Buon blogging. */
/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');