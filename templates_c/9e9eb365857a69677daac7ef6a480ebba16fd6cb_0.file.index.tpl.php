<?php
/* Smarty version 3.1.29, created on 2019-10-12 14:51:03
  from "D:\php-work\htdocs\keacure\default\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5da19affb1f021_39848148',
  'file_dependency' => 
  array (
    '9e9eb365857a69677daac7ef6a480ebba16fd6cb' => 
    array (
      0 => 'D:\\php-work\\htdocs\\keacure\\default\\templates\\index.tpl',
      1 => 1570802326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:widgets/header.tpl' => 1,
    'file:widgets/nav-bar.tpl' => 1,
    'file:modules/home/home.tpl' => 1,
    'file:widgets/footer.tpl' => 1,
    'file:widgets/scripts.tpl' => 1,
  ),
),false)) {
function content_5da19affb1f021_39848148 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body class="homepage" cz-shortcut-listen="true">
    <div id="preloader" class="Fixed">
      <div data-loader="circle-side"></div>
    </div>
    <!-- /Preload-->
    
    <div id="page">	
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'home'), 0, false);
?>

      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/home/home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div id="toTop"></div>
    </div>
	</body>
</html><?php }
}
