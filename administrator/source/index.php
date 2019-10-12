<?php
	include_once(realpath(dirname(dirname(dirname(__FILE__)))) . '/includefiles.php');

	$smarty->assign('siteTitle', 'KEA Cure');
	$smarty->assign('siteName', 'keacure.com');
	$smarty->assign('moduleName', 'admin home');

	$smarty->display(ADMIN_TEMPLATEDIR . 'index.tpl');
?>
