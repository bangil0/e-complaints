<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 22:16:54
         compiled from "application\views\layout\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29314554cbd21bfc530-49686640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41485b35a36f4a768d04511b334c6b06bda87cc1' => 
    array (
      0 => 'application\\views\\layout\\header.tpl',
      1 => 1432393941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29314554cbd21bfc530-49686640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554cbd21d262f3_51111476',
  'variables' => 
  array (
    'status' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554cbd21d262f3_51111476')) {function content_554cbd21d262f3_51111476($_smarty_tpl) {?><div id="header">
    <div class="overlay">
        <nav class="navbar" role="navigation">
            <div class="container">
                <?php if ($_smarty_tpl->tpl_vars['status']->value==true) {?>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ('layout/menu_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } elseif (in_array("Pemerintah",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ('layout/menu_pemerintah.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ('layout/menu_masyarakat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            
                    <?php }?>
                <?php }?>
            </div>
        </nav>
    </div>
</div>
<?php }} ?>
