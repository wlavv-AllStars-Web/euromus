<?php
/* Smarty version 4.3.4, created on 2024-06-18 12:14:17
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\admin\ukoo_compat_search\helpers\form\available_filter_tr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66716c090a32f1_27068791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f11c8b9699fd5927b21cac688a787d1ff356fef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\admin\\ukoo_compat_search\\helpers\\form\\available_filter_tr.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66716c090a32f1_27068791 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr id="tr_available_filter_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
" class="table_row">
    <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['default_name'],'htmlall','UTF-8' ));?>
</td>
    <td class="fixed-width-xs">
        <button class="btn btn-default pull-right" type="button" onclick="addFilterToSearch(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
);">
            <i class="icon-plus-sign" style="height: 14px; width: 14px;"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to search','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

        </button>
    </td>
</tr><?php }
}
