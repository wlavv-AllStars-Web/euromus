<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:03:21
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\hook\admin-product-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a170d9d2b8b8_71833080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f8b9a8b587311b0fa38177f7a6119792382d97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\hook\\admin-product-extra.tpl',
      1 => 1704974465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./ASM_select_groups.tpl' => 1,
    'file:./ASM_select_groups_js.tpl' => 1,
  ),
),false)) {
function content_65a170d9d2b8b8_71833080 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_assignInScope('context', Context::getContext());?>
 <?php $_smarty_tpl->_assignInScope('idLang', (int)$_smarty_tpl->tpl_vars['context']->value->language->id);
if ((isset($_smarty_tpl->tpl_vars['id_product']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value )) != 0) {?>

    <div class="panel product-tab">
        <h3><i class="icon-check"></i> Criar compatibilidades para grupos ( em massa )</h3>

        <input type="hidden" id="id_lang" name="id_lang" value="<?php echo $_smarty_tpl->tpl_vars['idLang']->value;?>
" />

        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                <div style="width: 20%;float: left;padding: 0 10px;">
                    <?php $_smarty_tpl->_subTemplateRender('file:./ASM_select_groups.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div style="width: 20%;float: left;padding: 0 10px;">
                <div style="width: 100%; height: 25px"></div>
                <button type="button" name="createCompats" class="btn btn-default" onclick="save_compatibilities()">Criar compatibilidades</button>
            </div>
            <div class="col-lg-12" id="show_group_compats_message" style="display: none; margin-top: 10px;">
                <div class="alert alert-warning"> Por favor aguarde enquanto processamos o seu pedido </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:./ASM_select_groups_js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    
    <div class="panel product-tab" style="text-align: center;">
        <h3> Newsletter </h3>
        <span class="btn btn-primary" style="cursor: pointer;width: 75px;" onclick="openNewsletterEmails('newsletter_en')">EN</span>
        <span class="btn btn-primary" style="cursor: pointer;width: 75px;" onclick="openNewsletterEmails('newsletter_es')">ES</span>
        <span class="btn btn-primary" style="cursor: pointer;width: 75px;" onclick="openNewsletterEmails('newsletter_fr')">FR</span>
        <span class="btn btn-success" style="cursor: pointer;width: 150px;" onclick="setToSendNewsletter(<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
)">SET TO SEND</span>
        
        <div class="newsletter_container" id="newsletter_en" style="display: none;"> 
            <div style="margin: 20px;">E-mails EN</div>
            <div id="emails_newsletter_en"> 
                            </div>
            <div style="margin-top: 20px;">
                <button type="button" class="btn btn-success" style="width: 150px;" onclick="copyDivToClipboard('emails_newsletter_en')">COPY</button>    
            </div> 
        </div>
        <div class="newsletter_container" id="newsletter_es" style="display: none;"> 
            <div style="margin: 20px;">E-mails ES</div>
            <div id="emails_newsletter_es">
                            </div>
            <div style="margin-top: 20px;">
                <button type="button" class="btn btn-success" style="width: 150px;" onclick="copyDivToClipboard('emails_newsletter_es')">COPY</button>    
            </div> 
        </div> 
        <div class="newsletter_container" id="newsletter_fr" style="display: none;"> 
            <div style="margin: 20px;">E-mails FR</div>
            <div id="emails_newsletter_fr"> 
                            </div>
            <div style="margin-top: 20px;">
                <button type="button" class="btn btn-success" style="width: 150px;" onclick="copyDivToClipboard('emails_newsletter_fr')">COPY</button>    
            </div> 
        </div>
    </div>
    
    <?php echo '<script'; ?>
>
        function openNewsletterEmails(id){
            
            $('.newsletter_container').css('display', 'none');
            $('#' + id ).css('display', 'block');
        }
        
        function copyDivToClipboard(id) {
            var range = document.createRange();
            range.selectNode(document.getElementById(id));
            window.getSelection().removeAllRanges(); // clear current selection
            window.getSelection().addRange(range); // to select text
            document.execCommand("copy");
            window.getSelection().removeAllRanges();// to deselect
        }
        
    <?php echo '</script'; ?>
>
    
    <style>
        
        .newsletter_container{ margin: 20px 0; font-size: 16px; color: black; }
        
    </style>
        
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compatTab']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
    <div class="panel product-tab">
        <h3><i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search:','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['search']->name,'htmlall','UTF-8' ));?>
