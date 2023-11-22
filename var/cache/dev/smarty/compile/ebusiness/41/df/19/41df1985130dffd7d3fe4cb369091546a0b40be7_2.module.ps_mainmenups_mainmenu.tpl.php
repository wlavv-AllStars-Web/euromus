<?php
/* Smarty version 4.3.1, created on 2023-11-22 12:55:46
  from 'module:ps_mainmenups_mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655dfa52302054_66581383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:ps_mainmenups_mainmenu.tpl',
      1 => 1700589079,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655dfa52302054_66581383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\euromus\\var\\cache\\dev\\smarty\\compile\\ebusiness\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_858261975655dfa522da028_03305495',
  ),
));
?><!-- begin C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_mainmenu/ps_mainmenu.tpl --><?php $_smarty_tpl->_assignInScope('_counter', 0);?>


<div class="menu d-none d-lg-flex col-12 js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

    <div class="clearfix"></div>
</div>
<div class="menu-mobile d-lg-none ">
  <div class="col-12 p-0 image-box" style="margin-bottom:1rem;border:1px solid #fff;">
    <div onclick="openCarsMenu()">
      <img src="/img/yourcar_es.webp" style="width: 100%;border-radius:5px;"/>
    </div>
  </div>
  <div class="dropdownMenuMobile">
    <div class="clearFilter_button">
      CLEAR FILTER
    </div>
    <div>
      <img src="/img/103.png" style="width: 70px;height:70px"/>
    </div>
  </div>
  <div class="col-12 d-flex p-0" style="margin-bottom: 1rem;gap:1rem">
    <div class="col-6 d-flex p-0  image-box" style="flex:1;border:1px solid #fff;">
    <img src="/img/news_es.webp" style="width: 100%;border-radius:5px;"/>
    </div>
    <div class="col-6 d-flex p-0  image-box" style="flex:1;border:1px solid #fff;">
    <img src="/img/brands_es.webp" style="width: 100%;border-radius:5px;"/>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
function openCarsMenu() {
  const dropdownMenuMobile = document.querySelector(".dropdownMenuMobile")
  dropdownMenuMobile.classList.toggle("show")
}
<?php echo '</script'; ?>
>

<style>
.clearFilter_button{
  color: #fff;
  font-size: 18px;
    padding: 7px 15px;
    margin: 15px 0 0 0;
    border: 1px solid red;
}
.show{
  display: flex !important;
  height: 121px !important;
  margin-bottom: 1rem !important;
}
.dropdownMenuMobile{
  display: flex !important;
  margin-bottom: 0;
  background: #282828;
  border-radius: 5px;
  flex-direction: column;
  width: 100%;
  align-items: center;
  height:0;
  overflow: hidden;
  transition: height ease-in-out 1s, margin-bottom ease-in-out 1s;
}

#_desktop_top_menu{
  position: relative !important;
  z-index: 2;
  padding: 0;
  border-bottom: 2px solid #fff;
}
#top-menu {
  display: flex;
  justify-content: space-evenly;
  margin: 0;
  width: 100%;

}
#top-menu li{
  flex: 1;
  text-transform: uppercase;
  text-align: center;

}
#top-menu li a{
  color: #fff;
}
#top-menu li a:hover{
  color: #000000;
}
#top-menu li:hover{
  background: #fff;
  color: #000000;
}
#lnk-your-car{
  background: red;
}
#lnk-your-car:hover{
  background: #fff;
}
#lnk-your-car:hover a{
  color: red !important;
}
</style><!-- end C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_mainmenu/ps_mainmenu.tpl --><?php }
/* smarty_template_function_menu_858261975655dfa522da028_03305495 */
if (!function_exists('smarty_template_function_menu_858261975655dfa522da028_03305495')) {
function smarty_template_function_menu_858261975655dfa522da028_03305495(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
      <ul class="top-menu" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>id="top-menu"<?php }?> data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
            <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current <?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
              <a
                class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>dropdown-item<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> dropdown-submenu<?php }?>"
                href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
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
/*/ smarty_template_function_menu_858261975655dfa522da028_03305495 */
}
