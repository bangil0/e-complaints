<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-06 04:51:33
         compiled from "application\views\masyarakat\keluhan_saya.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6691556fb8d7b21394-02264921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5784d6b9bfb314a26beac4a1c13d2b8255922c9' => 
    array (
      0 => 'application\\views\\masyarakat\\keluhan_saya.tpl',
      1 => 1433541090,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1433494243,
      2 => 'file',
    ),
    'b4ff62d5e0775e11a9da345261acea4de87fc380' => 
    array (
      0 => 'application\\views\\masyarakat\\widget_right.tpl',
      1 => 1433052495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6691556fb8d7b21394-02264921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556fb8d7dbb9f2_87403720',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556fb8d7dbb9f2_87403720')) {function content_556fb8d7dbb9f2_87403720($_smarty_tpl) {?><!DOCTYPE html>
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
            <h3><strong> Keluhan </strong> Saya</h3>
        </div>
        <div class="panel panel-body">
            <ul class="nav nav-pills">
                <li class="active"><a href="#keluhan" data-toggle="tab">Keluhan</a></li>
                <li><a href="#grafik" data-toggle="tab">Grafik</a></li>
            </ul>
            <hr>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="keluhan">
                    <?php if (count($_smarty_tpl->tpl_vars['data']->value['keluhan_terkini'])>0) {?>
                        <?php  $_smarty_tpl->tpl_vars['keluhan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keluhan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['keluhan_terkini']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['keluhan']->key => $_smarty_tpl->tpl_vars['keluhan']->value) {
$_smarty_tpl->tpl_vars['keluhan']->_loop = true;
?>
                            <div class="panel panel-primary">
                                <div class="panel-primary panel-drop">
                                    <div class="panel-heading">
                                        <header class="panel-title">
                                            <h2><b><?php echo $_smarty_tpl->tpl_vars['keluhan']->value['Judul'];?>
</b></h2>
                                        </header>
                                        <div style="color: #39B6AE;font-size:10pt;">
                                            <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['keluhan']->value['Tanggal'];?>
&nbsp;&nbsp;&nbsp;<span class="fa fa-android"></span> <?php echo $_smarty_tpl->tpl_vars['keluhan']->value['StatusKeluhan'];?>
 &nbsp;&nbsp;&nbsp;<span class="fa fa-building"></span> <?php echo $_smarty_tpl->tpl_vars['keluhan']->value['NamaKategori'];?>
&nbsp;&nbsp;&nbsp;<span class="fa fa-ambulance"></span> <?php echo $_smarty_tpl->tpl_vars['keluhan']->value['NamaPemerintah'];?>

                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <?php echo $_smarty_tpl->tpl_vars['keluhan']->value['IsiKeluhan'];?>

                                        <hr>
                                        <?php if ($_smarty_tpl->tpl_vars['keluhan']->value['IsiTanggapan']!='') {?>
                                            <div class="well well-primary">
                                                <h3><?php echo $_smarty_tpl->tpl_vars['keluhan']->value['IsiTanggapan'];?>
</h3>
                                            </div>                                            
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <i>- belum ada keluhan </i>
                    <?php }?>
                </div>
                <div class="tab-pane" id="grafik">
                    <div id="container" style="width: 680px;text-align: center"></div>
                </div>
            </div>
        </div>
        <!-- end:state overview -->
    </div>
    <?php /*  Call merged included template "masyarakat/widget_right.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("masyarakat/widget_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6691556fb8d7b21394-02264921');
content_557219e5530905_25488553($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "masyarakat/widget_right.tpl" */?>

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
assets/js/owl.carousel.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.customSelect.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {

            $(document).ready(function () {

                // Build the chart
                $('#container').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Jumlah Keluhan Saya'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                            type: 'pie',
                            name: 'Status',
                            data: [
                                ['Belum', <?php echo $_smarty_tpl->tpl_vars['data']->value['grafik_keluhan']['belum'];?>
],
                                ['Proses', <?php echo $_smarty_tpl->tpl_vars['data']->value['grafik_keluhan']['proses'];?>
],
                                ['Selesai', <?php echo $_smarty_tpl->tpl_vars['data']->value['grafik_keluhan']['selesai'];?>
],
                            ]
                        }]
                });
            });

        });
        /**
         * Sand-Signika theme for Highcharts JS
         * @author Torstein Honsi
         */

// Load the fonts
        Highcharts.createElement('link', {
            href: '//fonts.googleapis.com/css?family=Signika:400,700',
            rel: 'stylesheet',
            type: 'text/css'
        }, null, document.getElementsByTagName('head')[0]);

// Add the background image to the container
        Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
            proceed.call(this);
            this.container.style.background = 'url(http://www.highcharts.com/samples/graphics/sand.png)';
        });


        Highcharts.theme = {
            colors: ["#f45b5b", "#8085e9", "#8d4654", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
                "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
            chart: {
                backgroundColor: null,
                style: {
                    fontFamily: "Signika, serif"
                }
            },
            title: {
                style: {
                    color: 'black',
                    fontSize: '16px',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                style: {
                    color: 'black'
                }
            },
            tooltip: {
                borderWidth: 0
            },
            legend: {
                itemStyle: {
                    fontWeight: 'bold',
                    fontSize: '13px'
                }
            },
            xAxis: {
                labels: {
                    style: {
                        color: '#6e6e70'
                    }
                }
            },
            yAxis: {
                labels: {
                    style: {
                        color: '#6e6e70'
                    }
                }
            },
            plotOptions: {
                series: {
                    shadow: true
                },
                candlestick: {
                    lineColor: '#404048'
                },
                map: {
                    shadow: false
                }
            },
            // Highstock specific
            navigator: {
                xAxis: {
                    gridLineColor: '#D0D0D8'
                }
            },
            rangeSelector: {
                buttonTheme: {
                    fill: 'white',
                    stroke: '#C0C0C8',
                    'stroke-width': 1,
                    states: {
                        select: {
                            fill: '#D0D0D8'
                        }
                    }
                }
            },
            scrollbar: {
                trackBorderColor: '#C0C0C8'
            },
            // General
            background2: '#E0E0E8'

        };

// Apply the theme
        Highcharts.setOptions(Highcharts.theme);
    <?php echo '</script'; ?>
>

</body>
</html>	<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-06 04:51:33
         compiled from "application\views\masyarakat\widget_right.tpl" */ ?>
<?php if ($_valid && !is_callable('content_557219e5530905_25488553')) {function content_557219e5530905_25488553($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
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
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->photo=='') {?>
                        <img src="<?php echo base_url();?>
assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive">
                    <?php } else { ?>
                        <img src="<?php echo base_url();?>
assets/img/<?php echo $_smarty_tpl->tpl_vars['row']->value->photo;?>
" class="img-center img-thumbnail img-responsive">
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
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->photo=='') {?>
                        <img src="<?php echo base_url();?>
assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive">
                    <?php } else { ?>
                        <img src="<?php echo base_url();?>
assets/img/<?php echo $_smarty_tpl->tpl_vars['row']->value->photo;?>
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
