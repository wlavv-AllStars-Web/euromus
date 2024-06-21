<?php
/* Smarty version 4.3.4, created on 2024-06-21 14:34:06
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\listing\manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6675814e6eae64_36338020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '797f3b7ec77a5b46ff7da631a204677e262f880d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\listing\\manufacturer.tpl',
      1 => 1718895954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6675814e6eae64_36338020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5719052866675814e6e4891_30349365', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_5719052866675814e6e4891_30349365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_5719052866675814e6e4891_30349365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  
<div class="description_box" style="display:flex;align-items:center;">
  <div class="webmaster-logomanufacturer" style="width:10%;padding: 0 1rem;">
    <img src="/img/m/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['id'], ENT_QUOTES, 'UTF-8');?>
-medium_default.jpg" style="width:100%;height: auto;"/>
  </div>
  <?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value['short_description'])) {?>
    <div class="description_short" style="display: flex;flex-direction:column;width:80%;">
      <div id="manufacturer-short_description" class="text_description hiddenTextDescription" style="font-size:15px;line-height:22px;text-transform:uppercase;font-weight:500;padding:0 3rem;margin:0 !important;text-align:center;">
        <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>

      </div>
      <button class="show-more" onclick="toggleDescription(this)">Show More</button>
    </div>
  <?php } else { ?>
    <div class="description" style="display: flex;flex-direction:column">
      <div id="manufacturer-description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</div>
      <button class="show-more" onclick="toggleDescription(this)">Show More</button>
    </div>
  <?php }?>
  
</div>
<style>
  .description_short {
    font-size: 15px;
    color: var(--color-text);
  }
  .hiddenTextDescription {
      overflow: hidden;
      /* height:54px; */
      transition:height ease-in 1s;
  }
  .visibleTextDescription {
      overflow: visible;
      /* height:fit-content; */
      transition:height ease-in 1s;
  }

  .show-more {
    border: 0;
    background: none;
    color: var(--asm-color);
    margin: 1rem 0;
    font-size: 1rem;
  }

  .show-more:focus{
    outline: none;
  }
</style>

<?php echo '<script'; ?>
>
document.addEventListener("DOMContentLoaded", function () {
  var descriptionElement = document.getElementById("manufacturer-short_description");
  var fullText = descriptionElement.textContent;
  descriptionElement.textContent = descriptionElement.textContent.slice(0, 400) + '...';
  descriptionElement.setAttribute("data-fulltext", fullText);
});

function toggleDescription() {
    var textLimit = 400;
    var descriptionElement = document.getElementById("manufacturer-short_description");
    var textLength = descriptionElement.innerText.length;
  
    if (descriptionElement.classList.contains("hiddenTextDescription")) {
        descriptionElement.textContent = descriptionElement.getAttribute("data-fulltext");  
        descriptionElement.classList.remove("hiddenTextDescription");
        descriptionElement.classList.add("visibleTextDescription");
        document.querySelector(".show-more").innerText = "Show Less";
    } else {
        if (textLength > textLimit) {
            descriptionElement.textContent = descriptionElement.textContent.slice(0, textLimit) + '...';
        }
        // descriptionElement.textContent = descriptionElement.textContent.slice(0, textLimit);
        descriptionElement.classList.remove("visibleTextDescription");
        descriptionElement.classList.add("hiddenTextDescription");
        document.querySelector(".show-more").innerText = "Show More";
    }
}

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'product_list_header'} */
}
