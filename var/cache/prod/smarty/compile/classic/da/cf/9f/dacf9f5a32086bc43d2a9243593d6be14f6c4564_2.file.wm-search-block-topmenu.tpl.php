<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:39:04
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\hook\wm-search-block-topmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55fa8f3fa76_12768491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacf9f5a32086bc43d2a9243593d6be14f6c4564' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\hook\\wm-search-block-topmenu.tpl',
      1 => 1704796022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./search-block-alias.tpl' => 1,
  ),
),false)) {
function content_65a55fa8f3fa76_12768491 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<?php if (!(isset($_smarty_tpl->tpl_vars['ajax_reload']->value))) {?>
    <div id="ukoocompat_search_block_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
" class="block ukoocompat_search_block" style="clear: both;">
        <div class="block_content" style="background:#282828;padding: 0;display:flex;">
<?php }?>
    <!--  <form id="ukoocompat_search_block_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value->id )), ENT_QUOTES, 'UTF-8');?>
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
-->
                    <div style="display: none;">
                        <form id="ukoocompat_my_cars_custom_form" action="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8');?>
/module/ukoocompat/listing" method="POST"> 
                            <input type="hidden" name="id_search" value="1"> 
                            <input type="hidden" name="id_search3" value="1"> 
                            <input type="hidden" name="id_lang" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->language->id,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <input type="hidden" id="multiFilter_news" name="news_compats" value="0"> 
                            <input type="hidden" id="multiFilter_order_by" name="order_by_compats" value="price"> 
                            <input type="hidden" id="multiFilter_order_by_orientation" name="order_by_orientation_compats" value="DESC"> 
                            <input type="hidden" id="multiFilter_id_manufacturer" name="id_manufacturer_compats" value=""> 
                            <input type="hidden" id="multiFilter_nr_items" name="nr_items_compats" value="20"> 
                            <input type="hidden" id="multiFilter_n_items" name="n" value="20"> 
                            <input type="hidden" id="multiFilter_page_number" name="p" value="1"> 
                            <input type="hidden" id="multiFilter_id_category" name="id_category" value="0"> 
                            <input type="hidden" id="multiFilter_root_page" name="root_page" value="">
                            <input type="hidden" id="check_form" name="check_form" value="99585">
                            <input type="hidden" id="custom_filter_1" name="filters1" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value['brand'], ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" id="custom_filter_2" name="filters2" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value['model'], ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" id="custom_filter_3" name="filters3" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" id="custom_filter_4" name="filters4" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value['version'], ENT_QUOTES, 'UTF-8');?>
">
                        </form>
                    </div>
                    
                    <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>
                        <div style="display: none;">
                            
                            <form id="ukoocompat_clear_my_cars_custom_form" action="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8');?>
/module/ukoocompat/listing" method="POST"> 
                                <input type="hidden" name="id_search" value="1"> 
                                <input type="hidden" name="id_search3" value="1"> 
                                <input type="hidden" name="id_lang" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->language->id,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" id="multiFilter_news" name="news_compats" value="0"> 
                                <input type="hidden" id="multiFilter_order_by" name="order_by_compats" value="price"> 
                                <input type="hidden" id="multiFilter_order_by_orientation" name="order_by_orientation_compats" value="DESC"> 
                                <input type="hidden" id="multiFilter_id_manufacturer" name="id_manufacturer_compats" value=""> 
                                <input type="hidden" id="multiFilter_nr_items" name="nr_items_compats" value="20"> 
                                <input type="hidden" id="multiFilter_n_items" name="n" value="20"> 
                                <input type="hidden" id="multiFilter_page_number" name="p" value="1"> 
                                <input type="hidden" id="multiFilter_id_category" name="id_category" value="0"> 
                                <input type="hidden" id="multiFilter_root_page" name="root_page" value="">
                                <input type="hidden" id="check_form" name="check_form" value="99585">
                                <input type="hidden" id="custom_filter_1" name="filters1" value="0">
                                <input type="hidden" id="custom_filter_2" name="filters2" value="0">
                                <input type="hidden" id="custom_filter_3" name="filters3" value="0">
                                <input type="hidden" id="custom_filter_4" name="filters4" value="0">
                            </form>    
                            
                        </div>
                    <?php }?>

            <div  class="filterLogo" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search']->value->filters, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
            	    
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value->id == 1) {?>

                	    <?php if (count($_smarty_tpl->tpl_vars['filter']->value->criteria) < 2) {?>
                	        <div  class="clearfilterLogo" style="color: #FFF;background-color: #282828;text-transform: uppercase;font-size: 18px;padding: 7px 15px; margin-bottom: 10px;border:1px solid red;cursor: pointer;" onclick="$('#ukoocompat_clear_my_cars_custom_form').submit();">Clear Filter</div>
                	    <?php }?>

            			<div class="ukoocompat_search_block_filter filter_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->id )), ENT_QUOTES, 'UTF-8');?>
" style="float:left; width:100%;">
            				<div class="ukoocompat_search_block_filter_filter <?php if (count($_smarty_tpl->tpl_vars['filter']->value->criteria) > 1) {?>brand-logos<?php }?>" style="margin: 0 auto;display: table; width:100%">
                             <?php if (!(isset($_smarty_tpl->tpl_vars['filter']->value->disabled)) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->disabled )) != 1) {?> 
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value->criteria, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['criterion']->value['id_ukoocompat_filter'] == 1) {?>
                                            <div class="car_item_image slide" touchstart="mouseHoverMyCars($(this), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
)" touchend="mouseLeaveMyCars($(this), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
)">
                                                <?php if ($_smarty_tpl->tpl_vars['criterion']->value['id'] == '') {?>
                                                <img src="/img/homepage/brands/undefined.png" style="width: 105px;margin: 0 auto;" onclick="hideMyCars($(this), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
)" class="selected_item">
                                                
                                                <?php } else { ?>
                                                <img src="/img/homepage/brands/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
.png" style="width: 105px;margin: 0 auto;" onclick="hideMyCars($(this), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
)" class="selected_item">
                                                <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['value'], ENT_QUOTES, 'UTF-8');?>
