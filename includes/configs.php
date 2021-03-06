<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
/*** Defining the folders **/
define( 'EXT', '.php' );
//define( 'DS', DIRECTORY_SEPARATOR );
define( 'DS', "/" );
define( 'CURRENT_DIRECTORY', dirname( __FILE__ ) );
define( 'ROOT', dirname( dirname( __FILE__ ) ) );
define( 'APPLIC', ROOT . DS . 'modules' );
define( '_PARENT', 'modules' . DS );
define( 'SITE_NAME', 'The Gaming Kitchen' );
define( 'SITE_NAME_SHORT', "The Gaming Kitchen" );
define( 'SYSTEM', ROOT . DS . 'system' . DS );
define( 'gk_pay', ROOT . DS . 'gk_payment_we' . DS );
define( '_PUBLIC', ROOT . DS . 'public' . DS );

define( '_DEFAULT', APPLIC . DS . 'default' . DS );
define( '_PAYMENT', APPLIC . DS . 'payment' . DS );


/*** Load System Libraries **/
require_once SYSTEM . 'sql' . EXT;
require_once SYSTEM . 'mysql' . EXT;
require_once SYSTEM . 'database' . EXT;
require_once SYSTEM . 'stdlib' . EXT;
require_once SYSTEM . 'pagination' . EXT;
require_once SYSTEM . 'mpesa' . EXT;

require_once gk_pay . 'model' . EXT;


define('BG_LIGHT', "#ffffff");
define('BG_DARK', "#efefef");

/*** Autoload all the model classes **/
$files = glob( APPLIC . DS . "*" );

foreach( $files as $file ) : 	
 	if( is_dir( $file )   ) :
  		require_once $file . DS . 'model' . EXT;
 	endif;
endforeach;

/*** Database Configuration  **/
if(strpos($_SERVER['HTTP_HOST'], 'gamingkitchen.co.ke') > 0  )
	{
	$host = 'localhost';
	$user = 'gamingki_yoke1';
	$pass = '4gWVRTpGMFGD!';
	$name = 'gamingki_main_';
	
	define( 'SITE_URL', 'https://gamingkitchen.co.ke/' );
	}	
else
	{
       $host = 'localhost';
	$user = 'gamingki_yoke1';
	$pass = '4gWVRTpGMFGD!';
	$name = 'gamingki_main_';	
	define( 'SITE_URL', 'https://gamingkitchen.co.ke/' );
	}

DBASE::dbConnect( $host, $user, $pass, $name );


?>
