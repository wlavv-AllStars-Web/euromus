{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>

<div id="js-product-list">
<div class="products row" id="productList" style="margin-right: auto;">
{foreach from=$listing.products item="product"}
    {block name='product_miniature'}
        {include file='catalog/_partials/miniatures/product.tpl' product=$product}
    {/block}
{/foreach}

</div>

<div id="loadMoreBtn" class="infinite-scroll-button btn" style="margin:2rem auto;cursor:pointer;display:flex;width:200px;justify-content:center;gap:0.5rem;">
    {l s='Load More' d='Shop.Theme.Actions'}
    <div id="loadingSpinner" style="display: none;">
        <i class="fa-solid fa-circle-notch fa-spin"></i>
    </div>
</div>



<div id="nomoreproducts">
 <h2>No More Products</h2>
</div>

{* {$listing.pagination['items_shown_to']}
{$listing.pagination['total_items']}
{$listing.pagination['pages_count']} *}

{* <pre>{print_r($listing.pagination.pages[1]['url'],1)}</pre> *}
{assign var=initialPage value=$listing.pagination.pages[1]['url']}
{assign var=totalPages value=$listing.pagination.pages_count}


  {* {block name='pagination'}
    {include file='_partials/pagination.tpl' pagination=$listing.pagination}
  {/block} *}

{* <script>
$('#items_shown_to').attr('items_shown',parseInt($('#items_shown_to').attr('items_shown'))+parseInt(items.length));
        $('#items_shown_to').text($('#items_shown_to').attr('items_shown'));
</script> *}
  {*<div class="hidden-md-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      {l s='Back to top' d='Shop.Actions'}
      <i class="material-icons">&#xE316;</i>
    </a>
  </div>*}
</div>
<script>
//     function removePageParameter() {
//     var currentUrl = window.location.href;

//     // Check if the URL contains the ?page= parameter
//     if (currentUrl.includes('?page=')) {
//         // Remove the ?page= parameter from the URL
//         var updatedUrl = currentUrl.replace(/\?page=\d+/i, '');
        
//         // Update the URL without reloading the page
//         window.history.replaceState({}, document.title, updatedUrl);
//     }
// }
var initialPageUrl = "{$initialPage}";

window.addEventListener('unload', function() {
  var currentUrl = window.location.href;
  if (currentUrl.includes('?page=')) {
        // Remove the ?page= parameter from the URL
        var updatedUrl = currentUrl.replace(/\?page=\d+/i, '');
        
        // Update the URL without reloading the page
        window.location.href = updatedUrl
    }

});



    document.addEventListener('DOMContentLoaded', function () {


    var pageNumber = 2; // Assuming the next page is 2 initially
    var brand = ''; // Initialize brand variable

    // Extract brand information from the current URL
    var currentUrl = window.location.href;
    var brandMatch = currentUrl.match(/\/en\/brand\/([^\/]+)/);
    if (brandMatch && brandMatch[1]) {
        brand = brandMatch[1];
    }

    var isLoading = false;
    var totalPageCount = {$totalPages};

    var loadingSpinner = document.getElementById('loadingSpinner');
    var nomoreproductsDiv = document.getElementById('nomoreproducts');
    nomoreproductsDiv.style.display = 'none'

    var infiniteScroll = new InfiniteScroll('#productList', {
        path: function () {
            return '/en/brand/' + brand + '?page=' + pageNumber;
        },
        append: '.product-miniature',
        status: '.page-load-status',
        hideNav: '.pagination',
        loadOnScroll: false,
    });

    infiniteScroll.on('request', function (path, settings) {
      // console.log('Requesting page:', path);
      
        if (pageNumber > totalPageCount) {
            // Stop loading more pages if current page exceeds the total number of pages
            infiniteScroll.destroy();
            nomoreproductsDiv.style.display = 'flex'
            nomoreproductsDiv.style.justifyContent = 'center'

            document.getElementById('loadMoreBtn').remove()
            return;
        }
        isLoading = true;
        loadingSpinner.style.display = 'block';
});

infiniteScroll.on('load', function (response, path, items) {
    // console.log('Page loaded:', path);
    isLoading = false;
    loadingSpinner.style.display = 'none';
    pageNumber++;
});

infiniteScroll.on('append', function (response, path, items) {
    // console.log('Append content:', items);
    // Handle the response, update pageNumber, or perform any other logic

    if (!response || pageNumber >= totalPageCount) {
            infiniteScroll.options.loadOnScroll = false;
        }
});


    document.getElementById('loadMoreBtn').addEventListener('click', function () {
        // Manually trigger Infinite Scroll when the button is clicked
        // console.log('Requesting page:', '/en/brand/' + brand + '/ajaxLoadMoreProducts?page=' + pageNumber);
        
        infiniteScroll.loadNextPage();
    });
});

</script>

<style>
  #loadMoreBtn {
    border:2px solid #dd1312;
    background: #fff;
    color: #dd1312;
    font-weight: 600;
  }
  #loadMoreBtn:hover{
    background: #dd1312 !important;
    border:2px solid #dd1312;
    color: #fff;
  }
</style>
