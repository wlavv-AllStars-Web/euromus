<?php
/* Smarty version 4.3.4, created on 2024-06-21 12:00:11
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66755d3b0450c0_92171015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87067385f832e38ce05c14f5fcf94a9ca5eb910b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1718895906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_66755d3b0450c0_92171015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>


<form id="login-form" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
  <div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122365413566755d3b03fc38_43128275', 'form_fields');
?>

    <div class="forgot-password">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

      </a>
    </div>
  </div>

  <footer class="form-footer text-xs-center clearfix">
    <input type="hidden" name="submitLogin" value="1">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117040718366755d3b043d06_66923123', 'form_buttons');
?>

  </footer>
</form>
<style>
  #authentication #main {
    width: 100% !important;
    min-height: 57vh;
    display: flex;
  align-items: center;
  }

  #authentication #main #content{
    border: 0 !important;
  }

  #login-form .forgot-password a{
    color: var(--color-text)!important;
  }

  #login-form .forgot-password a:hover{
    color: var(--asm-color)!important;
  }
  
  .register_form .register_form_cell a.button-to-register-form{
    color: #fff !important;
  }
  .register_form .register_form_cell a.button-to-register-form:hover{
    color: #fff !important;
  }

  .register_form .register_form_cell a[data-link-action="display-register-form"]{
    color: var(--color-text);
  }

  .register_form .register_form_cell a[data-link-action="display-register-form"]:hover{
    color: var(--asm-color);
  }
  
  .login_page_content input{
    color: var(--color-text);
  }
</style><?php }
/* {block 'form_field'} */
class Block_54923909866755d3b040bc2_72156319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_122365413566755d3b03fc38_43128275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_122365413566755d3b03fc38_43128275',
  ),
  'form_field' => 
  array (
    0 => 'Block_54923909866755d3b040bc2_72156319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54923909866755d3b040bc2_72156319', 'form_field', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_117040718366755d3b043d06_66923123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_117040718366755d3b043d06_66923123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <button class="btn btn-primary form-control-submit" data-link-action="sign-in" type="submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    <?php
}
}
/* {/block 'form_buttons'} */
}
