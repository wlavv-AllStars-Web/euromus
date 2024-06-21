<?php
/* Smarty version 4.3.4, created on 2024-06-18 12:14:17
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\admin\ukoo_compat_search\helpers\form\sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66716c09abbb47_68872153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ef1fb716573c94e1ab242d14a47617a7224834' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\admin\\ukoo_compat_search\\helpers\\form\\sitemap.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66716c09abbb47_68872153 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must generate the sitemap every time you make changes in the filters of the search tab.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regenerate sitemap search by clicking the button below, or schedule a daily CRON job on your server to do it for you.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
<br />
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL to declare to the CRON task:','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
 <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cron_url']->value,'quotes','UTF-8' ));?>
</b></p>

    <?php if ((isset($_smarty_tpl->tpl_vars['sitemap_index']->value)) && !empty($_smarty_tpl->tpl_vars['sitemap_index']->value)) {?>
        <br />
        <div id="sitemap_url_to_declare">
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap files already exists.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See below url(s) to declare to search engines:','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</p>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitemap_index']->value, 'sitemap');
$_smarty_tpl->tpl_vars['sitemap']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sitemap']->value) {
$_smarty_tpl->tpl_vars['sitemap']->do_else = false;
?>
                    <li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sitemap']->value,'quotes','UTF-8' ));?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>
</div>

<button type="button" class="btn btn-default" name="generateSitemapSearch" id="generateSitemapSearch" data-cron-url="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cron_url']->value,'quotes','UTF-8' ));?>
">
    <span id="sitemap_regeneration"><i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regenerate sitemap search','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</span>
    <span id="sitemap_regeneration_in_progress" style="display: none;"><i class="icon-refresh icon-spin icon-fw"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap regeneration in progress','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</span>
</button>

<div id="sitemap_regeneration_success" class="alert alert-success" style="display: none; margin-top: 17px;">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap successfully generate.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See below url(s) to declare to search engines:','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</p>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
            <li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ((((($_smarty_tpl->tpl_vars['base_url']->value).('modules/ukoocompat/sitemap/sitemap_index_')).($_smarty_tpl->tpl_vars['currentObject']->value->id)).('_')).($_smarty_tpl->tpl_vars['lang']->value['iso_code'])).('.xml'),'quotes','UTF-8' ));?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<div id="sitemap_regeneration_error" class="alert alert-danger" style="display: none; margin-top: 17px;">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error during sitemap regeneration. Ajax request returned the following error:','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
<br />
        <b id="sitemap_regeneration_error_content"></b></p>
</div>
<?php }
}
