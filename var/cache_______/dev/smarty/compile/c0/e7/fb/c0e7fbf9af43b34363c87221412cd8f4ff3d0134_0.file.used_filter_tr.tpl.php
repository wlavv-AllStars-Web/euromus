<?php
/* Smarty version 4.3.4, created on 2024-06-18 12:11:08
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\admin\ukoo_compat_search\helpers\form\used_filter_tr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66716b4cb3eca3_47858944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e7fbf9af43b34363c87221412cd8f4ff3d0134' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\admin\\ukoo_compat_search\\helpers\\form\\used_filter_tr.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66716b4cb3eca3_47858944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr id="tr_used_filter_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id_ukoocompat_search_filter'] ));?>
" class="table_row">
    <td class="pointer" onclick="getSearchFilterForm(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id_ukoocompat_search_filter'] ));?>
);">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['name'],'htmlall','UTF-8' ));?>

    </td>
	<td class="pointer" onclick="getSearchFilterForm(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id_ukoocompat_search_filter'] ));?>
);">
		{FILTER:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
}
	</td>
                                                                    <td class="pointer center">
        <a class="list-action-enable action-<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['active'] )) == 1) {?>enabled<?php } else { ?>disabled<?php }?>" href="javascript:void(0);" onclick="toggleSearchFilterState(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id_ukoocompat_search_filter'] ));?>
);" title="<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['active'] )) == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','mod'=>'ukoocompat'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled','mod'=>'ukoocompat'),$_smarty_tpl ) );
}?>">
            <i class="icon-check<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['active'] )) == 0) {?> hidden<?php }?>"></i>
            <i class="icon-remove<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['active'] )) == 1) {?> hidden<?php }?>"></i>
        </a>
    </td>
    <td class="fixed-width-xs">
        <div class="btn-group-action">
            <div class="btn-group pull-right">
                <a href="javascript:void(0);" onclick="getSearchFilterForm(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id_ukoocompat_search_filter'] ));?>
);" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Options','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
" class="edit btn btn-default">
                    <i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Options','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                </a>
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-caret-down"></i>&nbsp;
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="javascript:void(0);" onclick="removeFilterFromSearch(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id_ukoocompat_search_filter'] ));?>
);" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from search','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
" class="delete">
                            <i class="icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from search','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </td>
</tr><?php }
}
