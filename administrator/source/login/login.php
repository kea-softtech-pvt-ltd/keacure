<?php
	include_once(realpath(dirname(dirname(dirname(dirname(__FILE__))))) . '/includefiles.php');

	if(isset($_POST['email'])) {
		$_SESSION['isLoggedIn'] = true;
		header("Location: " . SITE_URL . "admin/dashboard");
	}

	$smarty->assign('moduleName', 'login');
	$smarty->display(ADMIN_TEMPLATEDIR . '/login/login.tpl');
?>