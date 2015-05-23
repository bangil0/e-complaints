<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 14:05:30
         compiled from "application\views\administrator\beranda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30413554c9548d57b48-02904291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c612e71964d87f5ece32aa925130a60e21a09df' => 
    array (
      0 => 'application\\views\\administrator\\beranda.tpl',
      1 => 1432319685,
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
  'nocache_hash' => '30413554c9548d57b48-02904291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554c9548ed2c09_00071571',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c9548ed2c09_00071571')) {function content_554c9548ed2c09_00071571($_smarty_tpl) {?><!DOCTYPE html>
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
                        <i class="fa fa-graduation-cap"></i>
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
                        <i class="fa fa-gift"></i>
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
                        <i class="fa fa-gift"></i>
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
        <div class="border-head">
                <h3><strong> Jumlah User Aktif</strong> Masyarakat dan Pemerintah</h3>
            </div>
        <div class="row state-overview">
            <div class="col-lg-6 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            0
                        </h1>
                        <p>Masyarakat</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-sm-6">
                <section class="panel">
                    <div class="symbol purple">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count5">
                            0
                        </h1>
                        <p>Pemerintah</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- end:state overview -->

        <!--custom chart start-->
        <div class="border-head">
            <h3><strong>Graph</strong> Earning</h3>
        </div>
        <div class="container2" id="container2"></div>
        <br>
        <div class="border-head">
            <h3><strong>Statistik Tingkatan Pemerintahan</strong></h3>
        </div>
            <div id="container"></div>
        <!--custom chart end-->
    </div>
    <?php /*  Call merged included template "administrator/widget_right.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("administrator/widget_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '30413554c9548d57b48-02904291');
content_556026bab2e634_98514507($_smarty_tpl);
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

        function countMasyarakat(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count4'), run_count = 1,
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
        function countPemerintah(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count5'), run_count = 1,
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

        countBelum(<?php echo $_smarty_tpl->tpl_vars['data']->value['keluhan']['belum'];?>
);
        countProses(<?php echo $_smarty_tpl->tpl_vars['data']->value['keluhan']['proses'];?>
);
        countSelesai(<?php echo $_smarty_tpl->tpl_vars['data']->value['keluhan']['selesai'];?>
);

        countMasyarakat(<?php echo $_smarty_tpl->tpl_vars['data']->value['users']['masyarakat'];?>
);
        countPemerintah(<?php echo $_smarty_tpl->tpl_vars['data']->value['users']['pemerintah'];?>
);

        //owl carousel
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: true
            });
        });

        //custom select box
        $(function () {
            $('select.styled').customSelect();

            $('#container').highcharts({ chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Tingkat Pemerintahan'
                },
                xAxis: {
                    categories: ['Kota', 'Provinsi', 'Pusat']
                },
                yAxis: {
                    title: {
                        text: 'Fruit eaten'
                    }
                },
                series: [{
                        name: 'Jane',
                        data: [1, 4, 4]
                    }, {
                        name: 'John',
                        data: [5, 7, 3]
                    }]
            });
        });
        $(function () {
            var colors = Highcharts.getOptions().colors,
                    categories = ['MSIE', 'Firefox', 'Chrome', 'Safari', 'Opera'],
                    data = [{
                            y: 55.11,
                            color: colors[0],
                            drilldown: {
                                name: 'MSIE versions',
                                categories: ['MSIE 6.0', 'MSIE 7.0', 'MSIE 8.0', 'MSIE 9.0'],
                                data: [10.85, 7.35, 33.06, 2.81],
                                color: colors[0]
                            }
                        }, {
                            y: 21.63,
                            color: colors[1],
                            drilldown: {
                                name: 'Firefox versions', categories: ['Firefox 2.0', 'Firefox 3.0', 'Firefox 3.5', 'Firefox 3.6', 'Firefox 4.0'],
                                data: [0.20, 0.83, 1.58, 13.12, 5.43],
                                color: colors[1]
                            }
                        }, {
                            y: 11.94,
                            color: colors[2],
                            drilldown: {
                                name: 'Chrome versions', categories: ['Chrome 5.0', 'Chrome 6.0', 'Chrome 7.0', 'Chrome 8.0', 'Chrome 9.0',
                                    'Chrome 10.0', 'Chrome 11.0', 'Chrome 12.0'],
                                data: [0.12, 0.19, 0.12, 0.36, 0.32, 9.91, 0.50, 0.22],
                                color: colors[2]
                            }
                        }, {
                            y: 7.15,
                            color: colors[3],
                            drilldown: {
                                name: 'Safari versions',
                                categories: ['Safari 5.0', 'Safari 4.0', 'Safari Win 5.0', 'Safari 4.1', 'Safari/Maxthon',
                                    'Safari 3.1', 'Safari 4.1'],
                                data: [4.55, 1.42, 0.23, 0.21, 0.20, 0.19, 0.14],
                                color: colors[3]
                            }
                        }, {
                            y: 2.14,
                            color: colors[4],
                            drilldown: {
                                name: 'Opera versions',
                                categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                data: [0.12, 0.37, 1.65],
                                color: colors[4]
                            }
                        }],
                    browserData = [],
                    versionsData = [],
                    i, j,
                    dataLen = data.length,
                    drillDataLen,
                    brightness;


            // Build the data arrays
            for (i = 0; i < dataLen; i += 1) {
                // add browser data
                browserData.push({
                    name: categories[i],
                    y: data[i].y,
                    color: data[i].color
                });

                // add version data
                drillDataLen = data[i].drilldown.data.length;
                for (j = 0; j < drillDataLen; j += 1) {
                    brightness = 0.2 - (j / drillDataLen) / 5;
                    versionsData.push({
                        name: data[i].drilldown.categories[j],
                        y: data[i].drilldown.data[j],
                        color: Highcharts.Color(data[i].color).brighten(brightness).get()
                    });
                }
            }

            // Create the chart
            $('#container2').highcharts({
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Browser market share, April, 2011'
                },
                yAxis: {
                    title: {
                        text: 'Total percent market share'
                    }
                },
                plotOptions: {
                    pie: {
                        shadow: false,
                        center: ['50%', '50%']
                    }
                },
                tooltip: {
                    valueSuffix: '%'
                },
                series: [{
                        name: 'Browsers',
                        data: browserData,
                        size: '60%',
                        dataLabels: {
                            formatter: function () {
                                return this.y > 5 ? this.point.name : null;
                            },
                            color: 'white',
                            distance: -30
                        }
                    }, {
                        name: 'Versions',
                        data: versionsData,
                        size: '80%',
                        innerSize: '60%',
                        dataLabels: {
                            formatter: function () {
                                // display only if larger than 1
                                return this.y > 1 ? '<b>' + this.point.name + ':</b> ' + this.y + '%' : null;
                            }
                        }
                    }]
            });
        });
    <?php echo '</script'; ?>
>

</body>
</html>	<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 14:05:30
         compiled from "application\views\administrator\widget_right.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556026bab2e634_98514507')) {function content_556026bab2e634_98514507($_smarty_tpl) {?><div class="col-lg-4">
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
