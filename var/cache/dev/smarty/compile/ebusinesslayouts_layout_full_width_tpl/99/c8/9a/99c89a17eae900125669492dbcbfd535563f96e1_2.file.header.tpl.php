<?php
/* Smarty version 4.3.1, created on 2023-11-22 12:55:50
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655dfa56dbba71_57560646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c89a17eae900125669492dbcbfd535563f96e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\_partials\\header.tpl',
      1 => 1700589079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655dfa56dbba71_57560646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="header_content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718188400655dfa56db5384_97601205', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1913128858655dfa56db75c4_04009577', 'header_top');
?>

</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLS'),$_smarty_tpl ) );?>

<?php }
/* {block 'header_nav'} */
class Block_1718188400655dfa56db5384_97601205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_1718188400655dfa56db5384_97601205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav d-none d-lg-block" style="margin-bottom:0;background:linear-gradient(to bottom, #969696,#282828);">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;">
            <div class="left-nav">
             <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

            </div>
            <div class="right-nav" style="display: flex;gap:1rem;align-items:center;">
            <a href="./content/6-payment">
              <span style="color: white;">PAIMENT EN 3X / 4X PAR CB - EN SAVOIR PLUS</span>
              </a>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
  </nav>
  
  <nav class="header-nav mobile d-lg-none" style="margin-bottom:0;background: #111111;padding: 0.5rem 0;">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;">
            <div class="left-nav col-4 d-flex justify-content-start align-items-center">
              <i onclick="dropdownSearch()" class="fa-solid fa-magnifying-glass"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLanguageSelector'),$_smarty_tpl ) );?>

            </div>
            <div class="col-4 d-flex justify-content-center">
              <img width="32" height="32" src="/img/eu.png" />
            </div>
            <div class="right-nav  col-4" style="display: flex;gap:1rem;align-items:center;">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBlock'),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
  </nav>
  
  <div id="searchbar" style="display: none;">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

	</div>
  <div id="languageSelectorMobile">
	</div>
  
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_1913128858655dfa56db75c4_04009577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_1913128858655dfa56db75c4_04009577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top" style="background:  #282828;padding:2rem 0;margin:0;">
    <div class="container-fluid">
       <div class="row">
        <div class="col-xs-12 col-lg-4 d-flex justify-content-sm-center p-0" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_url']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="col-md-4  d-none d-lg-flex justify-content-center align-items-center" >
        <img width="90" height="90" src="/img/eu.png" />
        </div>
        <div class="col-md-4 d-none d-lg-flex justify-content-center align-items-center" style="position: relative;z-index:1;">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

            <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
