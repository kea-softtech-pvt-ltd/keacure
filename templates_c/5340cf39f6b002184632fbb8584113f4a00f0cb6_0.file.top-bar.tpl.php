<?php
/* Smarty version 3.1.29, created on 2019-10-12 14:51:26
  from "D:\php-work\htdocs\keacure\default\templates\administrator\common\top-bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5da19b16604637_79623456',
  'file_dependency' => 
  array (
    '5340cf39f6b002184632fbb8584113f4a00f0cb6' => 
    array (
      0 => 'D:\\php-work\\htdocs\\keacure\\default\\templates\\administrator\\common\\top-bar.tpl',
      1 => 1487270311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da19b16604637_79623456 ($_smarty_tpl) {
?>
 <nav class="navbar navbar-default navbar-fixed">
		            <div class="container-fluid">
		                <div class="navbar-header">
		                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
		                        <span class="sr-only">Toggle navigation</span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                    </button>
		                    <a class="navbar-brand" href="#">Dashboard</a>
		                </div>
		                <div class="collapse navbar-collapse">
		                    <ul class="nav navbar-nav navbar-left">
		                        <li>
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                                <i class="fa fa-dashboard"></i>
										<p class="hidden-lg hidden-md">Dashboard</p>
		                            </a>
		                        </li>
		                        <li class="dropdown">
		                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                                    <i class="fa fa-globe"></i>
		                                    <b class="caret hidden-sm hidden-xs"></b>
		                                    <span class="notification hidden-sm hidden-xs">5</span>
											<p class="hidden-lg hidden-md">
												5 Notifications
												<b class="caret"></b>
											</p>
		                              </a>
		                              <ul class="dropdown-menu">
		                                <li><a href="#">Notification 1</a></li>
		                                <li><a href="#">Notification 2</a></li>
		                                <li><a href="#">Notification 3</a></li>
		                                <li><a href="#">Notification 4</a></li>
		                                <li><a href="#">Another notification</a></li>
		                              </ul>
		                        </li>
		                        <li>
		                           <a href="">
		                                <i class="fa fa-search"></i>
										<p class="hidden-lg hidden-md">Search</p>
		                            </a>
		                        </li>
		                    </ul>

		                    <ul class="nav navbar-nav navbar-right">
		                        <li>
		                           <a href="">
		                               <p>Account</p>
		                            </a>
		                        </li>
		                        <li class="dropdown">
		                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                                    <p>
												Dropdown
												<b class="caret"></b>
											</p>
		                              </a>
		                              <ul class="dropdown-menu">
		                                <li><a href="#">Action</a></li>
		                                <li><a href="#">Another action</a></li>
		                                <li><a href="#">Something</a></li>
		                                <li><a href="#">Another action</a></li>
		                                <li><a href="#">Something</a></li>
		                                <li class="divider"></li>
		                                <li><a href="#">Separated link</a></li>
		                              </ul>
		                        </li>
		                        <li>
		                            <a href="#">
		                                <p>Log out</p>
		                            </a>
		                        </li>
								<li class="separator hidden-lg hidden-md"></li>
		                    </ul>
		                </div>
		            </div>
		        </nav><?php }
}
