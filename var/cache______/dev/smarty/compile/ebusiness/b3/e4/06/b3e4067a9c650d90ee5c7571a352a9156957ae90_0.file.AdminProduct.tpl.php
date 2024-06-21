<?php
/* Smarty version 4.3.4, created on 2024-06-17 15:00:00
  from 'C:\xampp\htdocs\euromus\modules\totshippingpreview\views\templates\hook\AdminProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670416092f0c9_59798094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e4067a9c650d90ee5c7571a352a9156957ae90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\totshippingpreview\\views\\templates\\hook\\AdminProduct.tpl',
      1 => 1548172132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../admin/multilangform/js.tpl' => 1,
    'file:./input_text_lang.tpl' => 2,
  ),
),false)) {
function content_6670416092f0c9_59798094 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel product-tab">
    <h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
</h3>
    <?php if (!$_smarty_tpl->tpl_vars['ps']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:../admin/multilangform/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <div class="form-group">
        <label for="delivery_time_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value,'html','UTF-8' ));?>
" class="control-label col-lg-3">
            <span class="totlabel_tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also additional delivery days for this product','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery time (days) :','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>

            </span>
        </label>
        <div class="col-lg-9">
            <div class="col-lg-9">
                <input type="text" name="delivery_time" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['delivery_time']->value,'htmlall','UTF-8' ));?>
" >
            </div>
        </div>
        <label class="col-lg-3"></label>
        <div class="col-lg-9">
            <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave empty to use default value','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
</p>
        </div>
        <br><br><br>
        <label for="place_delivery_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value,'html','UTF-8' ));?>
" class="control-label col-lg-3">
            <span class="totlabel_tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specify a specific place of delivery for this product','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Place of delivery :','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>

                </span>
        </label>
        <div class="col-lg-9">
            <div class="col-lg-9">
                <?php $_smarty_tpl->_subTemplateRender("file:./input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['place_delivery']->value,'input_name'=>"place_delivery"), 0, false);
?>
            </div>
        </div>
        <label class="col-lg-3"></label>
        <div class="col-lg-9">
            <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave empty to use default value','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
</p>
        </div>
        <br><br><br>
        <label for="origin_country_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value,'html','UTF-8' ));?>
" class="control-label col-lg-3">
            <span class="totlabel_tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indicate the country of origin for this product','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country of origin :','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>

                </span>
        </label>

        <div class="col-lg-9">
            <div class="col-lg-9">
                <?php $_smarty_tpl->_subTemplateRender("file:./input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['origin_country']->value,'input_name'=>"origin_country"), 0, true);
?>
            </div>
        </div>
        <label class="col-lg-3"></label>
        <div class="col-lg-9">
            <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave empty to use default value','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['ps']->value) {?>
    <div class="panel-footer">
        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'),'html','UTF-8' ));
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_REQUEST['page'] ));
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
</a>
        <button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
</button>
        <button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay','mod'=>'totshippingpreview'),$_smarty_tpl ) );?>
</button>
    </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['ps']->value) {?>
    <style type="text/css">
        .help-block {
            font-family: Georgia, Arial, 'sans-serif';
            font-style: italic;
            width: 500px;
            color: #7F7F7F;
            font-size: 11px;
            margin-top: 25px;
        }
    </style>
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var iso = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_tiny_mce']->value,'htmlall','UTF-8' ));?>
';
        var pathCSS = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (defined('_THEME_CSS_DIR_') ? constant('_THEME_CSS_DIR_') : null),'htmlall','UTF-8' ));?>
';
        var ad = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ad']->value,'htmlall','UTF-8' ));?>
';
        $('.totlabel_tooltip').tooltip();
        if (tabs_manager.allow_hide_other_languages)
            hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['default_form_language']->value;?>
); /* Html code generated, no escape*/
    <?php echo '</script'; ?>
>
</div>
<?php }
}
