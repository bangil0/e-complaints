<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-04 13:49:27
         compiled from "application\views\layout\menu_masyarakat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8795554c9db38c2c68-44349292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba64b5752595ccbdcc2b9d7bbb345e3085cea663' => 
    array (
      0 => 'application\\views\\layout\\menu_masyarakat.tpl',
      1 => 1433400347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8795554c9db38c2c68-44349292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554c9db397ec30_11091692',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c9db397ec30_11091692')) {function content_554c9db397ec30_11091692($_smarty_tpl) {?><div class="navbar-header">
    <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <strong>MENU</strong>
    </button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="<?php echo site_url('masyarakat');?>
">
                <div class="text-center">
                    <i class="fa fa-dashboard fa-3x"></i><br>
                    Beranda
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('masyarakat/keluhan');?>
">
                <div class="text-center">
                    <i class="fa fa-location-arrow fa-3x"></i><br>
                    Keluhan Saya
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('masyarakat/grafik');?>
">
                <div class="text-center">
                    <i class="fa fa-location-arrow fa-3x"></i><br>
                    Grafik Keluhan
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('masyarakat/kebijakan');?>
">
                <div class="text-center">
                    <i class="fa fa-location-arrow fa-3x"></i><br>
                    Kebijakan
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('masyarakat/panduan');?>
">
                <div class="text-center">
                    <i class="fa fa-location-arrow fa-3x"></i><br>
                    Panduan
                </div>
            </a>
        </li>
    </ul>
</div><!-- /.navbar-collapse --><?php }} ?>
