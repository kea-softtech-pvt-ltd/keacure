<?php
	include_once(realpath(dirname(dirname(dirname(dirname(__FILE__))))) . '/includefiles.php');

	$smarty->assign('moduleName', 'login');
	$smarty->display(ADMIN_TEMPLATEDIR . '/login/login.tpl');
?>