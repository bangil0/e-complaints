<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-01 15:41:07
         compiled from "application\views\layout\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9500554382737b4c11-05921828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b5e6aa62bbedf9a3a03e286978a5f9158d776e' => 
    array (
      0 => 'application\\views\\layout\\menu.tpl',
      1 => 1430482276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9500554382737b4c11-05921828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554382737d7e97_03952829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554382737d7e97_03952829')) {function content_554382737d7e97_03952829($_smarty_tpl) {?><!-- BEGIN Sidebar -->
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