</h3>
        
        <span class="btn btn-default" style="cursor: pointer;" onclick="selectAll()">Select all</span>
        <span class="btn btn-default" style="cursor: pointer; margin-left: 10px;" onclick="deleteSelectedCompatibility()">Remove selected</span>

        <table class="table">
            <thead>
                <tr>
                    <th class="even"><span class="title_box"></span></th>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['search']->filters, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                        <th class="even"><span class="title_box"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->name,'htmlall','UTF-8' ));?>
</span></th>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <th class="even"><span class="title_box">&nbsp;</span></th>
                </tr>
            </thead>
            <tbody>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['compatibilities'], 'compat');
$_smarty_tpl->tpl_vars['compat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['compat']->value) {
$_smarty_tpl->tpl_vars['compat']->do_else = false;
?>
                <tr class="id_compat_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['compat']->value['id_ukoocompat_compat'] ));?>
">
                    <input type="hidden" id="compatibility_number">

                    <td>
                        <input type="checkbox" name="delete_compats" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['compat']->value['id_ukoocompat_compat'] ));?>
">
                    </td>
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['search']->filters, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>

                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['compat']->value[('filter_').($_smarty_tpl->tpl_vars['filter']->value->id_ukoocompat_filter)] == '*') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
 <?php echo mb_strtolower((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value->name,'htmlall','UTF-8' )), 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['compat']->value[('filter_').($_smarty_tpl->tpl_vars['filter']->value->id_ukoocompat_filter)],'htmlall','UTF-8' ));?>

                            <?php }?>
                        </td>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                    <td>
                        <div class="btn-group-action">
                            <div class="btn-group pull-right">
								<!--
                                <a href="javascript:void(0);"
                                   onclick="if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete the compatibility:','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['search']->filters, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if ($_smarty_tpl->tpl_vars['compat']->value[('filter_').($_smarty_tpl->tpl_vars['filter']->value->id_ukoocompat_filter)] == '*') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
 <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['filter']->value->name, 'UTF-8');
} else {
echo $_smarty_tpl->tpl_vars['compat']->value[('filter_').($_smarty_tpl->tpl_vars['filter']->value->id_ukoocompat_filter)];
}?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>?')){deleteCompatibility(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['compat']->value['id_ukoocompat_compat'] ));?>
);}else{event.stopPropagation(); event.preventDefault();};" class="edit btn btn-default" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
">
                                    <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                                </a>-->

								<a href="javascript:void(0);"
                                   onclick="if (confirm('Supprimer la compatibilité sélectionnée?')){deleteCompatibility(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['compat']->value['id_ukoocompat_compat'] ));?>
);}else{event.stopPropagation(); event.preventDefault();};" class="edit btn btn-default" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
">
                                    <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

                                </a>

                            </div>
                        </div>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        
        <div style="margin-top: 10px;">
            <span class="btn btn-default" style="cursor: pointer;" onclick="selectAll()">Select all</span>
            <span class="btn btn-default" style="cursor: pointer; margin-left: 10px;" onclick="deleteSelectedCompatibility()">Remove selected</span>
        </div>
    </div>

	<?php break 1;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
    <div class="panel product-tab" style="display: none;">
		<div onclick="$('#container_new_compatibility').toggle()" style="cursor:pointer;">
			<h3><i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new compatibility','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</h3>
		</div>

		<div id="container_new_compatibility" style="display:blobk;">
			<!--<div class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indicate the combination of criteria with which there is compatible.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

			</div>-->
			<input type="hidden" name="id_product" id="id_product" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value ));?>
" />
			<input type="hidden" name="compatToken" id="compatToken" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['compatToken']->value,'htmlall','UTF-8' ));?>
