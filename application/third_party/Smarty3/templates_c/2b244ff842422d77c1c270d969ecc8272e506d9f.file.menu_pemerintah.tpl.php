<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 17:24:05
         compiled from "application\views\layout\menu_pemerintah.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23376555f79ed45c7e0-77995121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b244ff842422d77c1c270d969ecc8272e506d9f' => 
    array (
      0 => 'application\\views\\layout\\menu_pemerintah.tpl',
      1 => 1433499843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23376555f79ed45c7e0-77995121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555f79ed4bd092_14120887',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f79ed4bd092_14120887')) {function content_555f79ed4bd092_14120887($_smarty_tpl) {?><div class="navbar-header">
    <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <strong>MENU</strong>
    </button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="<?php echo base_url();?>
pemerintah">
                <div class="text-center">
                    <i class="fa fa-home fa-3x"></i><br>
                    Beranda
                </div>
            </a>
        </li>
        <li class="dropdown">
            <a href="<?php echo site_url('pemerintah/keluhan');?>
">
                <div class="text-center">
                    <i class="fa fa-archive fa-3x"></i><br>
                    Keluhan Masuk
                </div>
            </a>
        </li>
        <li class="dropdown">
            <a href="<?php echo site_url('pemerintah/history');?>
">
                <div class="text-center">
                    <i class="fa fa-history fa-3x"></i><br>
                    History Tanggapan 
                </div>
            </a>
        </li>

        <li class="dropdown">
            <a href="<?php echo site_url('pemerintah/statistik');?>
">
                <div class="text-center">
                    <i class="fa fa-bar-chart-o fa-3x"></i><br>
                    Statistik
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('pemerintah/kebijakan');?>
">
                <div class="text-center">
                    <i class="fa fa-exclamation-circle fa-3x"></i><br>
                    Kebijakan
                </div>
            </a>
        </li>

    </ul>
</div><!-- /.navbar-collapse --><?php }} ?>
