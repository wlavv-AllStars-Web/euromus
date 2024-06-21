<?php
/* Smarty version 4.3.4, created on 2024-06-07 17:54:46
  from 'C:\xampp\htdocs\euromus\themes\probusiness\templates\catalog\custom-catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66633b564b45a7_95289689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c80f4195506a88b9bdac01fe90ab4fe2979520b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\probusiness\\templates\\catalog\\custom-catalog.tpl',
      1 => 1717748709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66633b564b45a7_95289689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<pre><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'print_r' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturers']->value )), ENT_QUOTES, 'UTF-8');?>
</pre>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139555966666633b56480925_95430751', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_139555966666633b56480925_95430751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_139555966666633b56480925_95430751',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<section id="main" style="display: flex;flex-direction:column;">
<div class="text-center" style="max-width: 1350px;margin:auto;">
	<img src="https://www.allstarsmotorsport.fr/img/cms/Header_pages/catalog.jpg" alt="All Stars Distribution" class="img-fluid cms_header_image" />
</div>

<div class="spacer-20"></div>
<table id="cms_catalog_main_table" style="max-width: 1350px;">
	<tbody>
		<tr class="cms_catalog_table_header">
			<td class="header_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand'),$_smarty_tpl ) );?>
       </td>
			<td class="header_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import File'),$_smarty_tpl ) );?>
 </td>
			<td class="header_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Catalogue'),$_smarty_tpl ) );?>
   </td>
			<td class="header_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pictures'),$_smarty_tpl ) );?>
    </td>
			<td class="header_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logos'),$_smarty_tpl ) );?>
       </td>
			<td class="header_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook'),$_smarty_tpl ) );?>
    </td>
			<td class="header_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Website'),$_smarty_tpl ) );?>
     </td>
			<td class="header_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Updates'),$_smarty_tpl ) );?>
     </td>
		</tr>
		
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer', false, NULL, 'manufacturers', array (
));
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
        	<tr class="cms_catalog_tr_separator">

    			<td class="cms_catalog_table_brand_td">
    				<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/img/m/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8');?>
.jpg" class="cms_catalog_table_brand_td_image" />
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="/img/brands/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
.csv" download="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
.csv">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/csv<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['csv'] == 1) {?>_updated<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['csv'] == 2) {?>_none<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['csv'] == 3) {?>_commingSoon<?php }?>.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    			    <?php if (($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'] == 11) || ($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'] == 20)) {?>
        				<a href="/img/brands/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
.pdf" download="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
.pdf">
    			    <?php } else { ?>
        				<a href="/img/brands/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
.xlsx" download="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
.xlsx">
    			    <?php }?>
    			    	<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/xlsx<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['xlsx'] == 1) {?>_updated<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['xlsx'] == 2) {?>_none<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['xlsx'] == 3) {?>_commingSoon<?php }?>.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="/img/brands/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
_images.zip" download="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
_IMAGES.zip">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/zip<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['pictures'] == 1) {?>_updated<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['pictures'] == 2) {?>_none<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['pictures'] == 3) {?>_commingSoon<?php }?>.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="/img/brands/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
_logos.zip" download="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['manufacturer']->value['name'],' ',''), ENT_QUOTES, 'UTF-8');?>
_LOGOS.zip">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/jpg<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['logos'] == 1) {?>_updated<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['logos'] == 2) {?>_none<?php }?>.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['facebook_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/facebook<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['facebook'] == 1) {?>_updated<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['facebook'] == 2) {?>_none<?php }?>.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['site_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/website<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['site'] == 1) {?>_updated<?php } elseif ($_smarty_tpl->tpl_vars['manufacturer']->value['site'] == 2) {?>_none<?php }?>.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_table_updated_td">
    				<table class="width_100">
    					<tbody>
    						<tr>
    							<td class="no_padding_text_center">
    								<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/stopwatch<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['info'] == 1) {?>_updated<?php }?>.png" />
    							</td>
    						</tr>
    						<tr>
    							<td class="no_padding_text_center">
    								<div class="cms_catalog<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['info'] == 1) {?>_updated<?php }?>_messages width_100"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Updated'),$_smarty_tpl ) );?>
 <br><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['info_updated'], ENT_QUOTES, 'UTF-8');?>
</div>
    							</td>
    						</tr>
    					</tbody>
    				</table>
    			</td>

    		</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
	</section>
	<style>
    .width_100{ width: 100%; }
    .cms_catalog_table_header{ text-align: center; background-color: #0273EB; color: white; text-transform: uppercase; padding: 10px; font-weight: bold; font-size: 14px;}
    .cms_catalog_tr_separator{ border-top: 1px solid #ddd;}
    .cms_catalog_row{ border: 1px solid #ddd; }
    .cms_catalog_right_line{ border-right: 1px solid #ddd; text-align: center; padding: 0; height: 150px; }
    .cms_catalog_image{ height:80px; margin: 0px 10px 0px 20px; }
    .cms_catalog_updated_image{ height:80px; margin: 0px 10px 0px 20px; }
    .cms_catalog_messages{ font-size: 18px; color: #000; line-height: 1.5; float: left; padding: 0 5px; }
    .cms_catalog_updated_messages{ font-size: 18px; color: #0273eb; line-height: 1.5; float: left; padding: 0 5px; }
    
    #cms_catalog_main_table{ max-width: 1350px; margin: 0 auto 2rem auto; margin-bottom: 40px;border: 1px solid #ddd; width: 100%; }
    .cms_catalog_table_brand_td{ border-right: 1px solid #ddd; width: 150px !important; padding: 0; text-align: center; }
    .cms_catalog_table_downloads_td{ width: 1070px; padding: 0 }
    .cms_catalog_table_brand_td_image{ width: 120px; max-width: 120px !important; margin: 10px; }
    .cms_catalog_table_updated_td{ width: 140px; padding: 0; text-align: center;}
    .no_padding_text_center{ padding: 0; text-align: center; }
    #cms #center_column img.cms_catalog_image{ height:80px; }
    #cms #center_column img.cms_catalog_updated_image{ height:60px; }
    
</style>
<?php
}
}
/* {/block 'content'} */
}
