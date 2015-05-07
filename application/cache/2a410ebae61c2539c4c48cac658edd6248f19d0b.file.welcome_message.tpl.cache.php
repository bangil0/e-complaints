<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-27 01:33:38
         compiled from "C:\xampp\htdocs\ion_auth\application\views\welcome_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2416254efbb624b3952-07672209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a410ebae61c2539c4c48cac658edd6248f19d0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ion_auth\\application\\views\\welcome_message.tpl',
      1 => 1424938673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2416254efbb624b3952-07672209',
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
  'unifunc' => 'content_54efbb626f8e56_08421056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54efbb626f8e56_08421056')) {function content_54efbb626f8e56_08421056($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
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
