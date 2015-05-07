<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 22:35:03
         compiled from "application/views/administrator/menu_layanan/pemohon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142266009551e8d65abf660-12723393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab6966162f2bf3cb5adb0c4e9ec67ef2f406cd59' => 
    array (
      0 => 'application/views/administrator/menu_layanan/pemohon.tpl',
      1 => 1428852856,
      2 => 'file',
    ),
    '7b7fbacd30bbec4122ff7f349e5e05ca2bb8bbfc' => 
    array (
      0 => 'application/views/layout/master.tpl',
      1 => 1428846078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1142266009551e8d65abf660-12723393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e8d65c01fb5_14994766',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e8d65c01fb5_14994766')) {function content_551e8d65c01fb5_14994766($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['meta']['title'];?>
 - Sistem Layanan Jasa dan Informasi P2F LIPI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Icon -->
                
        <!--base css styles-->
        
        <!-- font Awesome -->
        

        <!--flaty css styles-->
        
        

        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/font-awesome/css/font-awesome.min.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/flaty.css">
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/flaty-responsive.css">

        <!-- Addons Style -->
    
    <link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

    <!-- Theme style -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body class="skin-blue">
    <!-- Header -->
    <?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container" id="main-container">
        <!-- Menu Sidebar -->
        <?php echo $_smarty_tpl->getSubTemplate ('layout/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- End Menu Sidebar -->
        <!-- Content -->
    
    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Data Pemohon</h1>
                <h4>Informasi Data Pemohon</h4>
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i> Menu Utama &nbsp;</li>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
                <li class="active">Data Pemohon</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Data Pemohon</h3>
                    </div>
                    <div class="box-content">
                        <br/><br/>
                        <div class="clearfix"></div>
                        <div class="table-responsive" style="border:0">
                            <table class="table table-advance" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th class="text-center">Modifikasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data_pemohon']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['no']++;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->username;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-circle show-tooltip" title="" data-toggle="modal" data-target="#edit" data-original-title="Edit selected"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-circle show-tooltip" title="" data-toggle="modal" data-target="#delete"data-original-title="Delete selected"><i class="fa fa-trash-o"></i></a>
                                                    <a class="btn btn-circle show-tooltip" title="" data-toggle="modal" data-target="#detail"data-original-title="Delete selected"><i class="fa fa-bars"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        <footer>
            <p>2013 © FLATY Admin Template.</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->

    <!-- End Content -->
</div>
<!-- Modal -->

    <!-- Large modal -->
    <div class="modal fade" id ="tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Pemohon</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Username</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" placeholder="Ketik Username" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Email</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" placeholder="Ketik Email" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">NIP</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" placeholder="Ketik NIP" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Nama</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" placeholder="Ketik Nama" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Kompetensi</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" placeholder="Ketik Kompetensi" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Alamat</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <textarea class="form-control" placeholder="Ketik Alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Agama</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <select name="agama" class="form-control">
                                    <option selected="true">- Pilih Agama -</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Kristen Protestan</option>
                                    <option value="3">Kristen Katolik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Budha</option>
                                    <option value="6">Konghucu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg" id ="edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Ubah Administrator</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Ketik Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Ketik Alamat Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="password" class="form-control" placeholder="Ketik Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="password" class="form-control" placeholder="Ketik Kembali Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg" id ="delete">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Hapus Administrator</h4>
                </div>
                <div class="modal-body">
                    <b>Anda Yakin akan menghapus?</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ya</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg" id ="detail">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detail Administrator</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Ketik Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Ketik Alamat Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="password" class="form-control" placeholder="Ketik Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="password" class="form-control" placeholder="Ketik Kembali Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>

<!-- End Modal -->
<!--page specific plugin scripts-->
</body>
<!-- jQuery 2.0.2 -->
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap main  -->
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/jquery-cookie/jquery.cookie.js"><?php echo '</script'; ?>
>

<!--flaty scripts-->
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/flaty.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/flaty-demo-codes.js"><?php echo '</script'; ?>
>

<!-- Addons Plugins -->

    <!--<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/bootstrap-modal/bootstrap-modal.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/data-tables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"><?php echo '</script'; ?>
>


<!-- Addons Scripts -->

</html><?php }} ?>
