<?php
/* Smarty version 4.3.4, created on 2024-06-20 17:31:38
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6674596aec02a2_48786637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb6962cd4500af78ba1d2f945969220ce31fc87f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\catalog\\_partials\\products.tpl',
      1 => 1718901088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:themes/ebusiness/templates/_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_6674596aec02a2_48786637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php echo '<script'; ?>
 src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"><?php echo '</script'; ?>
>

<div id="js-product-list">
  <div class="products row" id="productList" style="margin-right: auto;">
    <?php if ((isset($_smarty_tpl->tpl_vars['filter_1']->value)) && (isset($_smarty_tpl->tpl_vars['filter_3']->value))) {?>
      <article id="current_car_settings" class=" js-product-miniature d-flex justify-content-center col-lg-3" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product" style="background: #282828;display:flex;flex-direction: column;padding:2rem 1rem !important;border-radius:0.25rem;margin-bottom: 2rem;">
        <div style="width: 300px;height:120px;display:flex;flex-direction:column;justify-content:center;align-items:center;position:relative;background:transparent;">
          <img class="img-responsive" src="/img/homepage/models/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_1']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_3']->value, ENT_QUOTES, 'UTF-8');?>
.png" style="margin: 0 auto;max-width: 300px; position: relative; top: -5px;pointer-events: none;">
        </div>
        <div class="current-car-content">
          <div class="addToMyCarsButton" style="position: relative; top: -5px;cursor: pointer; color: dodgerblue;font-weight:600;"
          >
            Click to receive informations about new products for this car
          </div>
          <div class="mobile">
            <span><img src="/img/homepage/brands/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_1']->value, ENT_QUOTES, 'UTF-8');?>
.png" style="width: 40px;"/></span>
            <span>|</span>
            <span style="color: var(--asm-color) !important;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_2']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <span>|</span>
            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_3']->value, ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
          <div class="desktop details-info-car-dektop">
            <div><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_1']->value, ENT_QUOTES, 'UTF-8');?>
 | <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_2']->value, ENT_QUOTES, 'UTF-8');?>
 </div>
            <div style="margin-top: 11px;"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_3']->value, ENT_QUOTES, 'UTF-8');?>
 | <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ukoo_name_4']->value, ENT_QUOTES, 'UTF-8');?>
 </div>
          </div>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_791582516674596aebb1f6_67128583', 'product_miniature');
?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


  
  </div>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15952986966674596aebc1a7_58069189', 'pagination');
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


function addToMyCars(id_brand, id_model, id_type, id_version, logged, brand, model, type, version){
        
        let id_customer=0;
        let email='';
        
        if(logged == 1){
            id_customer = <?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['cookie']->value->id_customer), ENT_QUOTES, 'UTF-8');?>
;
            email = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cookie']->value->email, ENT_QUOTES, 'UTF-8');?>
";
        } else {
            email = prompt("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter your email.'),$_smarty_tpl ) );?>
");

            if (email != null) {
                // Additional logic can be placed here if needed
            } else {
                alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You did not enter an email. Please try again!'),$_smarty_tpl ) );?>
");
                return; // Exit the function if no email is entered
            } 
        }
        
        if(email.length > 0){
            $.ajax({
                url: "/custom/front/carNewsletter/carNewsletter.php",
                type: 'POST',
                data: {
                    'id_brand': id_brand,
                    'id_model': id_model,
                    'id_type': id_type,
                    'id_version': id_version,
                    'email': email,
                    'id_customer': id_customer,
                    'brand': brand,
                    'model': model,
                    'type': type,
                    'version': version,
                    'iso_code': "<?php echo htmlspecialchars((string) Context::getContext()->language->iso_code, ENT_QUOTES, 'UTF-8');?>
"
                },
                dataType: 'json',
                success: function (data) {
                    $('.addToMyCarsButton').remove();
                }
            });
        }
        
    }
<?php echo '</script'; ?>
>


<?php }
/* {block 'product_miniature'} */
class Block_791582516674596aebb1f6_67128583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_791582516674596aebb1f6_67128583',
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
class Block_15952986966674596aebc1a7_58069189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_15952986966674596aebc1a7_58069189',
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
