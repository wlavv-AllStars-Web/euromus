<?php
/* Smarty version 4.3.4, created on 2024-06-18 12:14:16
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\admin\ukoo_compat_search\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66716c0883f7c5_69943625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57ff9a5f45b3f34bb2612058eb611e0dcc2d314' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\admin\\ukoo_compat_search\\helpers\\form\\form.tpl',
      1 => 1705944164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./general.tpl' => 1,
    'file:./behavior.tpl' => 1,
    'file:./association.tpl' => 1,
    'file:./filter.tpl' => 1,
    'file:./seo.tpl' => 1,
    'file:./sitemap.tpl' => 1,
    'file:modal.tpl' => 1,
  ),
),false)) {
function content_66716c0883f7c5_69943625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('form', $_smarty_tpl->tpl_vars['fields']->value[0]['form']);
$_smarty_tpl->_assignInScope('cron_url', (((($_smarty_tpl->tpl_vars['base_url']->value).('modules/ukoocompat/cron.php?secure_key=')).($_smarty_tpl->tpl_vars['secure_key']->value)).('&task=sitemap&id_search=')).($_smarty_tpl->tpl_vars['currentObject']->value->id));?>

<div class="panel">
    <h3><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['legend']['icon'],'htmlall','UTF-8' ));?>
"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value['legend']['title'],'htmlall','UTF-8' ));?>
</h3>
    <div class="productTabs">
        <ul class="tab nav nav-tabs">
            <li class="tab-row">
                <a class="tab-page" id="search_link_general" href="javascript:displaySearchTab('general');"><i class="icon-info"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</a>
            </li>
            <li class="tab-row">
                <a class="tab-page" id="search_link_behavior" href="javascript:displaySearchTab('behavior');"><i class="icon-eye"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Behavior','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</a>
            </li>
            <li class="tab-row">
                <a class="tab-page" id="search_link_association" href="javascript:displaySearchTab('association');"><i class="icon-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Associations','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['currentObject']->value->id) {?>
                <li class="tab-row">
                    <a class="tab-page" id="search_link_filter" href="javascript:displaySearchTab('filter');"><i class="icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</a>
                </li>
                <li class="tab-row">
                    <a class="tab-page" id="search_link_seo" href="javascript:displaySearchTab('seo');"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SEO','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</a>
                </li>
                <li class="tab-row">
                    <a class="tab-page" id="search_link_sitemap" href="javascript:displaySearchTab('sitemap');"><i class="icon-sitemap"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</a>
                </li>
            <?php }?>
        </ul>
    </div>
    <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'htmlall','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentToken']->value,'htmlall','UTF-8' ));?>
" id="ukoocompat_search_form" class="defaultForm form-horizontal AdminUkooCompatSearch" method="post">
        <?php if ($_smarty_tpl->tpl_vars['currentObject']->value->id) {?><input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'htmlall','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'htmlall','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentObject']->value->id ));?>
" /><?php }?>
        <input type="hidden" id="currentFormTab" name="currentFormTab" value="general" />
        <input type="hidden" id="currentToken" name="currentToken" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentToken']->value,'htmlall','UTF-8' ));?>
" />
        <input type="hidden" id="searchFilterToken" name="searchFilterToken" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['searchFilterToken']->value,'htmlall','UTF-8' ));?>
" />
        <input type="hidden" id="currentIdLang" name="currentIdLang" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_id_lang']->value ));?>
" />
        <div id="search_general" class="panel search_tab">
            <?php $_smarty_tpl->_subTemplateRender('file:./general.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="search_behavior" class="panel search_tab">
            <?php $_smarty_tpl->_subTemplateRender('file:./behavior.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="search_association" class="panel search_tab">
            <?php $_smarty_tpl->_subTemplateRender('file:./association.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['currentObject']->value->id) {?>
            <div id="search_filter" class="panel search_tab">
                <?php $_smarty_tpl->_subTemplateRender('file:./filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div id="search_seo" class="panel search_tab">
                <?php $_smarty_tpl->_subTemplateRender('file:./seo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div id="search_sitemap" class="panel search_tab">
                <?php $_smarty_tpl->_subTemplateRender('file:./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php }?>
        <div class="panel-footer">
            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminUkooCompatSearch'),'html','UTF-8' ));?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</a>
            <button type="submit" name="submitAddukoocompat_searchAndBackToParent" id="ukoocompat_search_form_submit_btn" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</button>
            <button type="submit" name="submitAddukoocompat_searchAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</button>
        </div>
    </form>
    <?php echo '<script'; ?>
 type="text/javascript" src="../modules/ukoocompat/views/js/form.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		var iso = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso']->value,'htmlall','UTF-8' ));?>
';
		var pathCSS = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (defined('_THEME_CSS_DIR_') ? constant('_THEME_CSS_DIR_') : null),'htmlall','UTF-8' ));?>
';
		var ad = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ad']->value,'htmlall','UTF-8' ));?>
';
	<?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'ukoocompat_modal'), 0, false);
}
}
