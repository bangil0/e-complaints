<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-27 01:35:48
         compiled from "application\views\administrator\contoh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1656054efbbe4d6e064-27690363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8486af80fa54837079e740510cfd9fab60d153f7' => 
    array (
      0 => 'application\\views\\administrator\\contoh.tpl',
      1 => 1424973619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656054efbbe4d6e064-27690363',
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
  'unifunc' => 'content_54efbbe4dbbe10_44029815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54efbbe4dbbe10_44029815')) {function content_54efbbe4dbbe10_44029815($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
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
