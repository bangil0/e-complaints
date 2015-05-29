<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 23:12:18
         compiled from "application\views\layout\menu_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12498554c9d59d7fd57-04037900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea468367ce647f3e9aee4787e4b2b6d2fe870f2d' => 
    array (
      0 => 'application\\views\\layout\\menu_admin.tpl',
      1 => 1432397427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12498554c9d59d7fd57-04037900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554c9d59de49f3_87200691',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c9d59de49f3_87200691')) {function content_554c9d59de49f3_87200691($_smarty_tpl) {?><div class="navbar-header">
    <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <strong>MENU</strong>
    </button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="<?php echo site_url('administrator');?>
">
                <div class="text-center">
                    <i class="fa fa-home fa-3x"></i><br>
                    Beranda
                </div>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-laptop fa-3x"></i><br>
                    Akun Pemerintah <span class="caret"></span>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('administrator/pemerintahkota');?>
"><i class="fa fa-lemon-o"></i> Pemerintah Kota</a></li>
                <li><a href="<?php echo site_url('administrator/pemerintahprovinsi');?>
"><i class="fa fa-puzzle-piece"></i> Pemerintah Provinsi</a></li>
                <li><a href="<?php echo site_url('administrator/pemerintahpusat');?>
"><i class="fa fa-file"></i> Pemerintah Pusat</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url('administrator/user_masyarakat');?>
">
                <div class="text-center">
                    <i class="fa fa-users fa-3x"></i><br>
                    Akun Masyarakat
                </div>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-list fa-3x"></i><br>
                    Tingkatan Daerah <span class="caret"></span>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('administrator/tingkatkota');?>
"><i class="fa fa-list-alt"></i> Tingkat Kota</a></li>
                <li><a href="<?php echo site_url('administrator/tingkatprovinsi');?>
"><i class="fa fa-list-ul"></i> Tingkat Provinsi</a></li>
                <li><a href="<?php echo site_url('administrator/tingkatpusat');?>
"><i class="fa fa-columns"></i> Tingkat Pusat</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-comments-o fa-3x"></i><br>
                    Complaint <span class="caret"></span>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('administrator/datakeluhan');?>
"><i class="fa fa-table"></i> Data Keluhan</a></li>
                <li><a href="<?php echo site_url('administrator/datatanggapan');?>
"><i class="fa fa-table"></i> Data Tanggapan</a></li>
                <li><a href="<?php echo site_url('administrator/datakategori');?>
"><i class="fa fa-table"></i> Data Kategori</a></li>
            </ul>
        </li>
        <li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-bar-chart-o fa-3x"></i><br>
                    Report & Graph <span class="caret"></span>
                </div>
            </a>
        </li>
    </ul>
</div><!-- /.navbar-collapse --><?php }} ?>
