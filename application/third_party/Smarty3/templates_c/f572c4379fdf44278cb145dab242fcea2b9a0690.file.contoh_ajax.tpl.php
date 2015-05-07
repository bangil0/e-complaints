<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 01:15:26
         compiled from "application\views\administrator\contoh_ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1201554f8276baadda1-29575039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f572c4379fdf44278cb145dab242fcea2b9a0690' => 
    array (
      0 => 'application\\views\\administrator\\contoh_ajax.tpl',
      1 => 1425579322,
      2 => 'file',
    ),
    'bb71f7490647b8e0d6592f597eb3a99d1dd98310' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1425574341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201554f8276baadda1-29575039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f8276bbceef7_75771140',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f8276bbceef7_75771140')) {function content_54f8276bbceef7_75771140($_smarty_tpl) {?><!DOCTYPE html>
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
                <h1><i class="fa fa-file-o"></i> Data Bendahara</h1>
                <h4>Informasi Data Bendahara</h4>
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i> Menu Utama &nbsp;</li>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
                <li class="active">Data Bendahara</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Data Bendahara</h3>
                        <div id="paneltombol">
                            <input type="button"  class="tombol" id="btnSimpan" value="Simpan" style="display:none">
                            <input type="button" class="tombol" id="tombolTambah" name="tombolTambah" value="Tambah Data">
                        </div>
                        <div id="data">  </div>
                    </div>
                    <div class="box-content">
                        <div class="btn-toolbar pull-right clearfix">
                            <div class="btn-group">
                                <a class="btn btn-circle show-tooltip" title="Tambah Halaman" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-circle show-tooltip" title="Cetak" href="#"><i class="fa fa-print"></i></a>
                                <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="fa fa-file-text-o"></i></a>
                                <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="fa fa-table"></i></a>
                            </div>
                        </div>
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
                                <tbody></tbody>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearMsg()"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Bendahara</h4>
                </div>
                <div class="modal-body">
                    <div id="user_form_validation" style="display: none" class="alert-danger alert">
                        <p class="error_msg"></p>
                    </div> 
                    <div class="form-horizontal">
                        <?php echo form_open('administrator/simpan','class="form_user" id="form_user"');?>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Nama</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['form']['nama']);?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">NPM</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['form']['npm']);?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearMsg()">Keluar</button>
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

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/bootstrap-modal/bootstrap-modal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/data-tables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.js"><?php echo '</script'; ?>
>


<!-- Addons Scripts -->

    <?php echo '<script'; ?>
 type="text/javascript">
        window.onload = function () {
            $('#form_user').on('submit', function (e) { // submit handler
                e.preventDefault();
                $('.error_msg', form_user).html('Please wait...');
                $.post(this.action, $(this).serialize(), function (data) { // ajax post
                    var data = eval('(' + data + ')');
                    if (data.status == "success") {
                        getListTableUser();
                        $('.close').trigger('click'); // close modal
                        clearMsg();
                    }
                    else if (data.status == "error") {
                        $('#user_form_validation').show();
                        $('.error_msg').html(data.msg);

                    }
                });
            });

        };
        function clearMsg() {
            $('#user_form_validation').hide();
            $('.error_msg').html("");
            clearForm();
        }
        function clearForm() {
            //$("#form_user").reset();
            var form = arguments[0];
            var inputs = form.getElementsByTagName('input');

            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type == 'text') {
                    inputs[i].value = '';
                }
            }
        }
        var userId;

        function getListTableUser() {
            $('.table tbody').load('<?php echo base_url();?>
administrator/getList');
        }

        getListTableUser();

        function editUser(id, nama, status) {
            $('a[href="#modal_user_input"]').trigger('click');
            document.form_user.nama.value = nama;
            document.form_user.status.value = status;
            document.form_user.id.value = id;
        }

        function setUserDeleteId(id) {
            userId = id;
        }

        function hapusUser() {
            $.post('http://localhost/ci_crudajaxcistrap/index.php/user/hapus',{}, function (e) {
                getListTableUser();
            });
            $('.close').trigger('click'); // close modal
            userId = null; // hapus id
        }

        function hapusSemua() {
            $.post('http://localhost/ci_crudajaxcistrap/index.php/user/hapusSemua', [], function (e) {
                getListTableUser();
            });
            $('.close').trigger('click'); // close modal
        }
    <?php echo '</script'; ?>
>


</html><?php }} ?>
