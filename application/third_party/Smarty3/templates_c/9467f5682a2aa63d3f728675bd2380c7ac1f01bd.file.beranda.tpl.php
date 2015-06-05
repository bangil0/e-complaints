<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 16:13:47
         compiled from "application\views\pemerintah\beranda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30419554cfb3f5bd192-42357450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9467f5682a2aa63d3f728675bd2380c7ac1f01bd' => 
    array (
      0 => 'application\\views\\pemerintah\\beranda.tpl',
      1 => 1433491398,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1433494243,
      2 => 'file',
    ),
    'd8f77aa996afcd7d39ca6ae924a75d124885f197' => 
    array (
      0 => 'application\\views\\pemerintah\\widget_right.tpl',
      1 => 1433486785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30419554cfb3f5bd192-42357450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554cfb3f6bb057_96010663',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554cfb3f6bb057_96010663')) {function content_554cfb3f6bb057_96010663($_smarty_tpl) {?><!DOCTYPE html>
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
        <div class="border-head">
            <h3><strong>Jumlah Keluhan</strong> Berdasarkan Status</h3>
        </div>
        <div class="row state-overview">
            <div class="col-lg-4 col-sm-4">
                <section class="panel">
                    <div class="symbol red">
                        <i class="fa fa-frown-o"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                            0
                        </h1>
                        <p>Belum</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-sm-4">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-spinner"></i>
                    </div>
                    <div class="value">
                        <h1 class="count2">
                            0
                        </h1>
                        <p>Proses</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-sm-4">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="value">
                        <h1 class="count3">
                            0
                        </h1>
                        <p>Selesai</p>
                    </div>
                </section>
            </div>
        </div>
        <div class="panel panel-body">
            <div id="container"></div>
        </div>
        <div class="panel panel-body">
            <div id="container2"></div>
        </div>
        <!-- end:state overview -->
    </div>
    <?php /*  Call merged included template "pemerintah/widget_right.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("pemerintah/widget_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '30419554cfb3f5bd192-42357450');
content_5571684c1274b2_96528455($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pemerintah/widget_right.tpl" */?>

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

        function countBelum(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count'), run_count = 1,
                    int_speed = 24;
            var int = setInterval(function () {
                if (run_count < div_by) {
                    $display.text(speed * run_count);
                    run_count++;
                } else if (parseInt($display.text()) < count) {
                    var curr_count = parseInt($display.text()) + 1;
                    $display.text(curr_count);
                } else {
                    clearInterval(int);
                }
            }, int_speed);
        }
        function countProses(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count2'), run_count = 1,
                    int_speed = 24;
            var int = setInterval(function () {
                if (run_count < div_by) {
                    $display.text(speed * run_count);
                    run_count++;
                } else if (parseInt($display.text()) < count) {
                    var curr_count = parseInt($display.text()) + 1;
                    $display.text(curr_count);
                } else {
                    clearInterval(int);
                }
            }, int_speed);
        }
        function countSelesai(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count3'), run_count = 1,
                    int_speed = 24;
            var int = setInterval(function () {
                if (run_count < div_by) {
                    $display.text(speed * run_count);
                    run_count++;
                } else if (parseInt($display.text()) < count) {
                    var curr_count = parseInt($display.text()) + 1;
                    $display.text(curr_count);
                } else {
                    clearInterval(int);
                }
            }, int_speed);
        }

        countBelum(<?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['belum'];?>
);
        countProses(<?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['proses'];?>
);
        countSelesai(<?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['selesai'];?>
);
        
        // chart pertama
        $(function () {
            $('#container').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Status'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Total',
                        data: [
                            ['Belum', <?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['belum'];?>
],
                            ['Proses', <?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['proses'];?>
],
                            ['Selesai', <?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['selesai'];?>
],
                        ]
                    }]
            });
        });
        // chart kedua
        $(function () {
            $('#container2').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Kategori'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Total',
                        data: [
        <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perkategori']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                            ['<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
', <?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
],
        <?php } ?>
                        ]
                    }]
            });
        });
    <?php echo '</script'; ?>
>

</body>
</html>	<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 16:13:48
         compiled from "application\views\pemerintah\widget_right.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5571684c1274b2_96528455')) {function content_5571684c1274b2_96528455($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['identitas']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <div class="col-lg-4">
        <!-- start:user info -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <header class="panel-title">
                    <div class="text-center">
                        <strong>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value->Nama=='') {?>
                                Belum Ada Nama
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>

                            <?php }?>
                        </strong>
                    </div>
                </header>
            </div>
            <div class="panel-body">
                <div class="text-center" id="author">
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->Logo=='') {?>
                        <img src="<?php echo base_url();?>
assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive" width="150">
                    <?php } else { ?>
                        <img src="<?php echo base_url();?>
assets/img/<?php echo $_smarty_tpl->tpl_vars['row']->value->Logo;?>
" class="img-center img-thumbnail img-responsive" width="150">
                    <?php }?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>
</h3>
                    <small class="label label-info">Terakhir login <?php echo date('h:m',$_smarty_tpl->tpl_vars['user']->value->last_login);?>
</small>
                    <p>Masyarakat</p>
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
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->Logo=='') {?>
                        <img src="<?php echo base_url();?>
assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive">
                    <?php } else { ?>
                        <img src="<?php echo base_url();?>
assets/img/<?php echo $_smarty_tpl->tpl_vars['row']->value->Logo;?>
" class="img-center img-thumbnail img-responsive">
                    <?php }?>
                    
                </a>
                <div class="task-thumb-details">
                    <h1><a href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>
</a></h1>
                    <p>(<?php echo $_smarty_tpl->tpl_vars['row']->value->email;?>
)</p>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                    <tr>
                        <td>
                            <i class=" fa fa-tasks"></i>
                        </td>
                        <td><label class="label label-warning">Belum Ditanggapi</label></td>
                        <td> <label class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['belum'];?>
</label></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-exclamation-triangle"></i>
                        </td>
                        <td><label class="label label-default">Proses Ditanggapi</label></td>
                        <td> <label class="label label-default"><?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['proses'];?>
</label></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-envelope"></i>
                        </td>
                        <td><label class="label label-info">Sudah Ditanggapi</label></td>
                        <td> <label class="label label-info"><?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['selesai'];?>
</label></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- end:user info table -->
    </div>
<?php } ?><?php }} ?>
