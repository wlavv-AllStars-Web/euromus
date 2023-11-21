<?php
/* Smarty version 4.3.1, created on 2023-11-21 12:18:54
  from 'module:ps_linklistviewstemplateshooklinkblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655ca02e43bcc3_29922444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:ps_linklistviewstemplateshooklinkblock.tpl',
      1 => 1700238372,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655ca02e43bcc3_29922444 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_linklist/views/templates/hook/linkblock.tpl --><div id="linksFooter" class="links p-0">
  <div class="row" style="width: 100%;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
    <div class="wrapper" style="width: 100%;">
      <h3 class="h3 hidden-sm-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
      <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
      <div id="buttonLinksFooter" class="title clearfix hidden-md-up image-box" data-target="#footer_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <span class="h3"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="linksMenu collapse" >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
          <li style="width: 45%;">
            <a id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['class'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['description'], ENT_QUOTES, 'UTF-8');?>
" style="text-align:center;"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php echo '<script'; ?>
>
// function openFooterSubMenu(value) {
//   const footerSubMenu = document.querySelector('.links .linksMenu')
//   footerSubMenu.classList.toggle('linkslists')
// }
  
<?php echo '</script'; ?>
>

<!-- end C:\xampp\htdocs\euromus/themes/ebusiness/modules/ps_linklist/views/templates/hook/linkblock.tpl --><?php }
}
