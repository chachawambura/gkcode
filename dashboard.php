<?php
//ini_set('display_errors', 0);
session_start();

require_once "includes/configs.php";
require_once "includes/en.php";
require_once "includes/database.php";
//echo checkTimer( time() );

if(isset($_SESSION['gamingkitchen']))
	echo baseModel::session_checker($_SESSION['login']);

if( $_REQUEST['url'] == 'logout' ) :
	echo defaultModel::logout();	
endif;

$include = ( isset( $_SESSION['gamingkitchen'] ) ) ? 'default' : 'guest';



include _DEFAULT . DS . $include . EXT;

?>
