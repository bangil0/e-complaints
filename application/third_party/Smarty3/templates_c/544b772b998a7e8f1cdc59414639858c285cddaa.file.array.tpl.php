<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 12:21:34
         compiled from "application\views\testing\array.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19176555ef324a22403-53804969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '544b772b998a7e8f1cdc59414639858c285cddaa' => 
    array (
      0 => 'application\\views\\testing\\array.tpl',
      1 => 1432290092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19176555ef324a22403-53804969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ef324b788c5_51197889',
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ef324b788c5_51197889')) {function content_555ef324b788c5_51197889($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data_keluhan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['row']->value['Nama'];?>
<br>
    <?php echo $_smarty_tpl->tpl_vars['row']->value['Tipe'];?>
<br>
    <?php echo $_smarty_tpl->tpl_vars['row']->value['IsiKeluhan'];?>
<br>
<?php } ?><?php }} ?>
