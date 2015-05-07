<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-04 01:43:04
         compiled from "application\views\layout\registrasi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1108254f655188d8f13-46901515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46c63bcfde9463686da7c60e2c05e5289309f28' => 
    array (
      0 => 'application\\views\\layout\\registrasi.tpl',
      1 => 1425231270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1108254f655188d8f13-46901515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f65518ac1405_33071119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f65518ac1405_33071119')) {function content_54f65518ac1405_33071119($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

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

        <link rel="shortcut icon" href="img/favicon.png">
    </head>
    <body class="login-page">
        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <!-- BEGIN Register Form -->
            <?php echo form_open('auth/member_registration');?>

            <h3>Daftar Anggota Baru</h3>
            <hr/>
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
        <!-- END Main Content -->


        <!--basic scripts-->
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/jquery/jquery-2.1.1.min.js"><\/script>')<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }} ?>
