<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 23:19:13
         compiled from "application\views\layout\header-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13592555a2fa3c32ce7-96071005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9c2f87a9313816e19385c11040b7263cd5503f' => 
    array (
      0 => 'application\\views\\layout\\header-top.tpl',
      1 => 1432397947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13592555a2fa3c32ce7-96071005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555a2fa3c5c3d4_84952790',
  'variables' => 
  array (
    'status' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a2fa3c5c3d4_84952790')) {function content_555a2fa3c5c3d4_84952790($_smarty_tpl) {?><div class="header-top">
    <!-- start:navbar -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="container">
            <!-- start:navbar-header -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><i class="fa fa-cubes"></i> <strong>E-Com</strong>plaints<strong>.</strong></a>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['status']->value==true) {?>
                <ul class="nav navbar-nav navbar-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>

                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-male"></i>Profil</a></li>
                            <li><a href="#"><i class="fa fa-wrench"></i> Pengaturan</a></li>
                            <li><a href="#"><i class="fa fa-book"></i> Panduan</a></li>
                            <li><a href="<?php echo site_url('auth/logout');?>
"><i class="fa fa-sign-out"></i> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            <?php } else { ?>
                <div class="nav navbar-nav navbar-right top-menu">
                    <a style="color: white"> Masuk</a><a  style="color: white"> Registrasi?</a>
                </div>
            <?php }?>

        </div>
    </nav>
    <!-- end:navbar -->
</div><?php }} ?>
