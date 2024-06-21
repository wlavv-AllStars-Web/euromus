<?php
/* Smarty version 4.3.4, created on 2024-06-18 12:14:16
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\admin\ukoo_compat_search\helpers\form\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66716c08eabba2_75463811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb41f15d9108d63b5b38b30e2017bb0664d4496' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\admin\\ukoo_compat_search\\helpers\\form\\filter.tpl',
      1 => 1705933718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./available_filter_tr.tpl' => 1,
    'file:./used_filter_tr.tpl' => 1,
  ),
),false)) {
function content_66716c08eabba2_75463811 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select the filters you want to use in your search block, and configure each one as you see fit.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

</div>
<pre><?php echo print_r($_smarty_tpl->tpl_vars['filters']->value,1);?>
</pre>
<div class="row">
    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-heading">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available filters','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                <span class="badge" id="badge_available_filter"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( count($_smarty_tpl->tpl_vars['filters']->value['available']) ));?>
</span>
            </div>
            <table id="table_available_filter" class="table">
                <tbody>
                    <tr id="table_available_filter_empty"<?php if (count($_smarty_tpl->tpl_vars['filters']->value['available']) > 0) {?> style="display:none;"<?php }?>>
                        <td class="list-empty" colspan="4">
                            <div class="list-empty-msg">
                                <i class="icon-warning-sign list-empty-icon"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No filters available yet.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                            </div>
                        </td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value['available'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:./available_filter_tr.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="panel">
            <div class="panel-heading">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Used filters','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                <span class="badge" id="badge_used_filter"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( count($_smarty_tpl->tpl_vars['filters']->value['used']) ));?>
</span>
            </div>
            <table id="table_used_filter" class="table sortable">
                <thead>
                    <tr class="nodrag nodrop">
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</th>
	                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SEO tag','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</th>
                                                <th class="center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</th>
                        <th class="fixed-width-xs"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="table_used_filter_empty" class="nodrag nodrop"<?php if (count($_smarty_tpl->tpl_vars['filters']->value['used']) > 0) {?> style="display:none;" <?php }?>>
                        <td class="list-empty" colspan="4">
                            <div class="list-empty-msg">
                                <i class="icon-warning-sign list-empty-icon"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No filters used yet.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                            </div>
                        </td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value['used'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:./used_filter_tr.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
