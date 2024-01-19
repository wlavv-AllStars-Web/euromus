<?php
/* Smarty version 4.3.4, created on 2024-01-15 17:18:43
  from 'module:ukoocompatviewstemplatesfrontlisting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a568f3311ed4_67904417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4db033d4432e44d958854a80bcf1cb81b8527530' => 
    array (
      0 => 'module:ukoocompatviewstemplatesfrontlisting.tpl',
      1 => 1705330063,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:themes/classic/templates/catalog/listing/product-list.tpl' => 2,
    'file:themes/classic/templates/_partials/pagination.tpl' => 1,
    'file:themes/theme1164/mobile/wm_top_filter.tpl' => 1,
  ),
),false)) {
function content_65a568f3311ed4_67904417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('apply_filter_en', "Apply filters");
$_smarty_tpl->_assignInScope('apply_filter_fr', "Appliquer des filtres");
$_smarty_tpl->_assignInScope('apply_filter_es', "Aplicar filtros");?>



<?php $_smarty_tpl->_assignInScope('listing', array('search'=>$_smarty_tpl->tpl_vars['search']->value,'products'=>$_smarty_tpl->tpl_vars['products']->value,'nb_products'=>$_smarty_tpl->tpl_vars['nb_products']->value,'meta_title'=>$_smarty_tpl->tpl_vars['search']->value->listing_meta_title,'meta_description'=>$_smarty_tpl->tpl_vars['search']->value->listing_meta_description,'sort_orders'=>$_smarty_tpl->tpl_vars['sort_orders']->value,'sort_selected'=>$_smarty_tpl->tpl_vars['sort_selected']->value,'pagination'=>$_smarty_tpl->tpl_vars['pagination']->value));?>
    

<form id="ukoocompat_search_block_form_1" action="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8');?>
/module/ukoocompat/listing" method="POST"> 

<input type="hidden" id="temp_multiFilter_news" name="temp_news_compats" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['news_compats']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="temp_multiFilter_order_by" name="orderby" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_by_compats']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="temp_multiFilter_order_by_orientation" name="orderway" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_by_orientation_compats']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="temp_multiFilter_id_manufacturer" name="id_manufacturer_compats" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_manufacturer_compats']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="temp_multiFilter_nr_items" name="n" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nr_items_compats']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="temp_multiFilter_page_number" name="p" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="temp_multiFilter_id_category" name="id_category" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_category']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="ukoocompat_select_1" name="filters1" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_filter_1']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="ukoocompat_select_2" name="filters2" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_filter_2']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="ukoocompat_select_3" name="filters3" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_filter_3']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="ukoocompat_select_4" name="filters4" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_filter_4']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="ukoocompat_value_1" name="filters1value" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_1']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="ukoocompat_value_2" name="filters1value" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_2']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="ukoocompat_value_3" name="filters1value" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_3']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="ukoocompat_value_4" name="filters1value" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_4']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="sort_selected" name="sort_selected" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_selected']->value['label'], ENT_QUOTES, 'UTF-8');?>
"/>


<input type="hidden" id="temp_multiFilter_root_page" name="temp_root_file" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_page']->value, ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" id="id_search" name="id_search" value="1"/>

</form>

<?php if ((isset($_smarty_tpl->tpl_vars['search']->value->catalog_title)) && !empty($_smarty_tpl->tpl_vars['search']->value->catalog_title)) {?>
    <?php $_smarty_tpl->_assignInScope('catalog_title', $_smarty_tpl->tpl_vars['search']->value->catalog_title);
} else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['search']->value->tags)) && !empty($_smarty_tpl->tpl_vars['search']->value->tags)) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All your products for','mod'=>'ukoocompat'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('catalog_title', $_prefixVariable1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search']->value->tags, 'tag', false, 'k');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['k']->value != '{CATEGORY}') {?>
                <?php $_smarty_tpl->_assignInScope('catalog_title', (($_smarty_tpl->tpl_vars['catalog_title']->value).(' ')).($_smarty_tpl->tpl_vars['tag']->value));?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All your products','mod'=>'ukoocompat'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('catalog_title', $_prefixVariable2);?>
    <?php }
}?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catalog_link']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catalog_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catalog_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><span class="navigation-pipe"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['navigationPipe']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['search']->value->listing_title)) && !empty($_smarty_tpl->tpl_vars['search']->value->listing_title)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->listing_title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for','mod'=>'ukoocompat'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) (($_smarty_tpl->tpl_vars['search']->value->tags['{CATEGORY}']).(' ')).($_prefixVariable3), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('listing_title', $_prefixVariable4);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search']->value->tags, 'tag', false, 'k');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
if ($_smarty_tpl->tpl_vars['k']->value != '{CATEGORY}') {
$_smarty_tpl->_assignInScope('listing_title', (($_smarty_tpl->tpl_vars['listing_title']->value).(' ')).($_smarty_tpl->tpl_vars['tag']->value));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listing_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ((isset($_smarty_tpl->tpl_vars['search']->value->alias)) && !empty($_smarty_tpl->tpl_vars['search']->value->alias)) {?>
    <div id="ukoocompat_search_alias">
        <div class="block_content">
            <?php if (file_exists((($_smarty_tpl->tpl_vars['base_dir_ssl']->value).('../../modules/ukoocompat/views/img/')).($_smarty_tpl->tpl_vars['search']->value->alias->image))) {?>
                <p>
                    <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['base_dir_ssl']->value).('modules/ukoocompat/views/img/')).($_smarty_tpl->tpl_vars['search']->value->alias->image),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" width="120" height="120" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->alias->alias,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                </p>
            <?php }?>
            <div>
                <h1 class="title"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->alias->alias,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
                <?php if ((isset($_smarty_tpl->tpl_vars['search']->value->alias->description)) && !empty($_smarty_tpl->tpl_vars['search']->value->alias->description)) {?>
                    <div><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value->alias->description, ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['search']->value->alias->link)) && !empty($_smarty_tpl->tpl_vars['search']->value->alias->link)) {?>
                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->alias->link,'url','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default">
                        <i class="icon-eye"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See more','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>
                <?php if (file_exists((('modules/ukoocompat/pdf/notice_').($_smarty_tpl->tpl_vars['search']->value->alias->id)).('.pdf'))) {?>
                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ((($_smarty_tpl->tpl_vars['base_dir_ssl']->value).('modules/ukoocompat/pdf/notice_')).($_smarty_tpl->tpl_vars['search']->value->alias->id)).('.pdf'),'url','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="btn btn-default">
                        <i class="icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download documentation','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>
                
                            </div>
        </div>
    </div>

    <p class="page-heading product-listing">
        <span class="cat-name">
            <?php if ((isset($_smarty_tpl->tpl_vars['search']->value->listing_title)) && !empty($_smarty_tpl->tpl_vars['search']->value->listing_title)) {?>
                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->listing_title,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listing_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </span>
    </p>
<?php }?>




<?php if ((isset($_smarty_tpl->tpl_vars['products']->value)) && !empty($_smarty_tpl->tpl_vars['products']->value)) {?>
	<?php if (!Context::getContext()->isMobile()) {?>
	
        <div class="content_sortPagiBar">
                    </div>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                        
                        
            <?php $_smarty_tpl->_subTemplateRender("file:themes/classic/templates/catalog/listing/product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>


        <?php } else { ?>
            <p class="alert alert-warning text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new products.'),$_smarty_tpl ) );?>
</p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <div class="content_sortPagiBar">
                                
            </div>
        <?php }?>
        
	<?php } else { ?>
	
                                                <div class="content_sortPagiBar" id="filters_holder" style="display: none;">
                    </div>

		<?php $_smarty_tpl->_subTemplateRender("file:themes/classic/templates/catalog/listing/product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, true);
?>
		<div class="content_sortPagiBar">
			<div class="bottom-pagination-content clearfix">
							</div>
		</div>
	<?php }
} else { ?>
    <?php if (!Context::getContext()->isMobile()) {?>
        <div class="content_sortPagiBar">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./wm_top_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?><div class="top-pagination-content clearfix"> <?php $_smarty_tpl->_subTemplateRender("file:themes/classic/templates/_partials/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </div><?php }?>
        </div>
    <?php } else { ?>
        <div class="text-center" style="background-color: #333; color: white; text-transform: uppercase;padding: 10px;" onclick="$('#filters_holder').toggle('slow')">
            <span><i class="fas fa-filter"></i></span>
            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars[''.("apply_filter_".((string)$_smarty_tpl->tpl_vars['lang_iso']->value))]->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="content_sortPagiBar" id="filters_holder" style="display: none;">
            <span> <?php $_smarty_tpl->_subTemplateRender("file:themes/theme1164/mobile/wm_top_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </span>
        </div>
    <?php }?>
    <div class="spacer-15"></div>
    <p class="alert alert-warning text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No result for your search.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</p>
<?php }?>


<style>
    div#center_column{ padding: 5px 0; }
</style>
<?php echo '<script'; ?>
>
    // let search =
    // $('.breadcrumb').replaceWith('<div class="breadcrumb"><a class="home" href="https://development.local/" title="Return to Home"><i class="fa fa-home"></i></a> <i style="margin:5px 10px;" class="fa fa-caret-right"></i><span id="tag_filter"></span></div>');
<?php echo '</script'; ?>
>
<?php }
}
