<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:15:00
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\hook\search-block-select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a1739499f023_92275083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee5c371734bed26219833268bfc8ad8d8ac3ca5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\hook\\search-block-select.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a1739499f023_92275083 (Smarty_Internal_Template $_smarty_tpl) {
if (Context::getContext()->isMobile() || $_smarty_tpl->tpl_vars['page_name']->value != 'index') {?>
    <select id="ukoocompat_select_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');?>
" 
    	name="filters<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');?>
" 
    	data-filter-id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id_ukoocompat_filter )), ENT_QUOTES, 'UTF-8');?>
" 
    	class="form-control-2<?php if ($_smarty_tpl->tpl_vars['search']->value->dynamic_criteria) {?> dynamic_criteria<?php }
if ((isset($_smarty_tpl->tpl_vars['filter']->value->disabled)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->disabled )) == 1) {?> disabled<?php }?>" 
    	style="<?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value->selected_criteria[$_prefixVariable1], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 != '') {?>background:none;background-color:#FFF;<?php }?>" 
    	<?php if ($_smarty_tpl->tpl_vars['filter']->value->id == 4) {?> onchange="submitUkooForm();"<?php }?> >
        <option value=""><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
        <?php if (!(isset($_smarty_tpl->tpl_vars['filter']->value->disabled)) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->disabled )) != 1) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value->criteria, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
                    <option
                        value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] )), ENT_QUOTES, 'UTF-8');?>
" style="<?php if ($_smarty_tpl->tpl_vars['filter']->value->id == 1) {?>padding: 3px 0;<?php }?>"
                        <?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['search']->value->selected_criteria[$_prefixVariable3])) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->selected_criteria[$_prefixVariable4] )) == call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] ))) {?> selected="selected"<?php }?>
                    ><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>
<?php } else { ?> 
    <select id="ukoocompat_select_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');?>
" 
    	name="filters<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');?>
" 
    	data-filter-id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id_ukoocompat_filter )), ENT_QUOTES, 'UTF-8');?>
" 
    	class="form-control-2<?php if ($_smarty_tpl->tpl_vars['search']->value->dynamic_criteria) {?> dynamic_criteria<?php }
if ((isset($_smarty_tpl->tpl_vars['filter']->value->disabled)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->disabled )) == 1) {?> disabled<?php }?>" 
    	style="<?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value->selected_criteria[$_prefixVariable5], ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 != '') {?>background:none;background-color:#eee;<?php }?>" 
    	<?php if ($_smarty_tpl->tpl_vars['filter']->value->id == 1) {?> 
    	    onmouseleave="$(this).attr('size','1').css('height','calc(1*34px)').css('position','absolute').css('width','calc(20% - 10px)').css('z-index','99999');;"
    		onmousedown="$(this).attr('size','22').css('height','calc(22*24px)').css('position','absolute').css('width','20%').css('z-index','99999');"
    	<?php }?>
    	<?php if ($_smarty_tpl->tpl_vars['filter']->value->id == 4) {?> 
    		onchange="submitUkooForm();"
    	<?php }?> >
    	
        <option value=""><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
        <?php if (!(isset($_smarty_tpl->tpl_vars['filter']->value->disabled)) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->disabled )) != 1) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value->criteria, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
                    <option onmouseover="$(this).css('background','#0078d7').css('color','#fff')" onmouseleave="$(this).css('background','#eee').css('color','#000')"
                        value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] )), ENT_QUOTES, 'UTF-8');?>
" style="<?php if ($_smarty_tpl->tpl_vars['filter']->value->id == 1) {?>padding: 3px 0;<?php }?>"
                        <?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['search']->value->selected_criteria[$_prefixVariable7])) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->selected_criteria[$_prefixVariable8] )) == call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] ))) {?> selected="selected"<?php }?>
                    ><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>
<<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>
    <?php echo '<script'; ?>
>function submitUkooForm(){}<?php echo '</script'; ?>
>
<?php }
}
}
