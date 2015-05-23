<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-18 20:07:31
         compiled from "application\views\layout\registrasi2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27441555a2975bb8e32-61069878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '815eeacec261761854553b55f987adc14fd32a50' => 
    array (
      0 => 'application\\views\\layout\\registrasi2.tpl',
      1 => 1431972448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27441555a2975bb8e32-61069878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555a2975c51b61_02128210',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a2975c51b61_02128210')) {function content_555a2975c51b61_02128210($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
        <meta name="description" content="Layanan Public E-Complaints" />
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
    </head>
    <body>

        <!-- start:form register -->
        <div class="container">
            <?php echo form_open('auth/member_registration',array('class'=>'form-login'));?>

                <h2 class="form-login-heading">Daftar Anggota Baru</h2>
                <div class="login-wrap">
                    <p>Silahkan Isi Identitas Pribadi</p>
                    <!-- BEGIN Register Form -->
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

                    <div class="form-group">
                        <div class="controls">
                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['email']);?>

                            <?php echo form_error('email','<p class="help-block text-red">','</p>');?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['password']);?>

                            <?php echo form_error('password','<p class="help-block text-red">','</p>');?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['password_confirm']);?>

                            <?php echo form_error('password_confirm','<p class="help-block text-red">','</p>');?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <div class="form-group">
                                <?php echo form_radio('sex','M',true);?>
 Laki-laki
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo form_radio('sex','F');?>
 Perempuan
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <?php echo form_submit('auth/member_registration',"Mendaftar",'class="btn btn-primary form-control"');?>

                        </div>
                    </div>
                    <hr/>
                    <p class="clearfix">
                        <a href="<?php echo base_url();?>
auth/login" class="goto-login pull-left">← Kembali ke Masuk</a>
                    </p>
                    <?php echo form_close();?>

                    <!-- END Register Form -->
                </div>
            <?php echo form_close();?>

        </div>
        <!-- end:form register -->

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
        <!-- end:javascript -->

    </body>
</html>	<?php }} ?>
