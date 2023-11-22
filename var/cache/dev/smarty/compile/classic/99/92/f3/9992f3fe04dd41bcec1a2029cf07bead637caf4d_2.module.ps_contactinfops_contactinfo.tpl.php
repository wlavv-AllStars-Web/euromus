<?php
/* Smarty version 4.3.1, created on 2023-11-22 12:53:50
  from 'module:ps_contactinfops_contactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655df9de528716_55269803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfops_contactinfo.tpl',
      1 => 1700566890,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655df9de528716_55269803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<!-- begin C:\xampp\htdocs\euromus/themes/classic/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact col-md-3 links wrapper">
  <div class="title clearfix hidden-md-up" data-target="#contact-infos" data-toggle="collapse">
    <span style="color: White;" class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i style="color: White;" class="material-icons add">keyboard_arrow_down</i>
        <i style="color: White;" class="material-icons remove">keyboard_arrow_up</i>
      </span>
    </span>
  </div>

  <p style="border-bottom: 2px solid rgba(128, 128, 128, 0.5); color: white"
    class="h4 text-uppercase block-contact-title hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
  <div id="contact-infos" class="collapse">
    <ul class="colorul">
      <li class="colorli">
        <p class="color">
          <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

        </p>
      </li>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>

        <li class="colorli">

                    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['contact_infos']->value['phone'],' ',''), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>"<a class='color' href='tel:".$_prefixVariable2."'>",'[/1]'=>'</a>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>


        </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>

        <li class="colorli">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span class="color">','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>

        <li class="colorli">
          <p class="color">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

          </p>
        </li>

      <?php }?>
    </ul>
  </div>
</div><!-- end C:\xampp\htdocs\euromus/themes/classic/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
