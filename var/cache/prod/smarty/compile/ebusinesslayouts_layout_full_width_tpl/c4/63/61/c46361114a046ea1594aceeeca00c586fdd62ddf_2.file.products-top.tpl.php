<?php
/* Smarty version 4.3.4, created on 2024-06-21 14:34:08
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667581505bff34_99076233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c46361114a046ea1594aceeeca00c586fdd62ddf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1718895914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_667581505bff34_99076233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  

<div class="btn-toggleFilters mobile" onclick="toggleFilters()">
  <span><i class="fa-solid fa-filter"></i></span>
  <span>Apply Filters</span>
</div>
<div id="js-product-list-top" class="products-selection">

              
    <?php $_smarty_tpl->_assignInScope('categories', Category::getCategories());?>
  
  

      <div class="box-sortby col-md-3">
    <div class="row sort-by-row">
      
      <div class=" products-sort-order dropdown">
        <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By Category','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    <i class="material-icons pull-xs-right">arrow_drop_down</i>
        </a>
        <div class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value[2], 'categoryLevel1');
$_smarty_tpl->tpl_vars['categoryLevel1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoryLevel1']->value) {
$_smarty_tpl->tpl_vars['categoryLevel1']->do_else = false;
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryLevel1']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
              
            <a
            rel="nofollow"
            href="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['id_category'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');?>
"
            class="select-list "
          >
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

          </a>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
  </div>

    <div class=" box-sortby col-md-3">
    <div class="row sort-by-row">
      
      <div class=" products-sort-order dropdown">
        <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By Brand','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    <i class="material-icons pull-xs-right">arrow_drop_down</i>
        </a>
        <div class="dropdown-menu">
                                        </div>
      </div>
    </div>
  </div>

    <div class="box-sortby col-md-3">
    <div class="row sort-by-row">
      <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
              <?php }?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1380477231667581505be454_93963462', 'sort_by');
?>

    </div>
  </div>

    <div class="box-sortby col-md-3">
    <div class="row sort-by-row">
      
      <div class=" products-sort-order dropdown">
        <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By Page','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    <i class="material-icons pull-xs-right">arrow_drop_down</i>
        </a>
        <div class="dropdown-menu">
                                        </div>
      </div>
    </div>
  </div>

    </div>
  <style>
    #manufacturer .products-selection {
      display: flex;
      justify-content: center;
    }

    #manufacturer .select-title{
      color: var(--asm-color)
      font-size: 14px;
      padding: 0.425rem;
    }
    #manufacturer .sort-by-row {
      display: flex;
      justify-content:center;
    }

    #manufacturer .products-sort-order {
      width: 400px;
      height: 32px;
      text-align: center;
    }
    #manufacturer .products-sort-order:hover .select-title{
      color: black;
    }

    #manufacturer .box-sortby{
      max-width: 400px;
    }

    #manufacturer .products-sort-order .dropdown-menu {
      width: 100%;
      border: 1px solid #d0d0d0;
    }

    #manufacturer .products-sort-order .select-list:hover{
      background: var(--asm-color)
    }

    
  </style>
<?php }
/* {block 'sort_by'} */
class Block_1380477231667581505be454_93963462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_1380477231667581505be454_93963462',
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
