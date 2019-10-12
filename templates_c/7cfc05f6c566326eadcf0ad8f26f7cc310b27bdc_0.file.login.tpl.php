<?php
/* Smarty version 3.1.29, created on 2019-10-12 14:51:17
  from "D:\php-work\htdocs\keacure\default\templates\administrator\login\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5da19b0d834cc4_53808487',
  'file_dependency' => 
  array (
    '7cfc05f6c566326eadcf0ad8f26f7cc310b27bdc' => 
    array (
      0 => 'D:\\php-work\\htdocs\\keacure\\default\\templates\\administrator\\login\\login.tpl',
      1 => 1486751667,
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
function content_5da19b0d834cc4_53808487 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
administrator/css/pages/login.css">
	<body cz-shortcut-listen="true">				
		<div class="container">
		   <div class="row">
		    <div class="col-md-6 col-md-offset-3">
		      <div class="panel panel-login">
		        <div class="panel-body">
		          <div class="row">
		            <div class="col-lg-12">
		              <form id="login-form" action="#" method="post" role="form" style="display: block;">
		                <h2>LOGIN</h2>
		                  <div class="form-group">
		                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
		                  </div>
		                  <div class="form-group">
		                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
		                  </div>
		                  <div class="col-xs-6 form-group pull-left checkbox">
		                    <input id="checkbox1" type="checkbox" name="remember">
		                    <label for="checkbox1">Remember Me</label>   
		                  </div>
		                  <div class="col-xs-6 form-group pull-right">     
		                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
		                  </div>
		              </form>
		              <form id="register-form" action="#" method="post" role="form" style="display: none;">
		                <h2>REGISTER</h2>
		                  <div class="form-group">
		                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
		                  </div>
		                  <div class="form-group">
		                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
		                  </div>
		                  <div class="form-group">
		                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
		                  </div>
		                  <div class="form-group">
		                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
		                  </div>
		                  <div class="form-group">
		                    <div class="row">
		                      <div class="col-sm-6 col-sm-offset-3">
		                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
		                      </div>
		                    </div>
		                  </div>
		              </form>
		            </div>
		          </div>
		        </div>
		        <div class="panel-heading">
		          <div class="row">
		            <div class="col-xs-6 tabs">
		              <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
		            </div>
		            <div class="col-xs-6 tabs">
		              <a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
			    $('#login-form-link').click(function(e) {
			    	$("#login-form").delay(100).fadeIn(100);
			 		$("#register-form").fadeOut(100);
					$('#register-form-link').removeClass('active');
					$(this).addClass('active');
					e.preventDefault();
				});
				$('#register-form-link').click(function(e) {
					$("#register-form").delay(100).fadeIn(100);
			 		$("#login-form").fadeOut(100);
					$('#login-form-link').removeClass('active');
					$(this).addClass('active');
					e.preventDefault();
				});

			});
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
