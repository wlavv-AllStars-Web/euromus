<?php
/* Smarty version 4.3.4, created on 2024-01-15 17:18:43
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a568f36d9225_28657886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefbd256f756ffe65013690df7ab14380be28bdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1705329907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/_partials/subcategories.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_65a568f36d9225_28657886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25811228665a568f36cec60_98902073', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122998606965a568f36cf9c1_66891388', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
class Block_25811228665a568f36cec60_98902073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_25811228665a568f36cec60_98902073',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
class Block_91697846765a568f36cfd04_26442770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 id="js-product-list-header" style="margin-left:3rem;" class="h2">
      <?php if ($_smarty_tpl->tpl_vars['listing']->value['label']) {?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>

      <?php } else { ?> 
        <div class="breadcrumb">
            <a class="home" href="https://euromuscleparts/" title="Return to Home">
              <i class="fa fa-home" style="color: #103054;"></i>
            </a> 
            
        </div>
      <?php }?>
    </h1>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'subcategory_list'} */
class Block_171666817165a568f36d0ec8_76478996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subcategories'=>$_smarty_tpl->tpl_vars['subcategories']->value), 0, false);
?>
      <?php }?>
    <?php
}
}
/* {/block 'subcategory_list'} */
/* {block 'product_list_top'} */
class Block_118838917065a568f36d4858_05454941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_8876495665a568f36d5228_93022888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_179016315365a568f36d5da5_92520756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-6 col-xl-4"), 0, false);
?>
        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_95600097465a568f36d6909_11092361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_footer'} */
class Block_78249704565a568f36d84f6_88220379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_122998606965a568f36cf9c1_66891388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122998606965a568f36cf9c1_66891388',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_91697846765a568f36cfd04_26442770',
  ),
  'subcategory_list' => 
  array (
    0 => 'Block_171666817165a568f36d0ec8_76478996',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_118838917065a568f36d4858_05454941',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_8876495665a568f36d5228_93022888',
  ),
  'product_list' => 
  array (
    0 => 'Block_179016315365a568f36d5da5_92520756',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_95600097465a568f36d6909_11092361',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_78249704565a568f36d84f6_88220379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91697846765a568f36cfd04_26442770', 'product_list_header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171666817165a568f36d0ec8_76478996', 'subcategory_list', $this->tplIndex);
?>

    
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderCategory"),$_smarty_tpl ) );?>


    <section id="products">
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118838917065a568f36d4858_05454941', 'product_list_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8876495665a568f36d5228_93022888', 'product_list_active_filters', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179016315365a568f36d5da5_92520756', 'product_list', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95600097465a568f36d6909_11092361', 'product_list_bottom', $this->tplIndex);
?>


      <?php } else { ?>
        <div id="js-product-list-top"></div>

        <div id="js-product-list">
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

          <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
?>
        </div>

        <div id="js-product-list-bottom"></div>
      <?php }?>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78249704565a568f36d84f6_88220379', 'product_list_footer', $this->tplIndex);
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>


  </section>
<?php
}
}
/* {/block 'content'} */
}
