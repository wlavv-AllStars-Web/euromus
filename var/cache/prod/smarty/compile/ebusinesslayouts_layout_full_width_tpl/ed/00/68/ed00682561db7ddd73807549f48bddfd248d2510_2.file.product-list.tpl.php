<?php
/* Smarty version 4.3.4, created on 2024-06-21 14:34:06
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6675814e7a4a41_94471322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed00682561db7ddd73807549f48bddfd248d2510' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1718900143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_6675814e7a4a41_94471322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20132818256675814e798b63_42727022', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_1133001136675814e79e035_25368264 extends Smarty_Internal_Block
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
class Block_8139363466675814e7a1af6_20528020 extends Smarty_Internal_Block
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
class Block_7570916466675814e7a2571_15247843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_19611438726675814e7a2f37_82278812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_20132818256675814e798b63_42727022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20132818256675814e798b63_42727022',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_1133001136675814e79e035_25368264',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_8139363466675814e7a1af6_20528020',
  ),
  'product_list' => 
  array (
    0 => 'Block_7570916466675814e7a2571_15247843',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_19611438726675814e7a2f37_82278812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <section id="main" style="width: 100%;">
  <?php if ($_smarty_tpl->tpl_vars['urls']->value['current_url'] === $_smarty_tpl->tpl_vars['urls']->value['pages']['new_products']) {?>
    <div class="banner_news" style="max-width: 1350px;width:100%;margin:auto;">
      <img src="https://www.all-stars-motorsport.com/img/app_icons/news_en.webp?t=3" style="width:100%"/>
    </div>
  <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['name']) {?>
    <div class="description_box" style="display:flex;align-items:center;">
      <div class="webmaster-logomanufacturer" style="padding: 0 1rem;">
        <img src="/img/m/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['id'], ENT_QUOTES, 'UTF-8');?>
-medium_default.jpg" style="width:100%;height: auto;min-width: 200px;"/>
      </div>
      <?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value['short_description'])) {?>
        <div class="description_short" style="display: flex;flex-direction:column;width:80%;">
        <?php if (strlen($_smarty_tpl->tpl_vars['manufacturer']->value['short_description']) > 550) {?>
          <div id="manufacturer-short_description" class="text_description hiddenTextDescription" style="font-size:15px;line-height:22px;text-transform:uppercase;font-weight:500;padding:0 3rem;margin:0 !important;text-align:center;">
            <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>

          </div>

          <button class="show-more" onclick="toggleDescription(this)">Show More</button>
        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>

        <?php }?>
        </div>
      <?php } else { ?>
        <?php if (strlen($_smarty_tpl->tpl_vars['manufacturer']->value['description']) > 550) {?>
        <div class="description" style="display: flex;flex-direction:column">
          <div id="manufacturer-description" class="text_description hiddenTextDescription"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</div>
          <button class="show-more" onclick="toggleDescription(this)">Show More</button>
        </div>
        <?php } else { ?>
          <div class="description" style="display: flex;flex-direction:column">
            <div id="manufacturer-description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</div>
          </div>
        <?php }?>
      <?php }?>
      
    </div>
  <?php }?>

   


    
    <div id="products" class="sang">

    
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>


        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1133001136675814e79e035_25368264', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8139363466675814e7a1af6_20528020', 'product_list_active_filters', $this->tplIndex);
?>


        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7570916466675814e7a2571_15247843', 'product_list', $this->tplIndex);
?>

        </div>

        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19611438726675814e7a2f37_82278812', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </div>

  </section>
  <style>
  #manufacturer .container {
    max-width: none !important;
    margin: 0;
  }
  #manufacturer #main {
    width: 100%;
    background: #fff;
  }

  .hiddenTextDescription {
      overflow: hidden;
      height:54px;
      transition:height ease-in 1s;
    }
    .visibleTextDescription {
      overflow: visible;
      height:fit-content;
      transition:height ease-in 1s;
    }

  .show-more{
        border:0;
        background:none;
        color: var(--asm-color);
        margin:2rem 0;
        font-size:1.25rem;
    }

    .description_box{
      max-height: 171px;
  overflow: hidden;
    }
  </style>

<?php echo '<script'; ?>
>
function toggleDescription(button) {
  const shortText = button.parentNode.querySelector(".short-text");
  const fullDesc = button.parentNode.querySelector(".full_desc");
  const textDescription = button.parentNode.querySelector(".text_description");

  
  if (textDescription.classList.contains("hiddenTextDescription")) {
  textDescription.classList.remove("hiddenTextDescription");
  textDescription.classList.add("visibleTextDescription");
  button.innerText = "Show Less";
} else {
  textDescription.classList.remove("visibleTextDescription");
  textDescription.classList.add("hiddenTextDescription");
  button.innerText = "Show More";
}
}


<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
