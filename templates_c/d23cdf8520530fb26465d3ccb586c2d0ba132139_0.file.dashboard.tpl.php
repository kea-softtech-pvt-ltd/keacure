<?php
/* Smarty version 3.1.29, created on 2019-10-12 14:51:26
  from "D:\php-work\htdocs\keacure\default\templates\administrator\dashboard\dashboard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5da19b16517957_77041446',
  'file_dependency' => 
  array (
    'd23cdf8520530fb26465d3ccb586c2d0ba132139' => 
    array (
      0 => 'D:\\php-work\\htdocs\\keacure\\default\\templates\\administrator\\dashboard\\dashboard.tpl',
      1 => 1487270353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/common/header.tpl' => 1,
    'file:administrator/common/sidebar.tpl' => 1,
    'file:administrator/common/top-bar.tpl' => 1,
    'file:administrator/common/footer.tpl' => 1,
    'file:administrator/common/scripts.tpl' => 1,
  ),
),false)) {
function content_5da19b16517957_77041446 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body cz-shortcut-listen="true">				
		<div class="wrapper">
		    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		    <div class="main-panel">
		       <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/top-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		        <div class="content">
		            <div class="container-fluid">
		                <div class="row">
		                    <div class="col-md-4">
		                        <div class="card">
		                            <div class="header">
		                                <h4 class="title">Email Statistics</h4>
		                                <p class="category">Last Campaign Performance</p>
		                            </div>
		                            <div class="content">
		                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

		                                <div class="footer">
		                                    <div class="legend">
		                                        <i class="fa fa-circle text-info"></i> Open
		                                        <i class="fa fa-circle text-danger"></i> Bounce
		                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
		                                    </div>
		                                    <hr>
		                                    <div class="stats">
		                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="col-md-8">
		                        <div class="card">
		                            <div class="header">
		                                <h4 class="title">Users Behavior</h4>
		                                <p class="category">24 Hours performance</p>
		                            </div>
		                            <div class="content">
		                                <div id="chartHours" class="ct-chart"></div>
		                                <div class="footer">
		                                    <div class="legend">
		                                        <i class="fa fa-circle text-info"></i> Open
		                                        <i class="fa fa-circle text-danger"></i> Click
		                                        <i class="fa fa-circle text-warning"></i> Click Second Time
		                                    </div>
		                                    <hr>
		                                    <div class="stats">
		                                        <i class="fa fa-history"></i> Updated 3 minutes ago
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>



		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="card ">
		                            <div class="header">
		                                <h4 class="title">2014 Sales</h4>
		                                <p class="category">All products including Taxes</p>
		                            </div>
		                            <div class="content">
		                                <div id="chartActivity" class="ct-chart"></div>

		                                <div class="footer">
		                                    <div class="legend">
		                                        <i class="fa fa-circle text-info"></i> Tesla Model S
		                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
		                                    </div>
		                                    <hr>
		                                    <div class="stats">
		                                        <i class="fa fa-check"></i> Data information certified
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="col-md-6">
		                        <div class="card ">
		                            <div class="header">
		                                <h4 class="title">Tasks</h4>
		                                <p class="category">Backend development</p>
		                            </div>
		                            <div class="content">
		                                <div class="table-full-width">
		                                    <table class="table">
		                                        <tbody>
		                                            <tr>
		                                                <td>
		                                                    <label class="checkbox">
		                                                        <input type="checkbox" value="" data-toggle="checkbox">
		                                                    </label>
		                                                </td>
		                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
		                                                <td class="td-actions text-right">
		                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="fa fa-edit"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="fa fa-times"></i>
		                                                    </button>
		                                                </td>
		                                            </tr>
		                                            <tr>
		                                                <td>
		                                                    <label class="checkbox">
		                                                        <input type="checkbox" value="" data-toggle="checkbox" checked="">
		                                                    </label>
		                                                </td>
		                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
		                                                <td class="td-actions text-right">
		                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="fa fa-edit"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="fa fa-times"></i>
		                                                    </button>
		                                                </td>
		                                            </tr>
		                                            <tr>
		                                                <td>
		                                                    <label class="checkbox">
		                                                        <input type="checkbox" value="" data-toggle="checkbox" checked="">
		                                                    </label>
		                                                </td>
		                                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
		</td>
		                                                <td class="td-actions text-right">
		                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="fa fa-edit"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="fa fa-times"></i>
		                                                    </button>
		                                                </td>
		                                            </tr>
		                                            <tr>
		                                                <td>
		                                                    <label class="checkbox">
		                                                        <input type="checkbox" value="" data-toggle="checkbox">
		                                                    </label>
		                                                </td>
		                                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
		                                                <td class="td-actions text-right">
		                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="fa fa-edit"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="fa fa-times"></i>
		                                                    </button>
		                                                </td>
		                                            </tr>
		                                            <tr>
		                                                <td>
		                                                    <label class="checkbox">
		                                                        <input type="checkbox" value="" data-toggle="checkbox">
		                                                    </label>
		                                                </td>
		                                                <td>Read "Following makes Medium better"</td>
		                                                <td class="td-actions text-right">
		                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="fa fa-edit"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="fa fa-times"></i>
		                                                    </button>
		                                                </td>
		                                            </tr>
		                                            <tr>
		                                                <td>
		                                                    <label class="checkbox">
		                                                        <input type="checkbox" value="" data-toggle="checkbox">
		                                                    </label>
		                                                </td>
		                                                <td>Unfollow 5 enemies from twitter</td>
		                                                <td class="td-actions text-right">
		                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
		                                                        <i class="fa fa-edit"></i>
		                                                    </button>
		                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
		                                                        <i class="fa fa-times"></i>
		                                                    </button>
		                                                </td>
		                                            </tr>
		                                        </tbody>
		                                    </table>
		                                </div>

		                                <div class="footer">
		                                    <hr>
		                                    <div class="stats">
		                                        <i class="fa fa-history"></i> Updated 3 minutes ago
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>


		        <footer class="footer">
		            <div class="container-fluid">
		                <nav class="pull-left">
		                    <ul>
		                        <li>
		                            <a href="#">
		                                Home
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                                Company
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                                Portfolio
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                               Blog
		                            </a>
		                        </li>
		                    </ul>
		                </nav>
		                <p class="copyright pull-right">
		                    &copy; <?php echo '<script'; ?>
>document.write(new Date().getFullYear())<?php echo '</script'; ?>
> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
		                </p>
		            </div>
		        </footer>

		    </div>
		</div>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php echo '<script'; ?>
 type="text/javascript">
	    	$(document).ready(function(){

	        	demo.initChartist();

	        	$.notify({
	            	icon: 'pe-7s-gift',
	            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

	            },{
	                type: 'info',
	                timer: 4000
	            });

	    	});
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
