<?php
/* Smarty version 4.3.4, created on 2024-06-21 10:25:49
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\customer\my-cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6675471dbf20d5_33128674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd387d2e8305fd6a47360732465b20da2f6b95b67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\customer\\my-cars.tpl',
      1 => 1718960260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6675471dbf20d5_33128674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7617317466675471dbd44f5_96891621', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_content'} */
class Block_7617317466675471dbd44f5_96891621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7617317466675471dbd44f5_96891621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['unsubscribeMessage']->value))) {?>
        <div style="text-align:center;margin: 10px auto;">
            <div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Removeu o email da lista de newsletter com sucesso!"),$_smarty_tpl ) );?>
</div>
        </div>
    <?php }?>
    
    <?php if ((isset($_smarty_tpl->tpl_vars['emails']->value))) {?>
    
        <?php if (strlen($_smarty_tpl->tpl_vars['car']->value) < 10) {?>
    
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No emails for selected car'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            
            <div class="spacer-20"></div>
            <p class="alert alert-warning"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"We don't have clientes interested in this car setup yet."),$_smarty_tpl ) );?>
 </p>
    
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Emails for: '),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            
            <?php $_smarty_tpl->_assignInScope('check_path', ((string)$_smarty_tpl->tpl_vars['_SERVER']->value['DOCUMENT_ROOT'])."/img/homepage/models/".((string)$_smarty_tpl->tpl_vars['id_brand']->value)."_".((string)$_smarty_tpl->tpl_vars['id_type']->value).".png");?>
            
            <div style="float: left; width: 300px;">
                <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['check_path']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if (file_exists($_prefixVariable1)) {?>
                    <img class="img-responsive" src="/img/homepage/models/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_brand']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_type']->value, ENT_QUOTES, 'UTF-8');?>
.png" style="margin: 10px auto 0 auto;width: 300px; cursor: pointer;">
                <?php } else { ?>
                    <img class="img-responsive" src="/img/homepage/models/unknown.png" style="margin: 0 auto;width: 300px; cursor: pointer;">
                <?php }?>
            </div>
            
            <div style="float: left; width: calc( 100% - 400px );">
                <div><h4><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Emails of clientes for:'),$_smarty_tpl ) );?>
 </b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value, ENT_QUOTES, 'UTF-8');?>
</h4></div>
                <div class="spacer-20"></div>
                <div><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['emails']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                
            </div>
        <?php }?>
    <?php } else { ?>
    
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cars'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        
        <h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cars'),$_smarty_tpl ) );?>
</h1>
        
        <?php if (count($_smarty_tpl->tpl_vars['myCars']->value) < 1) {?>
            <div style="text-align: center;">
                <p class="alert alert-warning"> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You dont have any car set at the moment.'),$_smarty_tpl ) );?>
 
                    <br><br> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To add your car, please use the vehicle selector in "Your car" and click in "Click to add to My cars"'),$_smarty_tpl ) );?>
 
                    <br><br><br>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By doing so, you are allowing us to use your email to send newsletters of our produts'),$_smarty_tpl ) );?>

                </p>
            </div>
        <?php } else { ?>
            <div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myCars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
                <div class="car_container ">
                    <div onclick="setCarAndSearch(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_brand'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_model'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_type'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_version'], ENT_QUOTES, 'UTF-8');?>
)">
                        <?php $_smarty_tpl->_assignInScope('check_path', ((string)$_smarty_tpl->tpl_vars['_SERVER']->value['DOCUMENT_ROOT'])."/img/homepage/models/".((string)$_smarty_tpl->tpl_vars['car']->value['id_brand'])."_".((string)$_smarty_tpl->tpl_vars['car']->value['id_type']).".png");?>

                        <?php if (!file_exists($_smarty_tpl->tpl_vars['check_path']->value)) {?>
                            <img class="img-responsive" src="/img/homepage/models/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_brand'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_type'], ENT_QUOTES, 'UTF-8');?>
.png" style="margin: 10px auto 0 auto;width: 300px; cursor: pointer;">
                        <?php } else { ?>
                            <img class="img-responsive" src="/img/homepage/models/unknown.png" style="margin: 0 auto; cursor: pointer;">
                        <?php }?>
                    </div>
                    <div>
                        <div class="spacer-10"></div>
                        <div onclick="setCarAndSearch(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_brand'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_model'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_type'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id_version'], ENT_QUOTES, 'UTF-8');?>
)" style="cursor: pointer;">
                            <div><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand:'),$_smarty_tpl ) );?>
