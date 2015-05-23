<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 01:02:17
         compiled from "application\views\administrator\tingkatan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22021554cb618aff2f5-52735673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6bedbdb0e921f5753face5c87f44883f5b88340' => 
    array (
      0 => 'application\\views\\administrator\\tingkatan.tpl',
      1 => 1431127442,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1431977657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22021554cb618aff2f5-52735673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554cb618ce76e6_68620819',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554cb618ce76e6_68620819')) {function content_554cb618ce76e6_68620819($_smarty_tpl) {?><!DOCTYPE html>
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
            
            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            
    <div class="wrap">  		 
        <div class="column_left" style="padding-right:60px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-body">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sekilas</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pemerintah Pusat</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Pemerintah Provinsi</a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Pemerintah Kota</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div id="container" style="width:100%; height:400px;"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Informasi Pemerintah Pusat</h3>
                                            <?php echo form_open_multipart('administrator/tingkatan/insertPusat','class="form-horizontal"');?>

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
                                                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['nama_pusat']);?>

                                                    <?php echo form_error('nama_pusat','<p class="help-block-red">','</p>');?>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                                                
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    <?php echo form_submit('submit',"Simpan",'class="btn btn-flat btn-primary"');?>

                                                </div>
                                            </div>
                                            <?php echo form_close();?>

                                            <table class="table table-advance table-responsive" id="example1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Modifikasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  $_smarty_tpl->tpl_vars['pusat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pusat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['getPusat']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pusat']->key => $_smarty_tpl->tpl_vars['pusat']->value) {
$_smarty_tpl->tpl_vars['pusat']->_loop = true;
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['pusat']->value->ID;?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['pusat']->value->Nama;?>
</td>
                                                            <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Hapus</button></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Informasi Pemerintah Provinsi</h3>
                                            <?php echo form_open_multipart('administrator/tingkatan/insertProvinsi','class="form-horizontal"');?>

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
                                                <label class="col-sm-3 col-lg-2 control-label">Nama Provinsi</label>
                                                
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['nama_provinsi']);?>

                                                    <?php echo form_error('nama_provinsi','<p class="help-block-red">','</p>');?>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                                                
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    <?php echo form_submit('submit',"Simpan",'class="btn btn-flat btn-primary"');?>

                                                </div>
                                            </div>
                                            <?php echo form_close();?>


                                            <table class="table table-advance table-responsive" id="example2">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Modifikasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  $_smarty_tpl->tpl_vars['provinsi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provinsi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['getProvinsi']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provinsi']->key => $_smarty_tpl->tpl_vars['provinsi']->value) {
$_smarty_tpl->tpl_vars['provinsi']->_loop = true;
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['provinsi']->value->ID;?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['provinsi']->value->Nama;?>
</td>
                                                            <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Hapus</button></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Informasi Pemerintah Kota</h3>
                                            <?php echo form_open_multipart('administrator/tingkatan/insertKota','class="form-horizontal"');?>

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
                                                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['nama_kota']);?>

                                                    <?php echo form_error('nama_kota','<p class="help-block-red">','</p>');?>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                                                
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    <?php echo form_submit('submit',"Simpan Kota",'class="btn btn-flat btn-primary"');?>

                                                </div>
                                            </div>
                                            <?php echo form_close();?>


                                            <table class="table table-advance table-responsive" id="example3">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Modifikasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  $_smarty_tpl->tpl_vars['kota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kota']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['getKota']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kota']->key => $_smarty_tpl->tpl_vars['kota']->value) {
$_smarty_tpl->tpl_vars['kota']->_loop = true;
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['kota']->value->Nama;?>
</td>
                                                            <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Hapus</button></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>		
                </div>
            </div>
        </div>
        <div class="column_right">
            <div class="column_middle_grid1">
                <div class="profile_picture">
                    <a href=""><img src="<?php echo base_url();?>
assets/images/no-img.png" alt="">	</a>		         
                    <div class="profile_picture_name">
                        <h2>Administrator</h2>
                        <p>Superuser</p>
                    </div>
                    <span><a href="#"> <img src="<?php echo base_url();?>
assets/images/follow_user.png" alt=""> </a></span>
                </div>
                <div class="articles_list">
                    <ul>
                        <li><a href="#" class="red"> <img src="<?php echo base_url();?>
assets/images/comments.png" alt=""> 23</a></li>
                        <li><a href="#" class="purple"> <img src="<?php echo base_url();?>
assets/images/views.png" alt=""> 841</a></li>
                        <li><a href="#" class="yellow"> <img src="<?php echo base_url();?>
assets/images/likes.png" alt=""> 49</a></li>
                        <div class="clear"></div>	
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
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
 type="text/javascript">
        $(document).ready(function () {
            $('#example1').DataTable();
            $('#example2').DataTable();
            $('#example3').DataTable();
        });
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Tingkat Pemerintahan'
                },
                xAxis: {
                    categories: ['Pemerintah Pusat', 'Pemerintah Provinsi', 'Pemerintah Kota']
                },
                yAxis: {
                    title: {
                        text: 'Fruit eaten'
                    }
                },
                series: [{
                        name: 'Jane',
                        data: [1, 0, 4]
                    }, {
                        name: 'John',
                        data: [5, 7, 3]
                    }]
            });
        });
    <?php echo '</script'; ?>
>

</body>
</html>	<?php }} ?>
