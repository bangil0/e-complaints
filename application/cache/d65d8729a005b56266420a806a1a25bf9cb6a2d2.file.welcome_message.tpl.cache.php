<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 17:04:11
         compiled from "/var/www/ion_auth/application/views/welcome_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46334430554eeef9b1f3ea5-40809407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd65d8729a005b56266420a806a1a25bf9cb6a2d2' => 
    array (
      0 => '/var/www/ion_auth/application/views/welcome_message.tpl',
      1 => 1424938673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46334430554eeef9b1f3ea5-40809407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'team' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54eeef9b2144f5_05024496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54eeef9b2144f5_05024496')) {function content_54eeef9b2144f5_05024496($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
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
</p> <?php }} ?>
