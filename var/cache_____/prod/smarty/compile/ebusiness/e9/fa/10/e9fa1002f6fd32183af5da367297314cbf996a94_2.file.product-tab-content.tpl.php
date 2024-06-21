<?php
/* Smarty version 4.3.4, created on 2024-06-13 14:44:19
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\modules\ukoocompat\views\templates\hook\product-tab-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666af7b30c11e5_28429598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9fa1002f6fd32183af5da367297314cbf996a94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\modules\\ukoocompat\\views\\templates\\hook\\product-tab-content.tpl',
      1 => 1706616680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666af7b30c11e5_28429598 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ukoocompat_tabcontent">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compatTab']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['search']->filters, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value->id != 10) {?><th class="even"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</th> <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['compatibilities'], 'compat', false, NULL, 'compatRow', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['compat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['compat']->value) {
$_smarty_tpl->tpl_vars['compat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_compatRow']->value['index']++;
?>
                <tr<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_compatRow']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_compatRow']->value['index'] : null) >= 5) {?> style="display:none;" class="compatNotDisplay" <?php }?>>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['search']->filters, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
					 <?php if ($_smarty_tpl->tpl_vars['filter']->value->id != 10) {?>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['compat']->value[('filter_').($_smarty_tpl->tpl_vars['filter']->value->id_ukoocompat_filter)] == '*') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','d'=>'Modules.Ukoocompat.ProductTab'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) mb_strtolower((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->name,'htmlall','UTF-8' )), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['compat']->value[('filter_').($_smarty_tpl->tpl_vars['filter']->value->id_ukoocompat_filter)],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </td>
					 <?php }?>	
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<tr <?php if (count($_smarty_tpl->tpl_vars['tab']->value['compatibilities']) < 5) {?> style="display:none" <?php }?>>
			<td>
			<a id="showMoreCompat"<?php if (count($_smarty_tpl->tpl_vars['tab']->value['compatibilities']) < 5) {?> style="display:none" <?php }?> style="color:red;font-size:12px;" href="javascript:void();" onclick="$('.compatNotDisplay:hidden, #reduceCompat').show(); $(this).hide();">...<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See more compatibilities','d'=>'Modules.Ukoocompat.ProductTab'),$_smarty_tpl ) );?>
</a>
			<a id="reduceCompat" style="display:none; color:red;font-size:12px;"  href="javascript:void();" onclick="$('.compatNotDisplay:visible').hide(); $('#showMoreCompat').show(); $(this).hide();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduce','d'=>'Modules.Ukoocompat.ProductTab'),$_smarty_tpl ) );?>
...</a>
			</td>
			</tr>
        </tbody>
    </table>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
