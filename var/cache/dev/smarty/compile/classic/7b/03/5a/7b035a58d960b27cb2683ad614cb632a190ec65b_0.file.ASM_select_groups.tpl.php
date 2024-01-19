<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:03:22
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\hook\ASM_select_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a170da25bc38_02186538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b035a58d960b27cb2683ad614cb632a190ec65b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\hook\\ASM_select_groups.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a170da25bc38_02186538 (Smarty_Internal_Template $_smarty_tpl) {
?><label class="control-label">
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['name'],'html','UTF-8' ));?>

</label>
<select name="id_ukoocompat_criterion_select_groups_[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
]" id="id_ukoocompat_criterion_select_groups_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['id'] > 1) {?>readonly="readonly"<?php }?> onchange="call_ajax_fill_selects(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
)">
    <option value="0">Todas</option>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['id'] < 2 || $_smarty_tpl->tpl_vars['filter']->value['id'] > 4) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['criteria'], 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
            <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] ));?>
">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['value'],'html','UTF-8' ));?>

            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</select><?php }
}
