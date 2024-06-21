<?php
/* Smarty version 4.3.4, created on 2024-06-05 16:08:05
  from 'module:ps_linklistviewstemplateshooklinkblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66607f55aff416_42023381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:ps_linklistviewstemplateshooklinkblock.tpl',
      1 => 1716458343,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66607f55aff416_42023381 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\euromus/themes/probusiness/modules/ps_linklist/views/templates/hook/linkblock.tpl --><style>
  .text {
    color: white !important;
    text-transform: uppercase;
    font-weight: bold !important;
    font-size: 16px !important;
    font-family: "Open Sans", sans-serif;
  }

  .footer-container .links li a:before {
    display: none;
  }

  @media (max-width: 760px) {
    .alignment {
      width: 100%;
    }

    .bigalign {
      display: flex;
      flex-direction: row-reverse;


    }
  }

  .links.footer_linklist div.wrapper:nth-child(n+2) {
    display: unset;
  }
</style>
<div style="padding: 25px 7rem 0 7rem;" class="col-xs-12 col-sm-10 col-md-12 links footer_linklist alignment bigalign">
  <div class="row alignment ">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
      <div class="col-md-3 col-sm-10 wrapper">

        <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
        <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_expand_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
          data-toggle="collapse">
          <span class="text h3"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkBlock']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
          <span class="pull-xs-right">
            
          </span>
        </div>
        <ul id="footer_sub_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_expand_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="collapse">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
            
                        <li style="list-style-type: none !important;">
              <?php if ($_smarty_tpl->tpl_vars['link']->value['title'] == "Facebook") {?>
                <img class="left_icon_footer" src="/img/asd/facebook.png" width="24" alt="facebook">
              <?php } elseif ($_smarty_tpl->tpl_vars['link']->value['title'] == "Instagram") {?>
                <img class="left_icon_footer" src="/img/asd/instagram.png" width="24" alt="instagram">
              <?php } else { ?>
                <img class="left_icon_footer" src="/img/asd/ASD_footer_ima.png" alt="Star">
              <?php }?>
              <a id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkBlock']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                class="text <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['description'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

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
    <div class="col-md-3 col-sm-10 wrapper">
      <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_4"
        data-toggle="collapse">
        <span class="text h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Event"),$_smarty_tpl ) );?>
</span>
      </div>
      <ul id="footer_sub_menu_4" class="collapse">
        <li>
          <a target="_blank" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['homepage_footer']->value['link_footer'], ENT_QUOTES, 'UTF-8');?>
">
            <img src="https://www.all-stars-distribution.com/img/media_images/Events/main_250x100.webp?updated=104794782"
              title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['homepage_footer']->value['alt_footer'], ENT_QUOTES, 'UTF-8');?>
" id="footer_event_image"
              style="max-width: 200px;max-height: 80px;" class="img-responsive">
          </a>
        </li>
      </ul>
    </div>
   
  </div>
</div><!-- end C:\xampp\htdocs\euromus/themes/probusiness/modules/ps_linklist/views/templates/hook/linkblock.tpl --><?php }
}
