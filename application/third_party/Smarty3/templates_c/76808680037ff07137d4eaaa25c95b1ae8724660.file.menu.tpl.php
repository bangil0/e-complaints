<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 15:49:57
         compiled from "application/views/layout/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:722964063551e8bb532d2c2-89766487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76808680037ff07137d4eaaa25c95b1ae8724660' => 
    array (
      0 => 'application/views/layout/menu.tpl',
      1 => 1428846078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722964063551e8bb532d2c2-89766487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e8bb53734b5_46922828',
  'variables' => 
  array (
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e8bb53734b5_46922828')) {function content_551e8bb53734b5_46922828($_smarty_tpl) {?><!-- BEGIN Sidebar -->
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
