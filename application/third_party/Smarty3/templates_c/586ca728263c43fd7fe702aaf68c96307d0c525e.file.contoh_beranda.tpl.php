<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-18 21:36:44
         compiled from "application\views\administrator\contoh_beranda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26850555a3e5d18b264-61136712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586ca728263c43fd7fe702aaf68c96307d0c525e' => 
    array (
      0 => 'application\\views\\administrator\\contoh_beranda.tpl',
      1 => 1431977803,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1431977657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26850555a3e5d18b264-61136712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555a3e5d39f2b9_82953203',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a3e5d39f2b9_82953203')) {function content_555a3e5d39f2b9_82953203($_smarty_tpl) {?><!DOCTYPE html>
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
            
            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            
    <div class="col-lg-8">
        <!-- start:state overview -->
        <div class="row state-overview">
            <div class="col-lg-6 col-sm-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                            0
                        </h1>
                        <p>Keluhan Masuk</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-sm-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="fa fa-gift"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2">
                            0
                        </h1>
                        <p>Keluhan ditanggapi</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3">
                            0
                        </h1>
                        <p>User Masyarakat</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-sm-6">
                <section class="panel">
                    <div class="symbol purple">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            0
                        </h1>
                        <p>User Pemerintah</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- end:state overview -->

        <!--custom chart start-->
        <div class="border-head">
            <h3><strong>Graph</strong> Earning</h3>
        </div>
        <div class="custom-bar-chart">
            <ul class="y-axis">
                <li><span>100</span></li>
                <li><span>80</span></li>
                <li><span>60</span></li>
                <li><span>40</span></li>
                <li><span>20</span></li>
                <li><span>0</span></li>
            </ul>
            <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">60%</div>
            </div>
            <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">80%</div>
            </div>
            <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">20%</div>
            </div>
            <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">65%</div>
            </div>
            <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">90%</div>
            </div>
            <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">49%</div>
            </div>
            <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">55%</div>
            </div>
            <div class="bar ">
                <div class="title">AUG</div>
                <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">35%</div>
            </div>
            <div class="bar ">
                <div class="title">SEP</div>
                <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">57%</div>
            </div>
            <div class="bar ">
                <div class="title">OCT</div>
                <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">43%</div>
            </div>
            <div class="bar ">
                <div class="title">NOV</div>
                <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
            </div>
            <div class="bar ">
                <div class="title">DEC</div>
                <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
            </div>
        </div>
        <!--custom chart end-->
        <!-- start:timeline -->
        <section class="panel">
            <div class="panel-body">
                <div class="text-center mbot30">
                    <h3 class="timeline-title">Ini Timeline</h3>
                    <p class="t-info">Wiki kie project timeline</p>
                </div>

                <div class="timeline">
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon red"></span>
                                    <span class="timeline-date">08:25 am</span>
                                    <h1 class="red">12 July | Sunday</h1>
                                    <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon green"></span>
                                    <span class="timeline-date">10:00 am</span>
                                    <h1 class="green">10 July | Wednesday</h1>
                                    <p><a href="#">Jonathan Smith</a> added new milestone <span><a href="#" class="green">ERP</a></span></p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon blue"></span>
                                    <span class="timeline-date">11:35 am</span>
                                    <h1 class="blue">05 July | Monday</h1>
                                    <p><a href="#">Anjelina Joli</a> added new album <span><a href="#" class="blue">PARTY TIME</a></span></p>
                                    <div class="album">
                                        <a href="#">
                                            <img alt="" src="img/sm-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sm-img-2.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sm-img-3.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sm-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sm-img-2.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon purple"></span>
                                    <span class="timeline-date">3:20 pm</span>
                                    <h1 class="purple">29 June | Saturday</h1>
                                    <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                    <div class="notification">
                                        <i class=" fa fa-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon light-green"></span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="light-green">10 June | Friday</h1>
                                    <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="clearfix">&nbsp;</div>
            </div>
        </section>
        <!-- end:timeline -->
    </div>
    <div class="col-lg-4">
        <!-- start:user info -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <header class="panel-title">
                    <div class="text-center">
                        <strong>Agent</strong> Author<strong>.</strong>
                    </div>
                </header>
            </div>
            <div class="panel-body">
                <div class="text-center" id="author">
                    <img src="img/user/avatar-3.jpg">
                    <h3>John Doe</h3>
                    <small class="label label-warning">From USA</small>
                    <p>Aku kie sing sok ngedolke omah-omah kae, yo iso di omongke makelar ngono sih. Tapi makelar nek payu ne akeh yo dadi sugih bro. Tenanan ra ngapusi.</p>
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
        <!-- start:new earning -->
        <div class="panel terques-chart">
            <div class="panel-body chart-texture">
                <div class="chart">
                    <div class="heading">
                        <span>Senin</span>
                        <strong>$ 67,00 | 25%</strong>
                    </div>
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
            </div>
            <div class="chart-tittle">
                <span class="title">New Earning</span>
                <span class="value">
                    <a href="#" class="active">Market</a>
                    |
                    <a href="#">Referal</a>
                    |
                    <a href="#">Online</a>
                </span>
            </div>
        </div>
        <!-- end:new earning-->

        <!-- start:total earning-->
        <div class="panel green-chart">
            <div class="panel-body">
                <div class="chart">
                    <div class="heading">
                        <span>June</span>
                        <strong>12 Days | 85%</strong>
                    </div>
                    <div id="barchart"></div>
                </div>
            </div>
            <div class="chart-tittle">
                <span class="title">Total Earning</span>
                <span class="value">$, 96,23,123</span>
            </div>
        </div>
        <!-- end:total earning -->

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
    </div>

        </div>
        <div class="row">
        
    <div class="col-lg-4">
        <!--revenue start-->
        <section class="panel revenue">
            <div class="revenue-head">
                <span>
                    <i class="fa fa-bar-chart-o"></i>
                </span>
                <h3>Revenue</h3>
                <span class="rev-combo pull-right">
                    June 2013
                </span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 text-center">
                        <div class="easy-pie-chart">
                            <div class="percentage" data-percent="35"><span>35</span>%</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="chart-info chart-position">
                            <span class="increase"></span>
                            <span>Revenue Increase</span>
                        </div>
                        <div class="chart-info">
                            <span class="decrease"></span>
                            <span>Revenue Decrease</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer revenue-foot">
                <ul>
                    <li class="first active">
                        <a href="javascript:;">
                            <i class="fa fa-bullseye"></i>
                            Graphical
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class=" fa fa-th-large"></i>
                            Tabular
                        </a>
                    </li>
                    <li class="last">
                        <a href="javascript:;">
                            <i class=" fa fa-align-justify"></i>
                            Listing
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!--revenue end-->
    </div>
    <div class="col-lg-8">
        <!--work progress start-->
        <section class="panel">
            <div class="panel-body progress-panel">
                <div class="task-progress">
                    <h1>Work Progress</h1>
                    <p>Chef Marink</p>
                </div>
                <div class="task-option">
                    <select class="btn btn-default">
                        <option>Chef Marinka</option>
                        <option>Chef Juna</option>
                        <option>Chef Aldi</option>
                    </select>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            Target Sell
                        </td>
                        <td>
                            <span class="badge bg-important">75%</span>
                        </td>
                        <td>
                            <div id="work-progress1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Product Delivery
                        </td>
                        <td>
                            <span class="badge bg-success">43%</span>
                        </td>
                        <td>
                            <div id="work-progress2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            Payment Collection
                        </td>
                        <td>
                            <span class="badge bg-info">67%</span>
                        </td>
                        <td>
                            <div id="work-progress3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            Work Progress
                        </td>
                        <td>
                            <span class="badge bg-warning">30%</span>
                        </td>
                        <td>
                            <div id="work-progress4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            Delivery Pending
                        </td>
                        <td>
                            <span class="badge bg-primary">15%</span>
                        </td>
                        <td>
                            <div id="work-progress5"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!--work progress end-->
    </div>

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
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/count.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        //owl carousel
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
                autoPlay:true
            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

        if ($(".custom-bar-chart")) {
        $(".bar").each(function () {
            var i = $(this).find(".value").html();
            $(this).find(".value").html("");
            $(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }
    <?php echo '</script'; ?>
>

</body>
</html>	<?php }} ?>
