<?php
/* Smarty version 4.3.4, created on 2024-01-15 17:49:17
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\customer\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a5701ddc99e0_19793025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66cc7fdc0768108f8b66ec33673e4da4709b2e4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\customer\\_partials\\customer-form.tpl',
      1 => 1702297383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_65a5701ddc99e0_19793025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191908695765a5701ddc37c0_68110208', 'customer_form');
?>

<?php }
/* {block 'customer_form_errors'} */
class Block_47130880165a5701ddc3d04_90039454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
class Block_141330091665a5701ddc4be4_40708034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block "form_field"} */
class Block_100573616765a5701ddc5fb8_93456639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === "password") {?>
            <div class="field-password-policy">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

            </div>
          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php }?>
        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_70132010565a5701ddc5504_16513935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100573616765a5701ddc5fb8_93456639', "form_field", $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_211824787465a5701ddc8c97_53827643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
class Block_107087694565a5701ddc8846_38943738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211824787465a5701ddc8c97_53827643', "form_buttons", $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
class Block_191908695765a5701ddc37c0_68110208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customer_form' => 
  array (
    0 => 'Block_191908695765a5701ddc37c0_68110208',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_47130880165a5701ddc3d04_90039454',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_141330091665a5701ddc4be4_40708034',
  ),
  'form_fields' => 
  array (
    0 => 'Block_70132010565a5701ddc5504_16513935',
  ),
  'form_field' => 
  array (
    0 => 'Block_100573616765a5701ddc5fb8_93456639',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_107087694565a5701ddc8846_38943738',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_211824787465a5701ddc8c97_53827643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47130880165a5701ddc3d04_90039454', 'customer_form_errors', $this->tplIndex);
?>


<form action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141330091665a5701ddc4be4_40708034', 'customer_form_actionurl', $this->tplIndex);
?>
" id="customer-form" class="js-customer-form" method="post">
  <div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70132010565a5701ddc5504_16513935', "form_fields", $this->tplIndex);
?>

  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107087694565a5701ddc8846_38943738', 'customer_form_footer', $this->tplIndex);
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
