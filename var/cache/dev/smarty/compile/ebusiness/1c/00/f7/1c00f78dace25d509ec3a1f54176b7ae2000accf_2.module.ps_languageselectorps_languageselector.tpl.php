<?php
/* Smarty version 4.3.1, created on 2023-11-21 12:18:53
  from 'module:ps_languageselectorps_languageselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655ca02d3a2c43_41510496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselectorps_languageselector.tpl',
      1 => 1700236641,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655ca02d3a2c43_41510496 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_languageselector/ps_languageselector.tpl --><div id="_desktop_language_selector" style="padding-left: 15px;">
  <div class="language-selector-wrapper">
        <div class="language-selector dropdown js-dropdown">
    
      <span class=" d-none d-lg-block" data-toggle="dropdown" style="text-transform: uppercase;"><img width="20" src="/img/asmFlags/flag<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class=" mobile d-lg-none text-uppercase" onclick="mobileFlags()"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
      
      <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="d-none d-lg-block">
        <i class="material-icons material-icons-expand_more" style="position: relative;"></i>
      </a>
      <ul class="dropdown-menu " style="background: #121212;right:0;left:unset;margin-top:1rem;z-index:99999;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
          <li style="display: flex;justify-content:center;width:100%;" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
            <div style="display: flex;justify-content:space-between;align-items:center;width:100%;padding-left:0.5rem;">
              <img width="20" src="/img/asmFlags/flag<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg">
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="dropdown-item"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?>class="current link" style="color: #dd1411 !important;"<?php } else { ?>style="color: #fff" <?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</a>
            </div>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <div style="display: none;">
        <ul class="selectorMobileFlags d-lg-none">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
            <li style="display: flex;justify-content:center;" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
              <div style="display: flex;justify-content:center;align-items:center;">
               <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
">
                <img  src="/img/asmFlags/flag<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg">
                               </a>
                  </div>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>

      <select class="link hidden-md-up hidden-sm-down">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
          <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
  isDropdownVisible = false;
 
	function mobileFlags() {
    const dropdownMobile = document.getElementById("languageSelectorMobile");
    const dropdown = document.querySelector('.selectorMobileFlags');
    
    if (!isDropdownVisible) {
        dropdownMobile.appendChild(dropdown);
        isDropdownVisible = true;
        console.log(isDropdownVisible + dropdown)
    } else {
      const dropdownFlags = document.querySelector('#languageSelectorMobile .selectorMobileFlags')
      
      if (dropdownMobile.contains(dropdownFlags)) {
            dropdownMobile.removeChild(dropdownFlags);
      }

        isDropdownVisible = false;
        console.log(isDropdownVisible + dropdownFlags)
    }

  }
<?php echo '</script'; ?>
>
<!-- end C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_languageselector/ps_languageselector.tpl --><?php }
}
