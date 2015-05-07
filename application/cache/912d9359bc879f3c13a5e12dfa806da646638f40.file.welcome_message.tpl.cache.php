<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 09:24:14
         compiled from "C:\wamp\www\ion_auth\application\views\welcome_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2913454eed604878864-88987186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912d9359bc879f3c13a5e12dfa806da646638f40' => 
    array (
      0 => 'C:\\wamp\\www\\ion_auth\\application\\views\\welcome_message.tpl',
      1 => 1424938673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2913454eed604878864-88987186',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54eed6049bcc30_51256720',
  'variables' => 
  array (
    'data' => 0,
    'team' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54eed6049bcc30_51256720')) {function content_54eed6049bcc30_51256720($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
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
