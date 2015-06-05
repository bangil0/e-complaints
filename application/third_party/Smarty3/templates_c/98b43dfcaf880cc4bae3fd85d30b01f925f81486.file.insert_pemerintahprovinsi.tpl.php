<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-06 03:15:29
         compiled from "application\views\administrator\user_pemerintah\insert_pemerintahprovinsi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15857555ea19c2c2b16-20936914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b43dfcaf880cc4bae3fd85d30b01f925f81486' => 
    array (
      0 => 'application\\views\\administrator\\user_pemerintah\\insert_pemerintahprovinsi.tpl',
      1 => 1432230019,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1433494243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15857555ea19c2c2b16-20936914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ea19c5b2115_47991158',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ea19c5b2115_47991158')) {function content_555ea19c5b2115_47991158($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>E-Complaints</title>
        <meta name="description" content="E-Complaint Responsive Admin Templates" />
        <meta name="keywords" content="resposinve, admin dashboard, admin page, admin template" />
        <meta name="author" content="Candra Dwi Waskito" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/bootstrap-reset.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/style.css">

        <!-- css hanya untuk di page ini saja -->
    
    <link href="<?php echo base_url();?>
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="all"/>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
    <!-- start:wrapper -->
    <div id="wrapper">
        <!-- Header Top -->
        <?php echo $_smarty_tpl->getSubTemplate ('layout/header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- start:header -->
        <?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- end:header -->

        <!-- start:main -->
        <div class="container">
            <div id="main">
                <!-- start:breadcrumb -->
            
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Akun Pemerintah</li>
        <li class="active">Insert Pemerintah Provinsi</li>
    </ol>

            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            
    <div class="col-lg-12">
        <h2 class="page-header">
            Tambah Akun Pemerintah Provinsi
        </h2>
        <!-- start:state overview -->
        <section class="panel">
            <div class="panel-body">
                <?php echo form_open_multipart('administrator/pemerintahprovinsi/insert','class="form-horizontal"');?>

                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['message'])) {?>
                    <div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['message']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                        <?php } ?>
                    </div>
                <?php }?>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Nama</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['nama']);?>

                        <?php echo form_error('nama','<p class="help-block">','</p>');?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Email</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['email']);?>

                        <?php echo form_error('email','<p class="help-block">','</p>');?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Provinsi</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_dropdown($_smarty_tpl->tpl_vars['data']->value['kode_pemerintah']['name'],$_smarty_tpl->tpl_vars['data']->value['kode_pemerintah']['option'],$_smarty_tpl->tpl_vars['data']->value['kode_pemerintah']['diseleksi'],'class="form-control"');?>

                        <?php echo form_error('kode_pemerintah','<p class="help-block">','</p>');?>

                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Logo</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['logo']);?>

                        <?php echo form_error('logo','<p class="help-block">','</p>');?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Password</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['password']);?>

                        <?php echo form_error('password','<p class="help-block">','</p>');?>

                    </div>
                </div>
                    <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Konfirmasi Password</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['password_confirm']);?>

                        <?php echo form_error('password_confirm','<p class="help-block">','</p>');?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_submit('submit',"Simpan Akun",'class="btn btn-flat btn-primary"');?>

                    </div>
                </div>
                <?php echo form_close();?>

            </div>
        </section>
    </div>
    

        </div>
        <div class="row">
        
    </div>
</div>
</div>
<!-- end:main -->

<!-- start:footer -->
<?php echo $_smarty_tpl->getSubTemplate ('layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('layout/footer-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- end:footer -->
</div>
<!-- end:wrapper -->

<!-- start:javascript -->
<!-- javascript default for all pages-->
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- javascript for Srikandi admin -->
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/themes.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.nicescroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.sparkline.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 class="include" type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.dcjqaccordion.2.7.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/respond.min.js" ><?php echo '</script'; ?>
>
<!-- end:javascript -->


    <?php echo '<script'; ?>
 src="http://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/data-tables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#example3').DataTable();
        });
    <?php echo '</script'; ?>
>

</body>
</html>	<?php }} ?>
