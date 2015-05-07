<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-27 00:11:20
         compiled from "/var/www/ion_auth/application/views/administrator/contoh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27996968554ef53a15f9d91-15252311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748246d10a89c79fbc017a648e49b24e1a97872a' => 
    array (
      0 => '/var/www/ion_auth/application/views/administrator/contoh.tpl',
      1 => 1424970676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27996968554ef53a15f9d91-15252311',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef53a163bf69_39831155',
  'variables' => 
  array (
    'data' => 0,
    'team' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef53a163bf69_39831155')) {function content_54ef53a163bf69_39831155($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
<p><?php echo $_smarty_tpl->tpl_vars['data']->value['body'];?>
</p>
<h1><?php echo $_smarty_tpl->tpl_vars['data']->value['company'];?>
</h1>
<p>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['data']->value['team']['directors'];?>

            <ul>
                <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['team']['developer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['team']->value;?>
</li>
                <?php } ?>
            </ul>
        </li>
    </ul>
    <h1>Contoh</h1>
</p> <?php }} ?>
