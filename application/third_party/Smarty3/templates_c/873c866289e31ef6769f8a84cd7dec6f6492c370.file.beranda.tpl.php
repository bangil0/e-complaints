<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-30 02:10:46
         compiled from "application\views\masyarakat\beranda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31515555f7df7b918f8-85156824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '873c866289e31ef6769f8a84cd7dec6f6492c370' => 
    array (
      0 => 'application\\views\\masyarakat\\beranda.tpl',
      1 => 1432926637,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1432322939,
      2 => 'file',
    ),
    '61f4700e2f81f7b064450ead3e29b3f5bd448142' => 
    array (
      0 => 'application\\views\\administrator\\widget_right.tpl',
      1 => 1432057109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31515555f7df7b918f8-85156824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555f7df7da6229_40192885',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f7df7da6229_40192885')) {function content_555f7df7da6229_40192885($_smarty_tpl) {?><!DOCTYPE html>
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
assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
assets/css/owl.transitions.css">


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
        <li class="active">Beranda</li>
    </ol>

            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            
    <div class="col-lg-8">
        <!-- start:state overview -->
        <div class="panel panel-body">
            <h3 align="left"><img src="<?php echo base_url();?>
assets/images/keluhan2.png" alt=""> Ajukan Keluhan Anda</h3>
            <br>
            <form class="form-horizontal" action="<?php echo site_url('masyarakat/insert');?>
" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea name="isikeluhan" class="form-control" placeholder="Apa keluhan anda ?"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <select class="form-control" name="kategori_keluhan">
                            <option>-- Pilih Kategori --</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['kategori']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6" style="top: 10px;">
                    <label for="exampleInputFile">Tingkat Pemerintahan</label> 
                    <div class="radio">
                        <label><input type="radio" id="kotacheck" name="rdtingkat" value="1">Pemerintah KOTA/KABUPATEN</label>
                        <label><input type="radio" id="provinsicheck" name="rdtingkat" value="2">Pemerintah PROVINSI</label><br>
                        <label><input type="radio" id="pusatcheck" name="rdtingkat" value="3">Pemerintah PUSAT</label>
                    </div>
                </div>
                <div class="col-md-6" style="top: 10px;">
                    <label>Pilih Kota/Kabupaten, Provinsi, Pusat</label>
                    <div class="dropdown">
                        <select class="form-control" name="kota" id="kotadropdown">
                            <option>-- Pilih Kota/Kabupaten --</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['kota']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="dropdown" style="top:10px;">
                        <select class="form-control" name="provinsi" id="provinsidropdown">
                            <option>-- Pilih Provinsi --</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['provinsi']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="dropdown" style="top:20px;">
                        <select class="form-control" name="pusat" id="pusatdropdown">
                            <option>-- Pilih Pusat --</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['pusat']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <br>&nbsp;<br><br><br><br>
                <div class="col-md-12">
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-primary btn-drop btn-lg">Laporkan Keluhan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel panel-body">
            Select os :<br>
            Kota
            <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="kotaCheck"/>Provinsi
            <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="provinsiCheck"/>Pusat
            <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="pusatCheck"/>
            <div id="ifkota" style="display:none">
                <select name="kota">
                    <option>Kota</option>
                </select>
            </div>
            <div id="ifprovinsi" style="display:none">
                <select name="provinsi">
                    <option>provinsi</option>
                </select>
            </div>
            <div id="ifpusat" style="display:none">
                <select name="pusat">
                    <option>pusat</option>
                </select>
            </div>
        </div>
        <div class="border-head">
            <h3><strong> Keluhan </strong> Terkini</h3>
        </div>
        <div class="panel panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Keluahan</a></li>
                <li><a href="#tanggapan" data-toggle="tab">Tanggapan</a></li>
                <li><a href="#peta" data-toggle="tab">Peta</a></li>

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <?php  $_smarty_tpl->tpl_vars['keluhan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keluhan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['keluhan_terkini']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['keluhan']->key => $_smarty_tpl->tpl_vars['keluhan']->value) {
$_smarty_tpl->tpl_vars['keluhan']->_loop = true;
?>
                        <div>
                            <h2><?php echo $_smarty_tpl->tpl_vars['keluhan']->value->UserID;?>
</h2>
                            <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->Tanggal;?>

                        </div>
                        <div>
                            <h4><?php echo $_smarty_tpl->tpl_vars['keluhan']->value->IsiKeluhan;?>
</h4>
                        </div>
                        <div>
                            <h6>   
                                <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->KodeTingkatan;?>

                                <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->Tipe;?>

                                <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->KategoriID;?>

                                <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->StatusKeluhan;?>

                            </h6>
                        </div>
                        <br>
                    <?php } ?>
                </div>
                <div class="tab-pane" id="tanggapan">
                    <?php  $_smarty_tpl->tpl_vars['keluhan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keluhan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['keluhan_terkini']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['keluhan']->key => $_smarty_tpl->tpl_vars['keluhan']->value) {
$_smarty_tpl->tpl_vars['keluhan']->_loop = true;
?>
                        <div>
                            <h2><?php echo $_smarty_tpl->tpl_vars['keluhan']->value->UserID;?>
</h2>
                            <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->Tanggal;?>

                        </div>
                        <div>
                            <h4><?php echo $_smarty_tpl->tpl_vars['keluhan']->value->IsiKeluhan;?>
</h4>
                        </div>
                        <div>
                            <h6>   
                                <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->KodeTingkatan;?>

                                <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->Tipe;?>

                                <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->KategoriID;?>

                                <?php echo $_smarty_tpl->tpl_vars['keluhan']->value->StatusKeluhan;?>

                            </h6>
                        </div>
                        <br>
                    <?php } ?>
                </div>
                <div class="tab-pane" id="messages">...
                    <input type="text" name="address" required>
                </div>
                <div class="tab-pane" id="settings">...</div>
            </div>
        </div>
        <!-- end:state overview -->
    </div>
    <?php /*  Call merged included template "administrator/widget_right.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("administrator/widget_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '31515555f7df7b918f8-85156824');
content_5568b9b683f2c8_28257002($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "administrator/widget_right.tpl" */?>

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
 src="<?php echo base_url();?>
assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/owl.carousel.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.customSelect.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/sparkline-chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/easy-pie-chart.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/count.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="http://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
                $(document).ready(function () {
                    //default
                    $("#kotadropdown").prop("disabled", true);
                    $("#provinsidropdown").prop("disabled", true);
                    $("#pusatdropdown").prop("disabled", true);

                    // cek kota
                    $("#kotacheck").click(function () {
                        $("#kotadropdown").prop("disabled", false);
                        $("#provinsidropdown").prop("disabled", true);
                        $("#pusatdropdown").prop("disabled", true);
                    });
                    // cek provinsi
                    $("#provinsicheck").click(function () {
                        $("#kotadropdown").prop("disabled", true);
                        $("#provinsidropdown").prop("disabled", false);
                        $("#pusatdropdown").prop("disabled", true);
                    });
                    // cek kota
                    $("#pusatcheck").click(function () {
                        $("#kotadropdown").prop("disabled", true);
                        $("#provinsidropdown").prop("disabled", true);
                        $("#pusatdropdown").prop("disabled", false);
                    });
                });
    <?php echo '</script'; ?>
>

</body>
</html>	<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-30 02:10:46
         compiled from "application\views\administrator\widget_right.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5568b9b683f2c8_28257002')) {function content_5568b9b683f2c8_28257002($_smarty_tpl) {?><div class="col-lg-4">
    <!-- start:user info -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <header class="panel-title">
                <div class="text-center">
                    <strong>User</strong> Author<strong>.</strong>
                </div>
            </header>
        </div>
        <div class="panel-body">
            <div class="text-center" id="author">
                <img src="img/user/avatar-3.jpg">
                <h3>John Doe</h3>
                <small class="label label-warning">Administrator</small>
                <p>SuperUser</p>
                <p class="sosmed-author">
                    <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"></i></a>
                </p>
            </div>
        </div>
    </div>
    <!-- end:user info -->

    <!-- start:user info table -->
    <section class="panel">
        <div class="panel-body">
            <a href="#" class="task-thumb">
                <img src="img/user/avatar-1.jpg" alt="">
            </a>
            <div class="task-thumb-details">
                <h1><a href="#">Chef Marinka</a></h1>
                <p>Senior Chef Master</p>
            </div>
        </div>
        <table class="table table-hover personal-task">
            <tbody>
                <tr>
                    <td>
                        <i class=" fa fa-tasks"></i>
                    </td>
                    <td>New Task Issued</td>
                    <td> 02</td>
                </tr>
                <tr>
                    <td>
                        <i class="fa fa-exclamation-triangle"></i>
                    </td>
                    <td>Task Pending</td>
                    <td> 14</td>
                </tr>
                <tr>
                    <td>
                        <i class="fa fa-envelope"></i>
                    </td>
                    <td>Inbox</td>
                    <td> 45</td>
                </tr>
                <tr>
                    <td>
                        <i class=" fa fa-bell-o"></i>
                    </td>
                    <td>New Notification</td>
                    <td> 09</td>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- end:user info table -->
</div><?php }} ?>
