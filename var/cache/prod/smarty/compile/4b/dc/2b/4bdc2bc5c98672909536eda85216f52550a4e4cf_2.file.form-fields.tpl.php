<?php
/* Smarty version 4.3.4, created on 2024-01-15 17:49:21
  from 'C:\xampp\htdocs\euromus\themes\classic\templates\_partials\form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a57021b70a60_13577622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bdc2bc5c98672909536eda85216f52550a4e4cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\classic\\templates\\_partials\\form-fields.tpl',
      1 => 1702297383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_65a57021b70a60_13577622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167635233665a57021b4d833_74926101', 'form_field_item_hidden');
?>


<?php } else { ?>

  <div class="form-group row <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?>has-error<?php }?>">
    <label class="col-md-3 form-control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>" for="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
    </label>
    <div class="col-md-6 js-input-column<?php if (($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons')) {?> form-control-valign<?php }?>">

      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95843070265a57021b51656_65304721', 'form_field_item_select');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38085229465a57021b54c62_68324762', 'form_field_item_country');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166304029565a57021b57eb2_66177384', 'form_field_item_radio');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47037411565a57021b5b389_49656193', 'form_field_item_checkbox');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29264402365a57021b5d197_73094203', 'form_field_item_date');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61089539665a57021b60549_82761129', 'form_field_item_birthday');
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105848776665a57021b63ad3_95342883', 'form_field_item_password');
?>


      <?php } else { ?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61933887565a57021b691e3_40902358', 'form_field_item_other');
?>


      <?php }?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127002223165a57021b6e2f4_07029316', 'form_field_errors');
?>


    </div>

    <div class="col-md-3 form-control-comment">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176462843165a57021b6ee28_06645402', 'form_field_comment');
?>

    </div>
  </div>

<?php }
}
/* {block 'form_field_item_hidden'} */
class Block_167635233665a57021b4d833_74926101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_hidden' => 
  array (
    0 => 'Block_167635233665a57021b4d833_74926101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['field']->value['value'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
  <?php
}
}
/* {/block 'form_field_item_hidden'} */
/* {block 'form_field_item_select'} */
class Block_95843070265a57021b51656_65304721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_select' => 
  array (
    0 => 'Block_95843070265a57021b51656_65304721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <select id="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control form-control-select" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
            <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
              <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php
}
}
/* {/block 'form_field_item_select'} */
/* {block 'form_field_item_country'} */
class Block_38085229465a57021b54c62_68324762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_country' => 
  array (
    0 => 'Block_38085229465a57021b54c62_68324762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <select
            id="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            class="form-control form-control-select js-country"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
            <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
              <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php
}
}
/* {/block 'form_field_item_country'} */
/* {block 'form_field_item_radio'} */
class Block_166304029565a57021b57eb2_66177384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_radio' => 
  array (
    0 => 'Block_166304029565a57021b57eb2_66177384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
            <label class="radio-inline" for="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">
              <span class="custom-radio">
                <input
                  name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                  id="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                  type="radio"
                  value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
                >
                <span></span>
              </span>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'form_field_item_radio'} */
/* {block 'form_field_item_checkbox'} */
class Block_47037411565a57021b5b389_49656193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_checkbox' => 
  array (
    0 => 'Block_47037411565a57021b5b389_49656193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <span class="custom-checkbox">
            <label>
              <input name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
              <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
              <?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>

            </label>
          </span>
        <?php
}
}
/* {/block 'form_field_item_checkbox'} */
/* {block 'form_field_item_date'} */
class Block_29264402365a57021b5d197_73094203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_date' => 
  array (
    0 => 'Block_29264402365a57021b5d197_73094203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <input id="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control" type="date" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['field']->value['value'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?> placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
            <span class="form-control-comment">
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'form_field_item_date'} */
/* {block 'form_field_item_birthday'} */
class Block_61089539665a57021b60549_82761129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_birthday' => 
  array (
    0 => 'Block_61089539665a57021b60549_82761129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\euromus\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>

          <div class="js-parent-focus">
            <?php ob_start();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['field']->value['value'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable64 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable65 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable66 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable67 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable68 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable69 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )), ENT_QUOTES, 'UTF-8');
$_prefixVariable70 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable64,'field_array'=>$_prefixVariable65,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_prefixVariable66,'month_empty'=>$_prefixVariable67,'year_empty'=>$_prefixVariable68,'start_year'=>$_prefixVariable69-100,'end_year'=>$_prefixVariable70),$_smarty_tpl);?>

          </div>
        <?php
}
}
/* {/block 'form_field_item_birthday'} */
/* {block 'form_field_item_password'} */
class Block_105848776665a57021b63ad3_95342883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_password' => 
  array (
    0 => 'Block_105848776665a57021b63ad3_95342883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="input-group js-parent-focus">
            <input
              id="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              class="form-control js-child-focus js-visible-password"
              name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password input','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
              type="password"
              <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_length']))) {?>data-minlength="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_length'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['maximum_length']))) {?>data-maxlength="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['password_policy']['maximum_length'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_score']))) {?>data-minscore="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_score'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              value=""
              pattern=".{5,}"
              <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
            >
            <span class="input-group-btn">
              <button
                class="btn"
                type="button"
                data-action="show-password"
                data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
              >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            </span>
          </div>
        <?php
}
}
/* {/block 'form_field_item_password'} */
/* {block 'form_field_item_other'} */
class Block_61933887565a57021b691e3_40902358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_other' => 
  array (
    0 => 'Block_61933887565a57021b691e3_40902358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <input
            id="field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            class="form-control"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['field']->value['value'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
            <span class="form-control-comment">
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'form_field_item_other'} */
/* {block 'form_field_errors'} */
class Block_127002223165a57021b6e2f4_07029316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_errors' => 
  array (
    0 => 'Block_127002223165a57021b6e2f4_07029316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, false);
?>
      <?php
}
}
/* {/block 'form_field_errors'} */
/* {block 'form_field_comment'} */
class Block_176462843165a57021b6ee28_06645402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_comment' => 
  array (
    0 => 'Block_176462843165a57021b6ee28_06645402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        <?php }?>
      <?php
}
}
/* {/block 'form_field_comment'} */
}
