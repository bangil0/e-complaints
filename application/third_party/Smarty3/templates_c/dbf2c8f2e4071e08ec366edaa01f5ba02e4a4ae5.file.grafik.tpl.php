<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-06 00:38:18
         compiled from "application\views\masyarakat\grafik.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16139556ff50fd4fab3-22125968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbf2c8f2e4071e08ec366edaa01f5ba02e4a4ae5' => 
    array (
      0 => 'application\\views\\masyarakat\\grafik.tpl',
      1 => 1433402126,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1433494243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16139556ff50fd4fab3-22125968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556ff50fec4371_17654500',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ff50fec4371_17654500')) {function content_556ff50fec4371_17654500($_smarty_tpl) {?><!DOCTYPE html>
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
        <li class="active">Grafik</li>
    </ol>

            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            
    <div class="col-lg-12">
        <!-- start:state overview -->
        <div class="panel panel-body">
            <ul class="nav nav-pills">
                <li class="active"><a href="#grafik_perkategori" data-toggle="tab">Grafik Keluhan Berdasarkan Kategori</a></li>
                <li><a href='#grafik_perkota' data-toggle="tab">Grafik Keluhan Kota</a></li>
                <li><a href='#grafik_perprovinsi' data-toggle="tab">Grafik Keluhan Provinsi</a></li>
                <li><a href='#grafik_perpusat' data-toggle="tab">Grafik Keluhan Pusat</a></li>
            </ul>
            <hr>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="grafik_perkategori">
                    <div id="container"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                            <th>Nama Kategori</th>
                            <th width='200' style="text-align: center">Total</th>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perkategori']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
</td>
                                        <td style="background-color: #ff0;text-align: center;"><b><?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
</b></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="grafik_perkota">
                    <div id="container_perkota"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                            <th>Nama Kota</th>
                            <th width='200' style="text-align: center">Total</th>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perkota']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
</td>
                                        <td style="background-color: #ff0;text-align: center;"><b><?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
</b></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="grafik_perprovinsi">
                    <div id="container_perprovinsi"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                            <th>Nama Provinsi</th>
                            <th width='200' style="text-align: center">Total</th>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perprovinsi']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
</td>
                                        <td style="background-color: #ff0;text-align: center;"><b><?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
</b></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="grafik_perpusat">
                    <div id="container_perpusat"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                            <th>Nama Institusi</th>
                            <th width='200' style="text-align: center">Total</th>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perpusat']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
</td>
                                        <td style="background-color: #ff0;text-align: center;"><b><?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
</b></td>
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
        $(function () {
            // Radialize the colors
            Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
                return {
                    radialGradient: {cx: 0.5, cy: 0.3, r: 0.7},
                    stops: [
                        [0, color],
                        [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                    ]
                };
            });
            // Build grafik berdasarkan kategori
            $('#container').highcharts({
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
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Kategori Keluhan',
                        data: [
        <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perkategori']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                            ['<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
',<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
],
        <?php } ?>
                        ]
                    }]
            });
            // Build the chart
            $('#container_perkota').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Kota'
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
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Kategori Keluhan',
                        data: [
        <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perkota']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                            ['<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
',<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
],
        <?php } ?>
                        ]
                    }]
            });
            $('#container_perprovinsi').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Provinsi'
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
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Total',
                        data: [
        <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perprovinsi']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                            ['<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
',<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
],
        <?php } ?>
                        ]
                    }]
            });
            $('#container_perpusat').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Pusat'
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
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Total',
                        data: [
        <?php  $_smarty_tpl->tpl_vars['kategori'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategori']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['grafik_perpusat']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->key => $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
?>
                            ['<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Nama;?>
',<?php echo $_smarty_tpl->tpl_vars['kategori']->value->Total;?>
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
