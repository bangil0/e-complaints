<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-01 23:05:41
         compiled from "application/views/administrator/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111008881455437f2e85e7e2-43042717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d3c344375d4186749422907c030f4ed7edb5dcd' => 
    array (
      0 => 'application/views/administrator/index.tpl',
      1 => 1430489104,
      2 => 'file',
    ),
    '5a0496d1be03a684617aa67f94e3776dac6262db' => 
    array (
      0 => 'application/views/layout/master.tpl',
      1 => 1430493692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111008881455437f2e85e7e2-43042717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55437f2e9fd7e8_28280601',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55437f2e9fd7e8_28280601')) {function content_55437f2e9fd7e8_28280601($_smarty_tpl) {?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>E-Complains</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url();?>
assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url();?>
assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url();?>
assets/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/Chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.easing.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.ulslide.js"><?php echo '</script'; ?>
>
    <!----Calender -------->
    <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/clndr.css" type="text/css" />
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src= "<?php echo base_url();?>
assets/js/moment-2.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/clndr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/site.js"><?php echo '</script'; ?>
>
    <!----End Calender -------->
</head>
<body>			       
    <!-- Header -->
    <?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="main">  
        
    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Dashboard</h1>
                <h4>Overview, stats, chat and more</h4>
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li class="active"><i class="fa fa-home"></i> Home</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Tiles -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="tile tile-orange">
                            <div class="img">
                                <i class="fa fa-comments"></i>
                            </div>
                            <div class="content">
                                <p class="big">128</p>
                                <p class="title">Verifikasi JAIF</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-dark-blue">
                            <div class="img">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="content">
                                <p class="big">+160</p>
                                <p class="title">Verifikasi Pembimbing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-orange">
                            <div class="img">
                                <i class="fa fa-comments"></i>
                            </div>
                            <div class="content">
                                <p class="big">128</p>
                                <p class="title">Belum Aktif</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-dark-blue">
                            <div class="img">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="content">
                                <p class="big">+160</p>
                                <p class="title">Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tile tile-orange">
                            <div class="img">
                                <i class="fa fa-comments"></i>
                            </div>
                            <div class="content">
                                <p class="big">128</p>
                                <p class="title">Mahasiswa Lulus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tile tile-dark-blue">
                            <div class="img">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="content">
                                <p class="big">+160</p>
                                <p class="title">Mahasiswa Tidak Lulus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END Tiles -->
        <footer>
            <p>2013 © FLATY Admin Template.</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->

    </div>
    <div class="copy-right">
        <?php echo $_smarty_tpl->getSubTemplate ('layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>   
</body>
<!-- Addons Plugins -->

    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.resize.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.pie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.stack.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.crosshair.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.tooltip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>


<!-- Addons Scripts -->

</html><?php }} ?>
