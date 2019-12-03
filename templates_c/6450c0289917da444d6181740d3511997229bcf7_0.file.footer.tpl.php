<?php
/* Smarty version 3.1.29, created on 2019-12-03 19:38:46
  from "D:\php-work\htdocs\keacure\default\templates\administrator\common\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5de66c6e8e9070_08603470',
  'file_dependency' => 
  array (
    '6450c0289917da444d6181740d3511997229bcf7' => 
    array (
      0 => 'D:\\php-work\\htdocs\\keacure\\default\\templates\\administrator\\common\\footer.tpl',
      1 => 1575381907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de66c6e8e9070_08603470 ($_smarty_tpl) {
?>
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © FinDoctor 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/logout">Logout</a>
          </div>
        </div>
      </div>
    </div><?php }
}
