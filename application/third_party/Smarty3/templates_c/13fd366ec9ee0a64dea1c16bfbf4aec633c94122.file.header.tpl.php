<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 15:49:57
         compiled from "application/views/layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51399740551e8bb5272272-71089347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13fd366ec9ee0a64dea1c16bfbf4aec633c94122' => 
    array (
      0 => 'application/views/layout/header.tpl',
      1 => 1428846078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51399740551e8bb5272272-71089347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e8bb531e569_81374311',
  'variables' => 
  array (
    'user' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e8bb531e569_81374311')) {function content_551e8bb531e569_81374311($_smarty_tpl) {?><div id="navbar" class="navbar">
    <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
        <span class="fa fa-bars"></span>
    </button>
    <a class="navbar-brand" href="#">
        <small>
            Sistem Informasi Pelayanan Fisika LIPI
        </small>
    </a>
    <!-- BEGIN Navbar Buttons -->
    <ul class="nav flaty-nav pull-right">
        <!-- BEGIN Button Tasks -->
        <li class="hidden-xs">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge badge-warning">4</span>
            </a>

            <!-- BEGIN Tasks Dropdown -->
            <ul class="dropdown-navbar dropdown-menu">
                <li class="nav-header">
                    <i class="fa fa-check"></i>
                    4 Tasks to complete
                </li>
                <li>
                    <a href="#">
                        <div class="clearfix">
                            <span class="pull-left">Software Update</span>
                            <span class="pull-right">75%</span>
                        </div>

                        <div class="progress progress-mini">
                            <div style="width:75%" class="progress-bar progress-bar-warning"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="clearfix">
                            <span class="pull-left">Transfer To New Server</span>
                            <span class="pull-right">45%</span>
                        </div>

                        <div class="progress progress-mini">
                            <div style="width:45%" class="progress-bar progress-bar-danger"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="clearfix">
                            <span class="pull-left">Bug Fixes</span>
                            <span class="pull-right">20%</span>
                        </div>

                        <div class="progress progress-mini">
                            <div style="width:20%" class="progress-bar"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="clearfix">
                            <span class="pull-left">Writing Documentation</span>
                            <span class="pull-right">85%</span>
                        </div>

                        <div class="progress progress-mini progress-striped active">
                            <div style="width:85%" class="progress-bar progress-bar-success"></div>
                        </div>
                    </a>
                </li>
                <li class="more">
                    <a href="#">See tasks with details</a>
                </li>
            </ul>
            <!-- END Tasks Dropdown -->
        </li>
        <!-- END Button Tasks -->
        <!-- BEGIN Button Notifications -->
        <li class="hidden-xs">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-important">5</span>
            </a>
            <!-- BEGIN Notifications Dropdown -->
            <ul class="dropdown-navbar dropdown-menu">
                <li class="nav-header">
                    <i class="fa fa-warning"></i>
                    5 Notifications
                </li>
                <li class="notify">
                    <a href="#">
                        <i class="fa fa-comment orange"></i>
                        <p>New Comments</p>
                        <span class="badge badge-warning">4</span>
                    </a>
                </li>
                <li class="notify">
                    <a href="#">
                        <i class="fa fa-twitter blue"></i>
                        <p>New Twitter followers</p>
                        <span class="badge badge-info">7</span>
                    </a>
                </li>
                <li class="notify">
                    <a href="#">
                        <img src="img/demo/avatar/avatar2.jpg" alt="Alex" />
                        <p>David would like to become moderator.</p>
                    </a>
                </li>
                <li class="notify">
                    <a href="#">
                        <i class="fa fa-bug pink"></i>
                        <p>New bug in program!</p>
                    </a>
                </li>
                <li class="notify">
                    <a href="#">
                        <i class="fa fa-shopping-cart green"></i>
                        <p>You have some new orders</p>
                        <span class="badge badge-success">+10</span>
                    </a>
                </li>
                <li class="more">
                    <a href="#">See all notifications</a>
                </li>
            </ul>
            <!-- END Notifications Dropdown -->
        </li>
        <!-- END Button Notifications -->
        <!-- BEGIN Button Messages -->
        <li class="hidden-xs">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-success">3</span>
            </a>
            <!-- BEGIN Messages Dropdown -->
            <ul class="dropdown-navbar dropdown-menu">
                <li class="nav-header">
                    <i class="fa fa-comments"></i>
                    3 Messages
                </li>
                <li class="msg">
                    <a href="#">
                        <img src="img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
                        <div>
                            <span class="msg-title">Sarah</span>
                            <span class="msg-time">
                                <i class="fa fa-clock-o"></i>
                                <span>a moment ago</span>
                            </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </a>
                </li>
                <li class="msg">
                    <a href="#">
                        <img src="img/demo/avatar/avatar4.jpg" alt="Emma's Avatar" />
                        <div>
                            <span class="msg-title">Emma</span>
                            <span class="msg-time">
                                <i class="fa fa-clock-o"></i>
                                <span>2 Days ago</span>
                            </span>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                    </a>
                </li>
                <li class="msg">
                    <a href="#">
                        <img src="img/demo/avatar/avatar5.jpg" alt="John's Avatar" />
                        <div>
                            <span class="msg-title">John</span>
                            <span class="msg-time">
                                <i class="fa fa-clock-o"></i>
                                <span>8:24 PM</span>
                            </span>
                        </div>
                        <p>Duis aute irure dolor in reprehenderit in ...</p>
                    </a>
                </li>
                <li class="more">
                    <a href="#">See all messages</a>
                </li>
            </ul>
            <!-- END Notifications Dropdown -->
        </li>
        <!-- END Button Messages -->
        <!-- BEGIN Button User -->
        <li class="user-profile">
            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                <img class="nav-user-photo" src="<?php echo base_url();?>
assets/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value->photo;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->photo;?>
" />
                <span class="hhh" id="user_info">
                    <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>

                    <?php }?>
                </span>
                <i class="fa fa-caret-down"></i>
            </a>

            <!-- BEGIN User Dropdown -->
            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                <li class="nav-header">
                    <i class="fa fa-clock-o"></i>
                    Terakhir login <?php echo date('h:m',$_smarty_tpl->tpl_vars['user']->value->last_login);?>

                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-cog"></i>
                        Account Settings
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        Edit Profile
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-question"></i>
                        Help
                    </a>
                </li>
                <li class="divider visible-xs"></li>

                <li class="visible-xs">
                    <a href="#">
                        <i class="fa fa-tasks"></i>
                        Tasks
                        <span class="badge badge-warning">4</span>
                    </a>
                </li>
                <li class="visible-xs">
                    <a href="#">
                        <i class="fa fa-bell"></i>
                        Notifications
                        <span class="badge badge-important">8</span>
                    </a>
                </li>
                <li class="visible-xs">
                    <a href="#">
                        <i class="fa fa-envelope"></i>
                        Messages
                        <span class="badge badge-success">5</span>
                    </a>
                </li>
                <li class="divider"></li>

                <li>
                    <a href="#">
                        <i class="fa fa-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
            <!-- BEGIN User Dropdown -->
        </li>
        <!-- END Button User -->
    </ul>
    <!-- END Navbar Buttons -->
</div>
<!-- END Navbar --><?php }} ?>
