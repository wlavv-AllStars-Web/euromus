<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:15:00
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\hook\search-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a17394674ba0_46590658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1185224e5db074ba30670f3c78812287b5b77cbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\hook\\search-block.tpl',
      1 => 1704886833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./search-block-radio.tpl' => 1,
    'file:./search-block-select.tpl' => 1,
    'file:./search-block-alias.tpl' => 1,
  ),
),false)) {
function content_65a17394674ba0_46590658 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['ajax_reload']->value))) {?>

<div id="ukoocompat_search_block_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" class="wm-hiddencompats block ukoocompat_search_block" style="clear: both;">
<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SELECT YOUR VEHICLE','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
	<div class="block_content">
<style>
    .ukoocompat_search_block {
        background-color: #103054;
        background-image: url(/img/eurmuscle/tire.webp);
        background-repeat: no-repeat;
        background-position: right top;
        background-size: auto;
        display: flex;
        justify-content: center;
        padding: 3rem 0;
    }
</style>
<?php }?>
        <form id="ukoocompat_search_block_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form_action']->value )), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="ajax_ukoo_response ukoocompat_search_block_form<?php if ($_smarty_tpl->tpl_vars['search']->value->dynamic_criteria) {?> dynamic_criteria<?php }?>">
			<input type="hidden" name="id_search" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" />
			<input type="hidden" name="id_lang" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->current_id_lang )), ENT_QUOTES, 'UTF-8');?>
" />

            <input type="hidden" id="multiFilter_news" name="news_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['news_compats']->value)) ? $_smarty_tpl->tpl_vars['news_compats']->value : 0, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_order_by" name="order_by_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['order_by_compats']->value)) ? $_smarty_tpl->tpl_vars['order_by_compats']->value : 'position', ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_order_by_orientation" name="order_by_orientation_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['order_by_orientation_compats']->value)) ? $_smarty_tpl->tpl_vars['order_by_orientation_compats']->value : 'desc', ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_id_manufacturer" name="id_manufacturer_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['id_manufacturer_compats']->value)) ? $_smarty_tpl->tpl_vars['id_manufacturer_compats']->value : '', ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_nr_items" name="nr_items_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['nr_items_compats']->value)) ? $_smarty_tpl->tpl_vars['nr_items_compats']->value : 20, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_n_items" name="n" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['nr_items_compats']->value)) ? $_smarty_tpl->tpl_vars['nr_items_compats']->value : 20, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_page_number" name="p" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['p']->value)) ? $_smarty_tpl->tpl_vars['p']->value : 1, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_id_category" name="id_category" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['id_category']->value)) ? $_smarty_tpl->tpl_vars['id_category']->value : '', ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_root_page" name="root_page" value=""/>
            <input type="hidden" id="ukoo_email" name="ukoo_email" value=""/>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search']->value->filters, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['filter']->value->id < 5) {?>
					<div class="ukoocompat_search_block_filter filter_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['filter']->value->disabled)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->disabled )) == 1) {?> disabled<?php }?>">
						<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value->display_type)) && $_smarty_tpl->tpl_vars['filter']->value->display_type != 'select') {?>
							<span class="ukoocompat_search_block_filter_title"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
						<div class="ukoocompat_search_block_filter_filter">
							<?php if ($_smarty_tpl->tpl_vars['filter']->value->display_type == 'radio') {?>
								<?php $_smarty_tpl->_subTemplateRender('file:./search-block-radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							<?php } else { ?>
								<?php $_smarty_tpl->_subTemplateRender('file:./search-block-select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							<?php }?>
						</div>
					</div>
				<?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="ukoocompat_search_block_button">
                <button id="ukoocompat_search_block_submit_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" type="submit" name="ukoocompat_search_submit" class="button btn btn-default button-medium">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</span>
				</button>
			</div>
            <input type="hidden" id="ukoocompat_page_name" name="page_name" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
            <?php if (!$_smarty_tpl->tpl_vars['is_rewrite_active']->value) {?>
                <input type="hidden" name="fc" value="module"/>
                <input type="hidden" name="module" value="ukoocompat"/>
                <input type="hidden" name="controller" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->controller,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>
        </form>
        <?php if (!(isset($_smarty_tpl->tpl_vars['ajax_reload']->value))) {?>
    </div>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['search']->value->display_alias_search_block)) && $_smarty_tpl->tpl_vars['search']->value->display_alias_search_block) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./search-block-alias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
}
