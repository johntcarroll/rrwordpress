<?php
// ** MySQL settings ** //
define('DB_NAME','wp_redesignright_com');    
define('DB_USER', 'root');     
define('DB_PASSWORD','C9h8wydj!rr!'); 
define('DB_HOST', 'localhost');   
// Change the prefix if you want to have multiple blogs in a single database.
$table_prefix  = 'wp_';   // example: 'wp_' or 'b2' or 'mylogin_'
// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-includes/languages.
// For example, install de.mo to wp-includes/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');
/* Stop editing */
	
/*define('ABSPATH', dirname(__FILE__).'/'); */
define('ABSPATH','/var/www/html/wordpress/') ;	
require_once(ABSPATH.'wp-settings.php');
?>
