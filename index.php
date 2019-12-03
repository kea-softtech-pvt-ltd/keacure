<?php
include_once('includefiles.php');
echo "hi";
$smarty->assign('siteTitle', 'KEA Cure');
$smarty->assign('siteName', 'KEA cure');
$smarty->assign('moduleName', 'home');

$smarty->display(TEMPLATEDIR . '/index.tpl');
?>