" />
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['filter']->value['id'] != 5) {?>
					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['name'],'html','UTF-8' ));?>

						</label>
						<div class="col-lg-9">
							<select name="id_ukoocompat_criterion[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
]" id="id_ukoocompat_criterion_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
">
								<option value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'---','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</option>
								<option value="*"<?php if ((isset($_smarty_tpl->tpl_vars['selected_criteria']->value[call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ))])) && $_smarty_tpl->tpl_vars['selected_criteria']->value[call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ))]['id_ukoocompat_criterion'] == '*') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['criteria'], 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
										<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] ));?>
"<?php if ((isset($_smarty_tpl->tpl_vars['selected_criteria']->value[call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ))])) && $_smarty_tpl->tpl_vars['selected_criteria']->value[call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ))]['id_ukoocompat_criterion'] == call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] ))) {?> selected="selected"<?php }?>>
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['value'],'html','UTF-8' ));?>

										</option>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>

						</div>
					</div>
				<?php } else { ?>
					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['name'],'html','UTF-8' ));?>

						</label>
						<div class="col-lg-9">
							<select name="id_ukoocompat_criterion[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
]" id="id_ukoocompat_criterion_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ));?>
" style="display: none">
								<option value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'---','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</option>
								<option value="*"<?php if ((isset($_smarty_tpl->tpl_vars['selected_criteria']->value[call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ))])) && $_smarty_tpl->tpl_vars['selected_criteria']->value[call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ))]['id_ukoocompat_criterion'] == '*') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['criteria'], 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
									<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] ));?>
"<?php if ((isset($_smarty_tpl->tpl_vars['selected_criteria']->value[call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ))])) && $_smarty_tpl->tpl_vars['selected_criteria']->value[call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['id'] ))]['id_ukoocompat_criterion'] == call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['id'] ))) {?> selected="selected"<?php }?>>
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['value'],'html','UTF-8' ));?>

									</option>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<div onclick="changeToSelect()" id="filter_text" style="display: block;padding: 5px 0;font-size: 14px;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 5px;">
								<div style="padding-left: 10px" id="inner_filter_text">---</div>
							</div>
						</div>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<div class="panel-footer">
								<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</button>
				<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</button>
			</div>
		</siv>

    </div>

    <?php echo '<script'; ?>
 type="text/javascript">

        function deleteCompatibility(id_compat)
        {
            $.ajax({
                url: './index.php?controller=AdminUkooCompatCompat&action=deleteCompatibility',
                type: 'POST',
                data: {
                    token: $('#compatToken').val(),
                    id_compat: parseInt(id_compat),
                    ajax: true
                },
                success: function(data){
                    if (data.status == 'ok')
                    {
                        showSuccessMessage(data.message);
                        $('.id_compat_' + data.id_compat).fadeOut('slow', function(){ $('.id_compat_' + data.id_compat).remove(); });
                        // $('#module_ukoocompat').fadeOut('slow', function(){ $('.id_compat_' + data.id_compat).remove(); });
                        
                    }
                    else
                        showErrorMessage(data.message);
                }
                });
        }

        function setToSendNewsletter(id_product){
            
            $.ajax({
                url: "./index.php?controller=AdminProducts&action=setToSendNewsletter&token=<?php echo Tools::getAdminTokenLite('AdminProducts');?>
",
                type: 'POST',
                dataType: 'json',
                data: {
                    id_product: id_product
                },
                success: function(data){
                    alert("Product marked to send newsletter!");
                }
            });
        }

        function deleteSelectedCompatibility()
        {
            if (confirm('Apagar as compatibilidades seleccionadas?')){
                
                $("input:checkbox[name=delete_compats]:checked").each(function(){
                    deleteCompatibility($(this).val());
                });

            }

        }

        function selectAll()
        {
            $('input[name="delete_compats"]').prop('checked', true);
        }
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <div class="alert alert-warning">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is a warning','mod'=>'ukoocompat'),$_smarty_tpl ) );?>

        <ul style="display:block;" id="seeMore">
            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must register the product before creating its compatibility.','mod'=>'ukoocompat'),$_smarty_tpl ) );?>
</li>
        </ul>
    </div>
<?php }
}
}
