<?php
/* Smarty version 3.1.29, created on 2019-10-12 14:51:03
  from "D:\php-work\htdocs\keacure\default\templates\widgets\nav-bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5da19affe5b978_70957326',
  'file_dependency' => 
  array (
    '41ca5687f5ec7dfe1f8a2c0c18b182cd6be8f1db' => 
    array (
      0 => 'D:\\php-work\\htdocs\\keacure\\default\\templates\\widgets\\nav-bar.tpl',
      1 => 1570815964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da19affe5b978_70957326 ($_smarty_tpl) {
?>
<header class="header_sticky">	
  <a href="#menu" class="btn_mobile">
    <div class="hamburger hamburger--spin" id="hamburger">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
  </a>
  <!-- /btn_mobile-->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div id="logo_home">
          <h1><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['siteTitle']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteTitle']->value;?>
</a></h1>
        </div>
      </div>
      <div class="col-lg-9 col-6">
        <ul id="top_access">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
login"><i class="pe-7s-user"></i></a></li>
          <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
register-doctor"><i class="pe-7s-add-user"></i></a></li-->
        </ul>
        <nav id="menu" class="main-menu">
          <ul>
            <!--li>
              <span><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
">Home</a></span>
            </li -->
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor">Doctors<br><span>Book an appointment</span></a>
              
              <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/allergist/1">Allergist</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/Cardiologist/1">Cardiologist</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/Chiropractor/1">Chiropractor</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/Dentist/1">Dentist</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/Dermatologist/1">Dermatologist</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/Gastroenterologist/1">Gastroenterologist</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/Ophthalmologist/1">Ophthalmologist</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/Optometrist/1">Optometrist</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
doctor/Pediatrician/1">Pediatrician</a></li>
                
              </ul>
            </li>
            <!--li><span><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
admin" target="_blank">Admin</a></span></li -->
            
          </ul>
        </nav>
        <!-- /main-menu -->
      </div>
    </div>
  </div>
  <!-- /container -->
</header><?php }
}
