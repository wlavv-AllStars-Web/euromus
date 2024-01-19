<?php
/* Smarty version 4.3.4, created on 2024-01-15 17:18:45
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a568f5aced13_45023888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a181f11aad425cebd1b7686b05e24e9e9052e40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1705338723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_65a568f5aced13_45023888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <div id="js-product-list-top" class="row products-selection" style="display: flex;align-items:center;margin:2rem 0;gap:2rem;">
  
  <?php if ($_smarty_tpl->tpl_vars['ukoo_name_1']->value) {?>
    <div class="col-lg-2 hidden-sm-down total-products">
    <div class="brand-logo">
      <span style="color:#0d2540;">
        <img src="/img/eurmuscle/brandsCars/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_1']->value, ENT_QUOTES, 'UTF-8');?>
.png" style="width: 150px;background-color: #0d2540;padding: 0.5rem;border-radius: 0.5rem;gap:2rem;" />
      </span>
    </div>
  <?php } else { ?>
    <div class="col-lg-5 hidden-sm-down total-products">
  <?php }?>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products']) > 1) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products']))),$_smarty_tpl ) );?>
</p>
    <?php } elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products']) > 0) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
    <?php }?>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['ukoo_name_1']->value) {?>
    <div class="col-lg-4 ukooListTitle">
      <span id="ukoo1"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_1']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <i style="margin:5px 10px;color: #103054;" class="fa fa-caret-right"></i>
      <span id="ukoo2"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_2']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <i style="margin:5px 10px;color: #103054;" class="fa fa-caret-right"></i>
      <span id="ukoo3"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_3']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <i style="margin:5px 10px;color: #103054;" class="fa fa-caret-right"></i>
      <span id="ukoo4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_4']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['ukoo_name_1']->value) {?>
    <div class="col-lg-6 col-xs-12">
  <?php } else { ?>
    <div class="col-lg-7 col-xs-12">
  <?php }?>
      <div class="row sort-by-row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4643495965a568f5acbdf5_38531661', 'sort_by');
?>

        <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
          <div class="col-xs-4 col-sm-3 hidden-md-up filter-button">
            <button id="search_filter_toggler" class="btn btn-secondary js-search-toggler">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
          </div>
        <?php }?>
      </div>
    </div>

  <div class="col-sm-12 hidden-md-up text-sm-center showing">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

      </div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_4643495965a568f5acbdf5_38531661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_4643495965a568f5acbdf5_38531661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
        <?php
}
}
/* {/block 'sort_by'} */
}
