<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 01:59:52
         compiled from "application\views\masyarakat\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11158554cbb55c2aec5-98644685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '894748b3dff35be0fa5ca21eda6fab637d33d6fb' => 
    array (
      0 => 'application\\views\\masyarakat\\index.tpl',
      1 => 1431129424,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1431977657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11158554cbb55c2aec5-98644685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554cbb56065154_19716475',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554cbb56065154_19716475')) {function content_554cbb56065154_19716475($_smarty_tpl) {?><!DOCTYPE html>
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
                                    <label><input type="radio" name="rdtingkat" value="1">Pemerintah KOTA/KABUPATEN</label>
                                    <label><input type="radio" name="rdtingkat" value="2">Pemerintah PROVINSI</label><br>
                                    <label><input type="radio" name="rdtingkat" value="3">Pemerintah PUSAT</label>
                                </div>
                            </div>
                            <div class="col-md-6" style="top: 10px;">
                                <label>Pilih Kota/Kabupaten, Provinsi, Pusat</label>
                                <div class="dropdown">
                                    <select class="form-control" name="kota">
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
                                    <select class="form-control" name="provinsi">
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
                                    <select class="form-control" name="pusat">
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
                                    <button type="submit" class="btn btn-danger btn-lg">Laporkan Keluhan</button>
                                </div>
                            </div>
                        </form>
                    </div>		
                </div>
            </div>
                                    <div class="menu_box">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-body">
                                                    <div id="container2" style="width: 100%;height: 400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
            <div class="menu_box">
                <h3>Recent Update</h3>
                <div class="row">
                    <div class="col-md-12">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="column_right">
            <div class="column_middle_grid1">
                <div class="profile_picture">
                    <a href=""><img src="<?php echo base_url();?>
assets/images/izul.png" alt="">	</a>		         
                    <div class="profile_picture_name">
                        <h2>Aizul Fadin </h2>
                        <p>Jangan menyerah atas impianmu. Impian memberimu tujuan hidup</p>
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
                                name: 'Firefox versions',
                                categories: ['Firefox 2.0', 'Firefox 3.0', 'Firefox 3.5', 'Firefox 3.6', 'Firefox 4.0'],
                                data: [0.20, 0.83, 1.58, 13.12, 5.43],
                                color: colors[1]
                            }
                        }, {
                            y: 11.94,
                            color: colors[2],
                            drilldown: {
                                name: 'Chrome versions',
                                categories: ['Chrome 5.0', 'Chrome 6.0', 'Chrome 7.0', 'Chrome 8.0', 'Chrome 9.0',
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
                    i,
                    j,
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
                    text: 'Keluhan berbagai Kategori'
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
