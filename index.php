<?php
include_once('includefiles.php');

$smarty->assign('siteTitle', 'KEA Cure');
$smarty->assign('siteName', 'KEA cure');
$smarty->assign('moduleName', 'home');

$smarty->display(TEMPLATEDIR . '/index.tpl');
?>