<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:15:33
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\hook\wm-search-block-home-topmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a173b5bbb7b5_71726468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78142806bcb68e8830cfff6101f10b50570b8b2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\hook\\wm-search-block-home-topmenu.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./search-block-alias.tpl' => 1,
  ),
),false)) {
function content_65a173b5bbb7b5_71726468 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"><?php echo '</script'; ?>
>

    <div id="ukoocompat_search_block_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" class="block ukoocompat_search_block" style="clear: both;">
        <div class="block_content" style="background:#282828; display: block ruby;padding: 0;">
        <form id="ukoocompat_search_block_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form_action']->value )), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="ukoocompat_search_block_form<?php if ($_smarty_tpl->tpl_vars['search']->value->dynamic_criteria) {?> dynamic_criteria<?php }?>" style="margin-top: 10px;width: 100%;">
            <input type="hidden" name="id_search" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="id_search3" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="id_lang" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->current_id_lang )), ENT_QUOTES, 'UTF-8');?>
" />

            <input type="hidden" id="multiFilter_news" name="news_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['news_compats']->value)) ? $_smarty_tpl->tpl_vars['news_compats']->value : 0, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_order_by" name="order_by_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['order_by_compats']->value)) ? $_smarty_tpl->tpl_vars['order_by_compats']->value : 'position', ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_order_by_orientation" name="order_by_orientation_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['order_by_orientation_compats']->value)) ? $_smarty_tpl->tpl_vars['order_by_orientation_compats']->value : 'asc', ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_id_manufacturer" name="id_manufacturer_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['id_manufacturer_compats']->value)) ? $_smarty_tpl->tpl_vars['id_manufacturer_compats']->value : '', ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_nr_items" name="nr_items_compats" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['nr_items_compats']->value)) ? $_smarty_tpl->tpl_vars['nr_items_compats']->value : 20, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_n_items" name="n" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['nr_items_compats']->value)) ? $_smarty_tpl->tpl_vars['nr_items_compats']->value : 20, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_page_number" name="p" value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['p']->value)) ? $_smarty_tpl->tpl_vars['p']->value : 1, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" id="multiFilter_id_category" name="id_category" value="<?php if (((isset($_smarty_tpl->tpl_vars['id_category']->value)))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_category']->value, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>"/>
            <input type="hidden" id="multiFilter_root_page" name="root_page" value=""/>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search']->value->filters, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
            	    
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value->id == 1) {?>

                	    <?php if (count($_smarty_tpl->tpl_vars['filter']->value->criteria) < 2) {?>
                	        <div style="color: #FFF;background-color: #282828;text-transform: uppercase;font-size: 18px;padding: 7px 15px; margin-bottom: 10px;border:1px solid red; display: inline-block;cursor: pointer;" onclick="$('#ukoocompat_clear_my_cars_custom_form').submit();">Clear Filter</div>
                	    <?php }?>

            			<div class="ukoocompat_search_block_filter filter_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');?>
" style="float:left; width:100%;">
            				<div class="ukoocompat_search_block_filter_filter <?php if (count($_smarty_tpl->tpl_vars['filter']->value->criteria) > 1) {?>brand-logos<?php }?>" style="margin: 0 auto;display: table;">
                                <?php if (!(isset($_smarty_tpl->tpl_vars['filter']->value->disabled)) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->disabled )) != 1) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value->criteria, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['criterion']->value['id_ukoocompat_filter'] == 1) {?>
                                            <div style="width: 117px; float: left;text-align: center;height: 160px;" class="car_item_image slide" onmouseover="mouseHoverMyCars($(this), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
)" onmouseleave="mouseLeaveMyCars($(this), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
)">
                                                <?php if ($_smarty_tpl->tpl_vars['criterion']->value['id'] == '') {?>
                                                <img src="/img/homepage/brands/undefined.png" style="width: 105px;margin: 0 auto;" onclick="hideMyCars($(this), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
)" class="selected_item">
                                                <?php } else { ?>
                                                <img src="/img/homepage/brands/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
.png" style="width: 105px;margin: 0 auto;" onclick="hideMyCars($(this), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
)" class="selected_item">
                                                <?php }?>
                                                <div style="text-transform: uppercase;font-weight: bolder;font-size: 12px;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['value'], ENT_QUOTES, 'UTF-8');?>
</div>
                                            </div>
                                        <?php } else { ?>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </div>
            			</div>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
    			<div class="selector_car_container" style="display: none;"></div>  

            <div class="ukoocompat_search_block_button" style="float:left; width:200px; padding-top:5px;display: none;">
                <button id="ukoocompat_search_block_submit_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" type="submit" name="ukoocompat_search_submit" class="button btn btn-default button-medium" style="line-height: 13px; width:100%; padding:6px 10px;">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</span>
                </button>
            </div>
            <input type="hidden" id="ukoocompat_page_name" name="page_name" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
            
            <?php if (!$_smarty_tpl->tpl_vars['is_rewrite_active']->value) {?>
                <input type="hidden" name="fc" value="module"/>
                <input type="hidden" name="module" value="ukoocompat"/>
                <input type="hidden" name="controller" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->controller,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>
            
        </form>
        </div>
    </div>
    
    <?php if ((isset($_smarty_tpl->tpl_vars['search']->value->display_alias_search_block)) && $_smarty_tpl->tpl_vars['search']->value->display_alias_search_block) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./search-block-alias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

<style>
    
    #ukoocompat_select_1{ display: none; }
    #ukoocompat_select_2{ display: none; }
    #ukoocompat_select_3{ display: none; }
    #ukoocompat_select_4{ display: none; }

    .brand-logos{ margin: 0 auto; display: flex; overflow: hidden; }
    
    .ukoocompat_search_block_filter{ float: left; width: 100%; overflow-x: hidden; display: flex; }
    
    .slick-slider{ display: flex; }
    .slick-list { float: left; overflow: hidden; }
    .slick-prev.slick-arrow { float: left;  width: 50px; background: none; border: none; color: red; font-weight: bolder; font-size: 50px; padding: 50px 0; }
    .slick-next.slick-arrow { float: right; width: 50px; background: none; border: none; color: red; font-weight: bolder; font-size: 50px; padding: 50px 0; }
    
    .slick-prev:before { content: "<"; font-size: 50px; }
    .slick-next:before { content: ">"; font-size: 50px; }
    .slick-prev.slick-arrow:hover { background: red; color: #FFF; }
    .slick-next.slick-arrow:hover { background: red; color: #FFF; }
    
    
        .myCarsBrand .carBrandMenu{
            display:none !important;
        }
    
</style>


<?php echo '<script'; ?>
>

$(document).ready(function(){

    $('.brand-logos').slick({
        slidesToShow: 16,
        slidesToScroll: 4,
        autoplay: false,
        speed: 500,
        infinite: true,
        arrows: true,
        dots: false,
        // variableWidth: true,
        pauseOnHover: false,
        // variableWidth: true,
        swipeToSlide: true,
        prevArrow: '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"></button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Previous" role="button" style="display: block;"></button>',
        
        responsive: [
            {
              breakpoint: 1500,
              settings: {
                slidesToShow: 10,
                slidesToScroll: 4,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 6,
                slidesToScroll: 3,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 750,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
        ]
    });
    
    let width = $(window).width() - 150;
    $('.slick-list').css("width",width);
    
    window.addEventListener('resize', resized_browser)
    
    function resized_browser(){
        
        let width = $(window).width() - 150;
        $('.slick-list').css("width",width);
    }
});

<?php echo '</script'; ?>
><?php }
}
