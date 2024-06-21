<?php
/* Smarty version 4.3.4, created on 2024-06-11 16:15:34
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\catalog\_partials\miniatures\brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66686a16de5bd3_53294832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e4153a5ad08f8e955b5f4c00fecdfb1af7aa8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\catalog\\_partials\\miniatures\\brand.tpl',
      1 => 1718107938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66686a16de5bd3_53294832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119634597666686a16ddfec3_59977120', 'brand_miniature_item');
?>

<?php }
/* {block 'brand_miniature_item'} */
class Block_119634597666686a16ddfec3_59977120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_miniature_item' => 
  array (
    0 => 'Block_119634597666686a16ddfec3_59977120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (Context::getContext()->customer->logged) {?>
    <li class="brand_logged col-md-3 col-xs-6" style="margin-top: 2rem;">
      <div class="brand_content_item_logged" style="border: 1px solid #0273eb;">
          <div class="brand-infos">
            <h3 style="text-align: center;background:#0273eb;color:#fff;padding: 0.5rem 1rem"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
          </div>
          <div class="brand-img" >
            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="display:flex;justify-content:center;align-items:center;"><img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="width: 100%;max-width:150px;"></a>
          </div>
          
      </div>
    </li>
  <?php } else { ?>
    <li class="brand col-md-12">
      <div class="brand_content_item">
          <div class="brand-img" style="max-width: 250px;overflow:hidden;">
            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
          </div>
          <div class="brand-infos">
            <h3><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
            <?php echo $_smarty_tpl->tpl_vars['brand']->value['description'];?>

          </div>
      </div>
    </li>
  <?php }
}
}
/* {/block 'brand_miniature_item'} */
}
