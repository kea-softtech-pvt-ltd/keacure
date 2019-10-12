<?php
/* Smarty version 3.1.29, created on 2019-10-12 14:51:26
  from "D:\php-work\htdocs\keacure\default\templates\administrator\common\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5da19b1659c9f4_93206940',
  'file_dependency' => 
  array (
    'f6f2ccd5a4cf55cf98ffbf1019140780bf045f43' => 
    array (
      0 => 'D:\\php-work\\htdocs\\keacure\\default\\templates\\administrator\\common\\sidebar.tpl',
      1 => 1487270622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da19b1659c9f4_93206940 ($_smarty_tpl) {
?>
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
	<div class="sidebar-wrapper">
        <div class="logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
" class="simple-text">
                <?php echo $_smarty_tpl->tpl_vars['siteTitle']->value;?>

            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
admin/dashboard">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="active">
                <a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
admin/users">
                    <i class="pe-7s-user"></i>
                    <p>Client Management</p>
                </a>
            </li>
        </ul>
	</div>
</div><?php }
}
