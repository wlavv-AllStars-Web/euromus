<?php
/* Smarty version 4.3.4, created on 2024-06-18 12:14:16
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\admin\ukoo_compat_search\helpers\form\association.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66716c08e42d24_51683193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd135de02cfe772744d9369a56a7a77ee4e2ba417' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\admin\\ukoo_compat_search\\helpers\\form\\association.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66716c08e42d24_51683193 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can select the categories on which research will be displayed.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

</div>

<?php echo $_smarty_tpl->tpl_vars['category_tree']->value;
}
}
