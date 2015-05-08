<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-09 02:17:08
         compiled from "application\views\masyarakat\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11831554cf829268c36-29840758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '894748b3dff35be0fa5ca21eda6fab637d33d6fb' => 
    array (
      0 => 'application\\views\\masyarakat\\index.tpl',
      1 => 1431112621,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1431105258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11831554cf829268c36-29840758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554cf82939d608_94868056',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554cf82939d608_94868056')) {function content_554cf82939d608_94868056($_smarty_tpl) {?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>E-Complains</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url();?>
assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url();?>
assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url();?>
assets/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/Chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.easing.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.ulslide.js"><?php echo '</script'; ?>
>
    <!----Calender -------->
    <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/clndr.css" type="text/css" />
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src= "<?php echo base_url();?>
assets/js/moment-2.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/clndr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/site.js"><?php echo '</script'; ?>
>
    <!----End Calender -------->
</head>
<body>			       
    <!-- Header -->
    <?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="main">  
        
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
    <div class="copy-right">
        <?php echo $_smarty_tpl->getSubTemplate ('layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>   
</body>
<!-- Addons Plugins -->


<!-- Addons Scripts -->

</html><?php }} ?>
