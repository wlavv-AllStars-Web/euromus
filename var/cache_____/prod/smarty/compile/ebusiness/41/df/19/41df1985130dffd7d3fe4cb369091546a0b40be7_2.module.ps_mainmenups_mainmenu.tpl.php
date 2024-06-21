<?php
/* Smarty version 4.3.4, created on 2024-06-17 09:19:54
  from 'module:ps_mainmenups_mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ff1aa937103_74805098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:ps_mainmenups_mainmenu.tpl',
      1 => 1718612343,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ff1aa937103_74805098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\euromus\\var\\cache\\prod\\smarty\\compile\\ebusiness\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_691569212666ff1aa91e111_47554157',
  ),
));
if (Context::getContext()->isMobile() != 1) {
echo '<script'; ?>
>
  function toggleDisplay() {
    var element = document.getElementById("sl");
    var altura = element.offsetHeight; // Obtém a altura do elemento

  if(altura == '0'){
  $(".dropdownMenuDesktop").css('height','259px');
  }else
  {
  $(".dropdownMenuDesktop").css('height','0');
  }
  }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('_counter', 0);?>


<div class="menu d-none d-lg-flex col-12 js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

    <div class="clearfix"></div> 
</div>

<div class="dropdownMenuDesktop" id="sl" align="center">
    <h2 class="title-sc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select a vehicle','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h2>
    <div class="clearFilter_button" style="width: 188px;   margin-bottom: 33px;   text-transform: uppercase;">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CLEAR FILTER','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </div>
    <div>
      <img src="/img/103.png" style="width: 70px;height:70px"/>
    </div>
  </div>

<?php }?>


<?php if (Context::getContext()->isMobile() == 1) {?>
  
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
<div class="menu-mobile d-lg-none" style="background-color: #595959;   padding: 13px 16px 0px 16px;   margin-bottom: -18px;">
  <div class="col-12 p-0 image-box" style="margin-bottom:1rem;border:1px solid #fff;">
    <div onclick="openCarsMenu()" style="cursor: pointer;">
      <img src="/img/yourcar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.webp" style="width: 100%;border-radius:5px;"/>
    </div>
  </div>
  <div class="dropdownMenuMobile">
    <div class="clearFilter_button" style="text-transform: uppercase;">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CLEAR FILTER','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </div>
    <div>
      <img src="/img/103.png" style="width: 70px;height:70px"/>
    </div>
  </div>
  <div class="col-12 d-flex p-0" style="margin-bottom: 1rem;gap:1rem">
    <div class="col-6 d-flex p-0  image-box" style="flex:1;border:1px solid #fff;">
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products',true), ENT_QUOTES, 'UTF-8');?>
">
    <img src="/img/news_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.webp" style="width: 100%;border-radius:5px;"/>
    </a>
    </div>
    <div class="col-6 d-flex p-0  image-box" style="flex:1;border:1px solid #fff;">
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8');?>
">
    <img src="/img/brands_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.webp" style="width: 100%;border-radius:5px;"/>
    </a>
    </div>
  </div>
</div>


<?php echo '<script'; ?>
>
function openCarsMenu() {
  const dropdownMenuMobile = document.querySelector(".dropdownMenuMobile")
  if(dropdownMenuMobile){
  dropdownMenuMobile.classList.toggle("show")
  }
}
<?php echo '</script'; ?>
>
<?php }
}
}
/* smarty_template_function_menu_691569212666ff1aa91e111_47554157 */
if (!function_exists('smarty_template_function_menu_691569212666ff1aa91e111_47554157')) {
function smarty_template_function_menu_691569212666ff1aa91e111_47554157(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
      <ul class="top-menu" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>id="top-menu" style="height:50px;"<?php }?> data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?>style="display:flex;flex-wrap: wrap;"<?php }?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?> 
            <li class="menu-link" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
" style="width: 25%;"
             <?php if ($_smarty_tpl->tpl_vars['node']->value['url'] == 'car') {?>onclick="toggleDisplay()"<?php }?>>
            <?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
              <a
                class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>bb<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> dropdown-submenu sss<?php }?>"
                
                  <?php if ($_smarty_tpl->tpl_vars['node']->value['url'] == 'car') {?>onclick="toggleDisplay()" style="cursor: pointer;"<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['node']->value['url'] != 'car') {?>href="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['node']->value['url'] === 'http://asm.local/en/brands') {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>
                
              >
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                                    <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
                  <span class="pull-xs-right hidden-md-up">
                    <span data-target="#top_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" class="navbar-toggler collapse-icons">
                      <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove">&#xE316;</i>
                    </span>
                  </span>
                <?php }?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
         
              </a>
              <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
              <div <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> class="popover sub-menu js-sub-menu collapse"<?php } else { ?> class="collapse"<?php }?> id="top_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

              </div>
              <?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }
}}
/*/ smarty_template_function_menu_691569212666ff1aa91e111_47554157 */
}
