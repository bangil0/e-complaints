<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-01 21:35:22
         compiled from "application/views/layout/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19083345455437f2ea95623-73480239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10fd2c5de1432694a353d71328c4626d7806c49' => 
    array (
      0 => 'application/views/layout/menu.tpl',
      1 => 1430490603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19083345455437f2ea95623-73480239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55437f2eae3ac4_01639058',
  'variables' => 
  array (
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55437f2eae3ac4_01639058')) {function content_55437f2eae3ac4_01639058($_smarty_tpl) {?><!-- BEGIN Sidebar -->
<div id="sidebar" class="navbar-collapse collapse">
    <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ('layout/menu_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif (in_array("Pembimbing",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ('layout/menu_pembimbing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ('layout/menu_pemohon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            
    <?php }?>
    <!-- BEGIN Sidebar Collapse Button -->
    <div id="sidebar-collapse" class="visible-lg">
        <i class="fa fa-angle-double-left"></i>
    </div>
    <!-- END Sidebar Collapse Button -->
</div>
<!-- END Sidebar --><?php }} ?>
