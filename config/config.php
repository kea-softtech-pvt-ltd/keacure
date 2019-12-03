<?php 
session_start();

//ob_start();
$application = "dev";
//$application = "prod";

ini_set("dispaly_errors", "1");
error_reporting(E_ALL);

if($application == "dev") {
	define("HST", "localhost");
	define("USR", "root");
	define("PWD", "");
	define("DBN", "keacure");
	define("DBTYPE", "mysql");
	define('SITE_URL','http://localhost/keacure/');
	define('DOC_ROOT','D:/php-work/htdocs/keacure');
	define('DOC_ROOT_COMMON','D:/php-work/htdocs/keacure/common/');

	define("EXACT_ROOT", realpath(dirname(dirname(__FILE__))));
	define('TEMPLATEDIR',DOC_ROOT.'/default/templates/');
	
	define('SITE_URL_COMMON','http://localhost/keacure/common');
	define("COMMON_JS_PATH", SITE_URL_COMMON."/js");

	define('DOC_FOLDER' , 'keacure/');

	define('ADMIN_TEMPLATEDIR',TEMPLATEDIR.'/administrator/');
	
	define('ADMIN_FOLDER' , DOC_ROOT.'/administrator');
	
} else {
	define("HST", "localhost");
	define("USR", "kea");
	define("PWD", "Test@123");
	define("DBN", "keacure"); 
	define("DBTYPE", "mysql");
	define("EXACT_ROOT", realpath(dirname(dirname(__FILE__))));

	define('SITE_URL','http://www.keacure/');
	define('DOC_ROOT','/home/tourdekonkan/public_html/keacure/');
	define('DOC_ROOT_COMMON','/home/tourdekonkan/public_html/keacure/common');
	
	define('BASEFOLDER', '/home/tourdekonkan/public_html/keacure/');
	
	define('SITE_URL_COMMON','http://www.keacure/common');


	define('TEMPLATEDIR',DOC_ROOT.'/default/templates/');
	define("COMMON_JS_PATH", SITE_URL_COMMON."/js");
	define('DOC_FOLDER' , '');

	/* Paypal details*/
	/* Paypal details*/
	define('DONATION_ID' , 'donation@keacure');
	define('PAYPAL_URL' , 'https://www.paypal.com/cgi-bin/webscr');

	define("MEMBERSHIP_ID", "membership@keacure");
	define("CONTACT_ID", "info@keacure");
}
	## Set time zone
	date_default_timezone_set('Asia/Calcutta');
	/*********** Creating Object of Smarty ***********/

	require(DOC_ROOT . '/default/source/common/third-party/smarty-3.1.29/libs/Smarty.class.php');

	$smarty = new Smarty;
	$smarty->setTemplateDir(DOC_ROOT . "/default/templates")
		   ->setCompileDir(DOC_ROOT . '/templates_c');
	//$smarty->force_compile = true;
	/*********** End of Creating Object of Smarty ***********/
	
	## Assign site url to smarty variable
	$smarty->assign("siteroot", SITE_URL);
	
	$smarty->assign('adminroot', SITE_URL. "admin");
	$smarty->assign("version", round(microtime(true) * 1000));
	
	
	## Below file contains all the tables of the project
	include_once(DOC_ROOT.'/common/includes/tbl-names.php');
	
	## Below file contains all the contstant which we used in this project
	include_once(DOC_ROOT.'/common/includes/constants.php');
	
	## Assign site title to smarty variable
	$smarty->assign('siteTitle', 'KEA Cure');
	$smarty->assign('siteName', 'KEA Cure');
	## JS files path for local and server in smarty variable
	$smarty->assign("common_js_path", COMMON_JS_PATH);
?>
