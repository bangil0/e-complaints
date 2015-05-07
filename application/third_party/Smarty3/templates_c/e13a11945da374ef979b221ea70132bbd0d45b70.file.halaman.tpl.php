<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-01 04:43:15
         compiled from "application\views\administrator\halaman.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2492354f22556e18f05-54065472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e13a11945da374ef979b221ea70132bbd0d45b70' => 
    array (
      0 => 'application\\views\\administrator\\halaman.tpl',
      1 => 1425159792,
      2 => 'file',
    ),
    '5a55614e90e193056bf3ce16a104c2bab6c20d4f' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1425154967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2492354f22556e18f05-54065472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f22556e1cd84_66901983',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f22556e1cd84_66901983')) {function content_54f22556e1cd84_66901983($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['meta']['title'];?>
 - Sistem Layanan Jasa dan Informasi P2F LIPI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Icon -->
                
        <!--base css styles-->
        
        <!-- font Awesome -->
        
        
        <!--flaty css styles-->
        
        
		
		<!--base css styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/font-awesome/css/font-awesome.min.css">

		<!--page specific css styles-->

		<!--flaty css styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/flaty.css">
		<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/flaty-responsive.css">

        <!-- Addons Style -->
        
<link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.css" />

        <!-- Theme style -->
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- Header -->
        <?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <div class="container" id="main-container">
            <!-- Menu Sidebar -->
            <?php echo $_smarty_tpl->getSubTemplate ('layout/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- End Menu Sidebar -->
            
            <!-- Content -->
            
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
			<li><i class="fa fa-home"></i> Menu Utama &nbsp;</li>
			<span class="divider"><i class="fa fa-angle-right"></i></span>
			<li class="active">Halaman</li>
		</ul>
	</div>
	<!-- END Breadcrumb -->

	<!-- BEGIN Main Content -->
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> Data Halaman</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<div class="btn-toolbar pull-right clearfix">
<div class="btn-group">
<a class="btn btn-circle show-tooltip" title="Add new record" href="#"><i class="fa fa-plus"></i></a>
<a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="fa fa-edit"></i></a>
<a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="fa fa-trash-o"></i></a>
</div>
<div class="btn-group">
<a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
<a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="fa fa-file-text-o"></i></a>
<a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="fa fa-table"></i></a>
</div>
<div class="btn-group">
<a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
</div>
</div>
<br/><br/>
<div class="clearfix"></div>
<div class="table-responsive" style="border:0">
<table class="table table-advance" id="table1">
<thead>
<tr>
<th style="width:18px"><input type="checkbox" /></th>
<th>Rendering engine</th>
<th>Browser</th>
<th>Platform(s)</th>
<th class="text-center">Engine version</th>
<th>CSS grade</th>
</tr>
</thead>
<tbody>
<tr class="table-flag-blue">
<td><input type="checkbox" /></td>
<td>Trident</td>
<td>Internet Explorer 7</td>
<td>Win XP SP2+</td>
<td class="text-center">7</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr>
<td><input type="checkbox" /></td>
<td>Trident</td>
<td><a href="#">AOL browser (AOL desktop)</a></td>
<td>Win XP</td>
<td class="text-center">6</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr class="table-flag-orange">
<td><input type="checkbox" /></td>
<td>Gecko</td>
<td><span class="label label-success">Not Bad</span> Firefox 1.5</td>
<td>Win 98+ / OSX.2+</td>
<td class="text-center">1.8</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr>
<td><input type="checkbox" /></td>
<td>Gecko</td>
<td>Netscape Navigator 9</td>
<td>Win 98+ / OSX.2+</td>
<td class="text-center">1.8</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr>
<td><input type="checkbox" /></td>
<td>Gecko</td>
<td>Seamonkey 1.1</td>
<td>Win 98+ / OSX.2+</td>
<td class="text-center">1.8</td>
<td><span class="label label-warning">B</span></td>
</tr>
<tr>
<td><input type="checkbox" /></td>
<td>Gecko</td>
<td>Mozilla 1.8</td>
<td>Win 98+ / OSX.1+</td>
<td class="text-center">1.8</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr class="table-flag-blue">
<td><input type="checkbox" /></td>
<td>Trident</td>
<td><span class="label label-warning">So crazy!</span> <a href="#">Internet Explorer 6</a></td>
<td>Win 98+</td>
<td class="text-center">6</td>
<td><span class="label label-important">C</span></td>
</tr>
<tr class="table-flag-red">
<td><input type="checkbox" /></td>
<td>Presto</td>
<td>Opera 7.5</td>
<td>Win 95+ / OSX.2+</td>
<td class="text-center">-</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr class="table-flag-red">
<td><input type="checkbox" /></td>
<td>Presto</td>
<td><span class="label label-info">It's Opera!</span> Opera 8.0</td>
<td>Win 95+ / OSX.2+</td>
<td class="text-center">-</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr>
<td><input type="checkbox" /></td>
<td>Gecko</td>
<td><a href="#">Mozilla 1.0</a></td>
<td>Win 95+ / OSX.1+</td>
<td class="text-center">1</td>
<td><span class="label label-warning">B</span></td>
</tr>
<tr>
<td><input type="checkbox" /></td>
<td>Gecko</td>
<td>Mozilla 1.1</td>
<td>Win 95+ / OSX.1+</td>
<td class="text-center">1.1</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr class="table-flag-blue">
<td><input type="checkbox" /></td>
<td>Misc</td>
<td>IE Mobile</td>
<td>Windows Mobile 6</td>
<td class="text-center">-</td>
<td><span class="label label-important">C</span></td>
</tr>
<tr>
<td><input type="checkbox" /></td>
<td>Gecko</td>
<td><a href="#">Mozilla 1.2</a></td>
<td>Win 95+ / OSX.1+</td>
<td class="text-center">1</td>
<td><span class="label label-warning">B</span></td>
</tr>
<tr class="table-flag-red">
<td><input type="checkbox" /></td>
<td>Presto</td>
<td>Opera 7.7</td>
<td>Win 95+ / OSX.2+</td>
<td class="text-center">-</td>
<td><span class="label label-success">A</span></td>
</tr>
<tr>
<td><input type="checkbox" /></td>
<td>Gecko</td>
<td>Mozilla 1.7</td>
<td>Win 98+ / OSX.1+</td>
<td class="text-center">1.8</td>
<td><span class="label label-success">A</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- END Main Content -->

	<footer>
	<p>2013 © FLATY Admin Template.</p>
	</footer>

	<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->

            <!-- End Content -->
        </div>
        <!-- Modal -->    
        <!-- End Modal -->
        


<!--page specific plugin scripts-->


        <!-- jQuery 2.0.2 -->
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="assets/assets/jquery/jquery-2.1.1.min.js"><\/script>')<?php echo '</script'; ?>
>
        <!-- Bootstrap main  -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/jquery-cookie/jquery.cookie.js"><?php echo '</script'; ?>
>

        <!--flaty scripts-->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/flaty.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/flaty-demo-codes.js"><?php echo '</script'; ?>
>
        
        <!-- Addons Plugins -->
        
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/data-tables/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.js"><?php echo '</script'; ?>
>


        <!-- Addons Scripts -->
        
    </body>
</html><?php }} ?>
