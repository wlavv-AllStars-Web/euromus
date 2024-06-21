<?php
/* Smarty version 4.3.4, created on 2024-06-18 12:14:16
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\admin\ukoo_compat_search\helpers\form\behavior.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66716c08c53798_54190260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af827ecc54cffce4d9bb4b130b22d44745537693' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\admin\\ukoo_compat_search\\helpers\\form\\behavior.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66716c08c53798_54190260 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
    <label class="control-label col-lg-3">
        <span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show the catalog view. Usefull if you dont have multiple categories results','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A search for a category page will directly show the view "listing" restrict to this category, whatever the value of this option.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display product listing immediatly after search submission from homepage','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

		</span>
    </label>
    <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
			<input type="radio" name="skip_catalog" id="skip_catalog_on" value="1" <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'skip_catalog') ))) {?>checked="checked"<?php }?> />
			<label class="t" for="skip_catalog_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
			<input type="radio" name="skip_catalog" id="skip_catalog_off" value="0"  <?php if (!call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'skip_catalog') ))) {?>checked="checked"<?php }?> />
			<label class="t" for="skip_catalog_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
			<a class="slide-button btn"></a>
		</span>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-lg-3">
        <span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The "listing" view will show subcategories products from the current search.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display products from subcategories in the "listing" view','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

        </span>
    </label>
    <div class="col-lg-9">
        <span class="switch prestashop-switch fixed-width-lg">
            <input type="radio" name="display_subcategories_products" id="display_subcategories_products_on" value="1" <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'display_subcategories_products') ))) {?>checked="checked"<?php }?> />
            <label class="t" for="display_subcategories_products_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
            <input type="radio" name="display_subcategories_products" id="display_subcategories_products_off" value="0"  <?php if (!call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'display_subcategories_products') ))) {?>checked="checked"<?php }?> />
            <label class="t" for="display_subcategories_products_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
            <a class="slide-button btn"></a>
        </span>
    </div>
</div>

                    																			    
<div class="form-group">
    <label class="control-label col-lg-3">
        <span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reload other filters based on the last selected criteria','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dynamic criteria','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

        </span>
    </label>
    <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
			<input type="radio" name="dynamic_criteria" id="dynamic_criteria_on" value="1" <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'dynamic_criteria') ))) {?>checked="checked"<?php }?> />
			<label class="t" for="dynamic_criteria_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
			<input type="radio" name="dynamic_criteria" id="dynamic_criteria_off" value="0"  <?php if (!call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'dynamic_criteria') ))) {?>checked="checked"<?php }?> />
			<label class="t" for="dynamic_criteria_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
			<a class="slide-button btn"></a>
		</span>
    </div>
</div>

                    																			    
            					        																			    
                    																			    
                    																			    
            					        																			    
<div class="form-group">
    <label class="control-label col-lg-3">
        <span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not display helps save space, but necessary if you use aliases','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display alias search block','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

		</span>
    </label>
    <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
			<input type="radio" name="display_alias_search_block" id="display_alias_search_block_on" value="1" <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'display_alias_search_block') ))) {?>checked="checked"<?php }?> />
			<label class="t" for="display_alias_search_block_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
			<input type="radio" name="display_alias_search_block" id="display_alias_search_block_off" value="0" <?php if (!call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'display_alias_search_block') ))) {?>checked="checked"<?php }?> />
			<label class="t" for="display_alias_search_block_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
			<a class="slide-button btn"></a>
		</span>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-lg-3">
        <span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This can slow down the display of the product page if you have a lot of compatibility!','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display compatibilty tab on the product page','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

		</span>
    </label>
    <div class="col-lg-9">
		<span class="switch prestashop-switch fixed-width-lg">
			<input type="radio" name="display_product_tab" id="display_product_tab_on" value="1" <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'display_product_tab') ))) {?>checked="checked"<?php }?> />
			<label class="t" for="display_product_tab_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
			<input type="radio" name="display_product_tab" id="display_product_tab_off" value="0"  <?php if (!call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'display_product_tab') ))) {?>checked="checked"<?php }?> />
			<label class="t" for="display_product_tab_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</label>
			<a class="slide-button btn"></a>
		</span>
    </div>
</div><?php }
}
