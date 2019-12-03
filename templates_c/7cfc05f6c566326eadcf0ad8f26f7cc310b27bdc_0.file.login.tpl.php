<?php
/* Smarty version 3.1.29, created on 2019-12-03 19:17:37
  from "D:\php-work\htdocs\keacure\default\templates\administrator\login\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5de66779e95842_78346486',
  'file_dependency' => 
  array (
    '7cfc05f6c566326eadcf0ad8f26f7cc310b27bdc' => 
    array (
      0 => 'D:\\php-work\\htdocs\\keacure\\default\\templates\\administrator\\login\\login.tpl',
      1 => 1575380856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/common/header.tpl' => 1,
    'file:administrator/common/footer.tpl' => 1,
    'file:administrator/common/scripts.tpl' => 1,
  ),
),false)) {
function content_5de66779e95842_78346486 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body cz-shortcut-listen="true">	

				<main>
					<div class="container">
						<div class="row justify-content-md-center">
							
							<div id="login" class="col-md-4">
								<div class=" text-center add_top_20">
									<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
"><img src="../default/assets/img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
								</div>
								<div class="box_form add_top_20">
									<form action="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
admin/login" method="post" name="frmLogin">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Your email address">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Your password" id="password" name="password">
										</div>
										<div class="form-group text-center add_top_20">
											<input class="btn_1 medium" type="submit" value="Login">
										</div>
									</form>
								</div>
							</div>
							<!-- /login -->
						</div>
					</div>
				</main>
		
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}