"  id="brandName_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                                <?php }?>
                                               <!-- <div style="text-transform: uppercase;font-weight: bolder;font-size: 12px;color:#fff;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['value'], ENT_QUOTES, 'UTF-8');?>
</div> -->
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
               </div> 
                
    			<div class="selector_car_container" style="display: none;">
    		    </div>  
    			
    			

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
<?php if (!(isset($_smarty_tpl->tpl_vars['ajax_reload']->value))) {?>
        </div>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['search']->value->display_alias_search_block)) && $_smarty_tpl->tpl_vars['search']->value->display_alias_search_block) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./search-block-alias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}?>

<?php echo '<script'; ?>
>
        var globalBrand;
        var globalModel;
        var globalType;
        var globalVersion;
        var globalImgBrand;
        
        

        function hideMyCars(element,brand){
            brandName= $("#brandName_"+brand).val();
            
            
            $.ajax({
                method:"POST",
                url:"/?action=getMenuHtml",
                data:{
                    action:'getMenuHtml',
                    brand:brand
                    
                }
                
            }).done(function(html){
                
                $('.selected_item').css('border','1px solid #282828');
                $('.car_item_image').css('background-color','transparent');
                $('.ukoocompat_search_block_filter').css('display', 'none')
                $('.block_content').css('display', 'none !important')
                element.css('border','1px solid red').css('border-radius','5px');
                if(screen.width < 960){
                $('.selector_car_container').replaceWith('<div class="selector_car_container"><button class="btn-back" type="button" onclick="$(\'#ukoocompat_clear_my_cars_custom_form\').submit()"><span class="material-symbols-outlined" style="font-size:30px;">arrow_left</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>
</button><div class="informationBrandModel" style="display:flex !important;"><img src="/img/homepage/brands/'+brand+'.png" width="70px" /><div id="breadcrumbModel"><span style="text-transform:uppercase;font-weight:bold;color:red;">'+brandName+'</span> <span class="material-symbols-outlined" style="font-size:30px;">arrow_right</span> MODEL <span class="material-symbols-outlined" style="font-size:30px;">arrow_right</span> TYPE <span class="material-symbols-outlined" style="font-size:30px;">arrow_right</span> VERSION</div></div>' + html + '</div>');
                } else {
                    $(".selector_car_container").replaceWith('<div class="selector_car_container" style="display:flex !important;background:red;">' + html + "</div>");
                }
                $('.myCars').hide('slow');
                $('.selector_car_container').show('slow');
                
                
                
            });
        }
            
        $("#openMyCars").click(function(){
            $('.myCars').show('slow');
            $('.selector_car_container').hide('slow');
            
        });
        
        function mouseHoverMyCars(element,id){
            let img=element.find('img');
        img.attr('src','/img/homepage/brands/_'+id+'.png');
            
        }
        
        function setCarAndSearch(brand,model,type,version){
            $("#custom_filter_1").prop('value',brand);
            $("#custom_filter_2").prop('value',model);
            $("#custom_filter_3").prop('value',type);
            $("#custom_filter_4").prop('value',version);
            $('#ukoocompat_my_cars_custom_form').submit();
            
        }
        
        

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"><?php echo '</script'; ?>
>
<style>
    
    @media screen and (max-width:560px){
       
        .page-content-container{
         overflow:hidden;
         
        }
        .informationBrandModel{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            color:#fff;
            /*margin:1rem;*/
        }
        
        #breadcrumbModel{
            margin: 1rem 0;
            display: flex;
            align-items: center;
            font-size:14px;
            text-align:center;
        }
        #breadcrumbModel span{
            color:red;
        }
        
        #collapseExample{
            padding:10px 0;
        }
        .myCarsBrand{ font-size: 18px; line-height: 2; text-align: center; width: 200px; padding: 5px; float: left; margin-bottom: 40px;color:#fff; }
        .ukoocompat_search_block_filter_filter.brand-logos{
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
        }
        .car_item_image{
         width:fit-content !important;   
         height:fit-content !important;
         
        }
        
        .car_item_image .selected_item{
            width:70px !important;
            
        }
        
        
        .myCarsBrand .carBrandMenu {
            color:#222222;
            width:fit-content;
            margin:auto;
            font-weight:600;
        }
        
        
        
        .modespan {
            color:#ff0000;
        }
        
        .model-cars::-webkit-scrollbar-track {
            background:#5c5c5c !important;
        }
        
        .model-cars::-webkit-scrollbar-thumb {
            background-color: #ff0000 !important; 
            border-radius: 6px !important;
        }
        .model-cars {
            scrollbar-width: thin !important; 
            scrollbar-color: #ff0000 #5c5c5c;
        }
        .model-cars-container{
            display: flex;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            width: 100%;
            flex-direction:column;
        }
        
        .model-cars{
            background:#282828; 
            padding: 0;
            display: flex;
            scroll-snap-type:x mandatory;
            width: 90vw;
            margin-top: 5px; 
            margin-bottom:1rem;
            overflow-x: scroll;
            overflow-y: hidden;
            position:relative;
            
        }
        
        
        
        
        .car_item_holder{
         background:#5c5c5c;
        border: 1px solid #000;
         flex:0 0 auto;
         scroll-snap-align:start;
         width:99%;
         border-radius:5px;
         margin:5px !important;
         box-shadow: 4px 4px 5px #222222;
         
         display:flex;
         flex-direction:column;
         justify-content:space-between;
        }
        
        #container_version_parent{
            margin-inline: 1rem;
            background: #282828;
            border-radius: 5px;
            box-shadow: 2px 4px 4px #444444;
                                    
        }
        
        .btn-back:hover{
            background:#ff0000;
        }
        
        .btn-back{
            background:#282828;
            border:2px solid #ff0000;
            border-radius:5px;
            display:flex;
            align-items:center;
            color: #fff;
            padding:0.25rem 1rem;
            margin: 0.5rem 1rem;
        
        }
        .btn-back span{
            color: #fff;
            font-size:25px;
            
            
        }
        .btn-back span:focus-visible{
            outline:none;
        }
        
        .btn-back:focus-visible{
            outline:none;
        }
        
        .myCarsBrand {
            width:100%;
        }
        
        .type_selector{
           color: #ff0000;
           margin:0.5rem auto;
           background:#f7f7f5;
           padding:0.5rem 1rem;
           border-radius:5px;
        }
        .container_x_x{
            margin-top:2rem;
        }
        
        .block_content{
            background: #282828;
            display: flex !important;
            padding: 1rem 10px !important;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
        .block_content .ukoocompat_search_block_filter_filter {
            display:flex !important;
            justify-content:center;
        }
        
        #indicator {
          position: absolute;
          top: 0px;
          left: 20px;
          height: 100vh;
          display: flex;
          flex-direction: column;
          justify-content: center;
        }
        
        #indicator > div {
          background-color: white;
          width:10px;
          height:10px;
          border-radius: 5px;
          margin: 10px;
          cursor: pointer;
        }
        
        #indicator > div.active {
          transform: scale(1.6);
        }

        
        
    }
    @media screen and (min-width:561px) and (max-width:960px){
        .filterLogo{
            display: flex;
            flex-direction: column;
            width:100%;
            justify-content:center;
        }
        
        .clearfilterLogo {
            width:fit-content;
            margin:auto;
        }
        
        .car_item_image{
         display:flex;
         height:fit-content;
         width:fit-content;
        }
        .block_content{
            margin-bottom:1rem;
        }
        
        .ukoocompat_search_block_filter.filter_1{
            width:100%;
        }
        
        .ukoocompat_search_block_filter_filter.brand-logos {
            display:flex !important;
            flex-wrap:wrap;
            justify-content:center;
        }
        
        .informationBrandModel {
               display:flex;
               flex-direction:column;
               justify-content:center;
        }
        
        .model-cars {
            display:flex;
        }
        
        
        
        /* aqui*/
        
         .page-content-container{
         overflow:hidden;
         
        }
        .informationBrandModel{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            color:#fff;
            /*margin:1rem;*/
        }
        
        #breadcrumbModel{
            margin: 1rem 0;
            display: flex;
            align-items: center;
            font-size:14px;
            text-align:center;
        }
        #breadcrumbModel span{
            color:red;
        }
        
        #collapseExample{
            padding:10px 0;
        }
        .myCarsBrand{ font-size: 18px; line-height: 2; text-align: center; width: 200px; padding: 5px; float: left; margin-bottom: 40px;color:#fff; }
        .ukoocompat_search_block_filter_filter.brand-logos{
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
        }
        .car_item_image{
         width:fit-content !important;   
         height:fit-content !important;
         
        }
        
        .car_item_image .selected_item{
            width:70px !important;
            
        }
        
        
        .myCarsBrand .carBrandMenu {
            color:#222222;
            width:fit-content;
            margin:auto;
            font-weight:600;
        }
        
        
        
        .modespan {
            color:#ff0000;
        }
        
        .model-cars::-webkit-scrollbar-track {
            background:#5c5c5c !important;
        }
        
        .model-cars::-webkit-scrollbar-thumb {
            background-color: #ff0000 !important; 
            border-radius: 6px !important;
        }
        .model-cars {
            scrollbar-width: thin !important; 
            scrollbar-color: #ff0000 #5c5c5c;
        }
        .model-cars-container{
            display: flex;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            width: 100%;
            flex-direction:column;
        }
        
        .model-cars{
            background:#282828; 
            padding: 0;
            display: flex;
            scroll-snap-type:x mandatory;
            width: 90vw;
            margin-top: 5px; 
            margin-bottom:1rem;
            overflow-x: scroll;
            overflow-y: hidden;
            position:relative;
            
        }
        
        
        
        
        .car_item_holder{
         background:#5c5c5c;
        border: 1px solid #000;
         flex:0 0 auto;
         scroll-snap-align:start;
         width:99%;
         border-radius:5px;
         margin:5px !important;
         box-shadow: 4px 4px 5px #222222;
         
         display:flex;
         flex-direction:column;
         justify-content:space-between;
        }
        
        #container_version_parent{
            margin-inline: 1rem;
            background: #282828;
            border-radius: 5px;
            box-shadow: 2px 4px 4px #444444;
                                    
        }
        
        .btn-back:hover{
            background:#ff0000;
        }
        
        .btn-back{
            background:#282828;
            border:2px solid #ff0000;
            border-radius:5px;
            display:flex;
            align-items:center;
            color: #fff;
            padding:0.25rem 1rem;
            margin: 0.5rem 1rem;
        
        }
        .btn-back span{
            color: #fff;
            font-size:25px;
            
            
        }
        .btn-back span:focus-visible{
            outline:none;
        }
        
        .btn-back:focus-visible{
            outline:none;
        }
        
        .myCarsBrand {
            width:100%;
        }
        
        .type_selector{
           color: #ff0000;
           margin:0.5rem auto;
           background:#f7f7f5;
           padding:0.5rem 1rem;
           border-radius:5px;
        }
        .container_x_x{
            margin-top:2rem;
        }
        
        .block_content{
            background: #282828;
            display: flex !important;
            padding: 1rem 10px !important;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
        .block_content .ukoocompat_search_block_filter_filter {
            display:flex !important;
            justify-content:center;
        }
        
        #indicator {
          position: absolute;
          top: 0px;
          left: 20px;
          height: 100vh;
          display: flex;
          flex-direction: column;
          justify-content: center;
        }
        
        #indicator > div {
          background-color: white;
          width:10px;
          height:10px;
          border-radius: 5px;
          margin: 10px;
          cursor: pointer;
        }
        
        #indicator > div.active {
          transform: scale(1.6);
        }
        
    }
</style>
<?php }
}
