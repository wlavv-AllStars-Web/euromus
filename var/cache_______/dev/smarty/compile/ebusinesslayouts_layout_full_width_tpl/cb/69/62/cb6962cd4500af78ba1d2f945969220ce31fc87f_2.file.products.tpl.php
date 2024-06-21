<?php
/* Smarty version 4.3.4, created on 2024-06-19 12:07:01
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6672bbd5e47767_35791060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb6962cd4500af78ba1d2f945969220ce31fc87f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\_partials\\products.tpl',
      1 => 1718795215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:themes/ebusiness/templates/_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_6672bbd5e47767_35791060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php echo '<script'; ?>
 src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"><?php echo '</script'; ?>
>

<div id="js-product-list">
  <div class="products row" id="productList" style="margin-right: auto;">
    <?php if ((isset($_smarty_tpl->tpl_vars['filter_1']->value)) && (isset($_smarty_tpl->tpl_vars['filter_3']->value))) {?>
      <article class="product-miniature js-product-miniature d-flex justify-content-center col-lg-3" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
        <div class="thumbnail-container" style="width: 526px;height:349px;display:flex;flex-direction:column;justify-content:center;align-items:center;position:relative">
          
        </div>
      </article>
    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20359929466672bbd5e44a17_91522198', 'product_miniature');
?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


  
  </div>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9841356436672bbd5e45af0_26815338', 'pagination');
?>


</div>
<?php echo '<script'; ?>
>

// var initialPageUrl = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['initialPage']->value, ENT_QUOTES, 'UTF-8');?>
";

// window.addEventListener('unload', function() {
//   var currentUrl = window.location.href;
//   if (currentUrl.includes('?page=')) {
//         // Remove the ?page= parameter from the URL
//         var updatedUrl = currentUrl.replace(/\?page=\d+/i, '');
        
//         // Update the URL without reloading the page
//         window.location.href = updatedUrl
//     }

// });



//     document.addEventListener('DOMContentLoaded', function () {


//     var pageNumber = 2; // Assuming the next page is 2 initially
//     var brand = ''; // Initialize brand variable

//     // Extract brand information from the current URL
//     var currentUrl = window.location.href;
//     var brandMatch = currentUrl.match(/\/en\/brand\/([^\/]+)/);
//     if (brandMatch && brandMatch[1]) {
//         brand = brandMatch[1];
//     }

//     var isLoading = false;
//     var totalPageCount = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totalPages']->value, ENT_QUOTES, 'UTF-8');?>
;

//     var loadingSpinner = document.getElementById('loadingSpinner');
//     var nomoreproductsDiv = document.getElementById('nomoreproducts');
//     nomoreproductsDiv.style.display = 'none'

//     var infiniteScroll = new InfiniteScroll('#productList', {
//         path: function () {
//             return '/en/brand/' + brand + '?page=' + pageNumber;
//         },
//         append: '.product-miniature',
//         status: '.page-load-status',
//         hideNav: '.pagination',
//         loadOnScroll: false,
//     });

//     infiniteScroll.on('request', function (path, settings) {
//       // console.log('Requesting page:', path);
      
//         if (pageNumber > totalPageCount) {
//             // Stop loading more pages if current page exceeds the total number of pages
//             infiniteScroll.destroy();
//             nomoreproductsDiv.style.display = 'flex'
//             nomoreproductsDiv.style.justifyContent = 'center'

//             document.getElementById('loadMoreBtn').remove()
//             return;
//         }
//         isLoading = true;
//         loadingSpinner.style.display = 'block';
// });

// infiniteScroll.on('load', function (response, path, items) {
//     // console.log('Page loaded:', path);
//     isLoading = false;
//     loadingSpinner.style.display = 'none';
//     pageNumber++;
// });

// infiniteScroll.on('append', function (response, path, items) {
//     // console.log('Append content:', items);
//     // Handle the response, update pageNumber, or perform any other logic

//     if (!response || pageNumber >= totalPageCount) {
//             infiniteScroll.options.loadOnScroll = false;
//         }
// });


//     document.getElementById('loadMoreBtn').addEventListener('click', function () {
//         // Manually trigger Infinite Scroll when the button is clicked
//         // console.log('Requesting page:', '/en/brand/' + brand + '/ajaxLoadMoreProducts?page=' + pageNumber);
        
//         infiniteScroll.loadNextPage();
//     });
// });

<?php echo '</script'; ?>
>


<?php }
/* {block 'product_miniature'} */
class Block_20359929466672bbd5e44a17_91522198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_20359929466672bbd5e44a17_91522198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_9841356436672bbd5e45af0_26815338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_9841356436672bbd5e45af0_26815338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:themes/ebusiness/templates/_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
}