</b>   <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['brand'], ENT_QUOTES, 'UTF-8');?>
</span>   </div>
                            <div><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Model:'),$_smarty_tpl ) );?>
</b>   <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['model'], ENT_QUOTES, 'UTF-8');?>
</span>   </div>
                            <div><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type:'),$_smarty_tpl ) );?>
</b>    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['type'], ENT_QUOTES, 'UTF-8');?>
</span>    </div>
                            <div style="height: 36px;overflow: hidden;"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Version:'),$_smarty_tpl ) );?>
</b> <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['version'], ENT_QUOTES, 'UTF-8');?>
</span> </div>	                
                        </div>
                        <div class="spacer-20"></div>
                        <div>
                            <a onclick="deleteCar(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['car']->value['id'], ENT_QUOTES, 'UTF-8');?>
)" class="btn btn-danger" rel="nofollow" title="Delete car" href="#">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </div>   
                        <div class="spacer-20"></div>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        
            <div style="display: none;">
                <form id="ukoocompat_my_cars_custom_form" action="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8');?>
/module/ukoocompat/listing" method="POST"> 
                    <input type="hidden" name="id_search" value="1"> 
                    <input type="hidden" name="id_search3" value="1"> 
                    <input type="hidden" name="id_lang" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->language->id,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" id="multiFilter_news" name="news_compats" value="0"> 
                    <input type="hidden" id="multiFilter_order_by" name="order_by_compats" value="position"> 
                    <input type="hidden" id="multiFilter_order_by_orientation" name="order_by_orientation_compats" value="DESC"> 
                    <input type="hidden" id="multiFilter_id_manufacturer" name="id_manufacturer_compats" value=""> 
                    <input type="hidden" id="multiFilter_nr_items" name="nr_items_compats" value="20"> 
                    <input type="hidden" id="multiFilter_n_items" name="n" value="20"> 
                    <input type="hidden" id="multiFilter_page_number" name="p" value="1"> 
                    <input type="hidden" id="multiFilter_id_category" name="id_category" value="0"> 
                    <input type="hidden" id="multiFilter_root_page" name="root_page" value="">
                    <input type="hidden" id="check_form" name="check_form" value="99585">
                    <input type="hidden" id="custom_filter_1" name="filters1" value="87">
                    <input type="hidden" id="custom_filter_2" name="filters2" value="864">
                    <input type="hidden" id="custom_filter_3" name="filters3" value="865">
                    <input type="hidden" id="custom_filter_4" name="filters4" value="866">
                </form>
            </div>
        <?php }?>
    <?php }?>
    
    <div class="spacer-20"></div>
    
        
    
    <style>
        #table_my_cars > thead > td { width: 500px; }
        .car_container{ width: 300px; float: left;margin: 20px;font-size: 18px; line-height: 2; border: 1px solid #dedede;text-align: center;background-color: #ededed; }
    
        @media only screen and (max-width: 768px) {
            
            h1.page-heading{ text-align: center; }
            .car_container{ width: calc( 100% - 40px ); margin: 20px;font-size: 18px; line-height: 2; border: 1px solid #888;text-align: center; background-color: #FFF; }
            ul.footer_links{ margin:0 20px 20px 20px; padding: 0; }
            ul.footer_links li{ list-style-type: none; }
            ul.footer_links li a{ border: 1px solid red; color: red; background-color: #FFF; border-radius: 5px; width: 100%; }
        }
    
    </style>
    
    <?php echo '<script'; ?>
>
        
        function setCarAndSearch(brand, model, type, version){
            
            $("#custom_filter_1").prop('value', brand);
            $("#custom_filter_2").prop('value', model);
            $("#custom_filter_3").prop('value', type);
            $("#custom_filter_4").prop('value', version);
            $('#ukoocompat_my_cars_custom_form').submit();
            
        }
        
        function deleteCar(id){
            
            var del=confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to delete this car?'),$_smarty_tpl ) );?>
");
            if (del==true) window.location.replace('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('mycars',true), ENT_QUOTES, 'UTF-8');?>
?delete=true&id=' + id)
        
        }
        
        $(document).bind('contextmenu', function(e) {
            return false;
        });  
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'page_content'} */
}
