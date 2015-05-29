<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 22:22:24
         compiled from "application\views\administrator\tingkat_pemerintah\tingkat_kota.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4206555ed60d1ad810-42509496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcbd6aa5619d6e303dbdf7b511dfa6db25750ef5' => 
    array (
      0 => 'application\\views\\administrator\\tingkat_pemerintah\\tingkat_kota.tpl',
      1 => 1432393941,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1432393941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4206555ed60d1ad810-42509496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ed60d375cf8_88067150',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ed60d375cf8_88067150')) {function content_555ed60d375cf8_88067150($_smarty_tpl) {?><!DOCTYPE html>
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
        <li class="active">Tingkat Kota</li>
    </ol>

            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            
    <div class="col-lg-12">
        <h2 class="page-header">
            Tingkat Kota
        </h2>
        <div class="panel">
            <div class="panel-body">
                <?php echo form_open_multipart('administrator/tingkatkota/insert','class="form-horizontal"');?>

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
                    <label class="col-sm-3 col-lg-2 control-label">Nama Kota</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['nama']);?>

                        <?php echo form_error('nama','<p class="help-block">','</p>');?>

                    </div>
                </div>
                    <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Kota/Kabupaten</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_dropdown($_smarty_tpl->tpl_vars['data']->value['provinsi_id']['name'],$_smarty_tpl->tpl_vars['data']->value['provinsi_id']['option'],$_smarty_tpl->tpl_vars['data']->value['provinsi_id']['diseleksi'],'class="form-control"');?>

                        <?php echo form_error('kode_pemerintah','<p class="help-block">','</p>');?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                    
                    <div class="col-sm-9 col-lg-10 controls">
                        <?php echo form_submit('submit',"Simpan",'class="btn btn-flat btn-primary"');?>

                    </div>
                </div>
                <?php echo form_close();?>

            </div>
        </div>
        <br>
        <!-- start:state overview -->
        <section class="panel">
            <div class="panel-body">
                <table class="table table-advance table-responsive" id="example3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Provinsi</th>
                            <th>Modifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['kota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kota']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['TingkatKota']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kota']->key => $_smarty_tpl->tpl_vars['kota']->value) {
$_smarty_tpl->tpl_vars['kota']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
</td>
                                <td><b><?php echo $_smarty_tpl->tpl_vars['kota']->value->Nama;?>
</b></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['kota']->value->ProvinsiID;?>
</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
" title="Delete"><i class="fa fa-trash-o" data-original-title="" title=""></i></a>
                                    </div>
                                    <div class="modal fade bs-example-modal-sm" id ="delete<?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Hapus Akun Masyarakat</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Anda Yakin akan menghapus?</b><br>
                                                    Akun <?php echo $_smarty_tpl->tpl_vars['kota']->value->Nama;?>

                                                    <input type="hidden" name="UserID" value="<?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
">
                                                </div>
                                                <div class="modal-footer">
                                                    <a href='<?php echo site_url('administrator/tingkatkota/delete');?>
/<?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
' type="button" class="btn btn-primary">Ya</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
