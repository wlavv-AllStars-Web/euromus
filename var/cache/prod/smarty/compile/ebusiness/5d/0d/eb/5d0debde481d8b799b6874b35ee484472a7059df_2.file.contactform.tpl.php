<?php
/* Smarty version 4.3.4, created on 2024-06-21 13:07:18
  from 'C:\xampp\htdocs\euromus\themes\ebusiness\modules\contactform\views\templates\widget\contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66756cf6bde430_50625171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0debde481d8b799b6874b35ee484472a7059df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\themes\\ebusiness\\modules\\contactform\\views\\templates\\widget\\contactform.tpl',
      1 => 1718971635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66756cf6bde430_50625171 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="contact-form" style="width:100%;max-width:1440px;">
  <div align="center" style="background-color: #d3d3d3;">
    <img alt="contact" src="/img/cms/contact_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg" class="img-responsive" style="margin:0 auto;width:100%">
    <div style="max-width: 1200px;padding-top: 23px;font-height: 600; color:#000; font-size:16px;margin: 20px auto 40px auto;padding-inline:1rem">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to provide optimal customer service in 4 languages that ensures fast and efficient follow-up of our contacts, our communications are exclusively carried out by email. We do not use telephone lines or social networks.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    </div>

    <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>enctype="multipart/form-data"<?php }?> style="max-width: 1440px;">
      <?php if ($_smarty_tpl->tpl_vars['notifications']->value) {?>
        <div class="col-xs-12 alert <?php if ($_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['messages'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['notifications']->value || $_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>
        <section class="form-fields">

          <div class="form-group row">
            <div class="col-md-9 col-md-offset-3">
              <h3></h3>
            </div>
          </div>

          
          <?php if ($_smarty_tpl->tpl_vars['contact']->value['orders']) {?>
            <div class="form-group row col-12 col-lg-4">
              <label class="col-md-12 form-control-label"
                for="id-order"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
              <div class="col-md-12">
                <select id="id-order" name="id_order" class="form-control form-control-select">
                  <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select reference','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['orders'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['id_order'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
              <div class="col-12" style="display: flex;align-items: center;gap: 5px;justify-content:flex-start;padding-top:0.5rem;">
                <input type="checkbox" id="messageCheckBox" name="messageCheckBox" />
                <label for="messageCheckBox" style="margin-bottom: 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My contact does not refer to any order','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
<sup>*</sup></label>
              </div>
              <span class="col-md-3 form-control-comment">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>

              </span>
            </div>
          <?php } else { ?>
            <div class="form-group col-12 col-lg-4">
                <label class="col-md-12 form-control-label" for="reference"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
<sup>*</sup></label>
                <div class="col-md-12">
                  <input id="reference" class="form-control" name="from" type="text" value="<?php echo htmlspecialchars((string) !!$_smarty_tpl->tpl_vars['contact']->value['orders'], ENT_QUOTES, 'UTF-8');?>
"
                    placeholder="(ex: WNDGVVZLX)">
                </div>
                <div class="col-12" style="display: flex;align-items: center;gap: 5px;justify-content:flex-start;padding-top:0.5rem;">
                  <input type="checkbox" id="messageCheckBox" name="messageCheckBox" />
                  <label for="messageCheckBox" style="margin-bottom: 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My contact does not refer to any order','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
<sup>*</sup></label>
                </div>
            </div>
          <?php }?>
          
          

          <div class="form-group  col-12 col-lg-4">
            <label class="col-md-12 form-control-label" for="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
<sup>*</sup></label>
            <div class="col-md-12">
              <input id="name" class="form-control" name="from" type="text" value=""
                placeholder="Name">
            </div>
          </div>

          <?php if ($_smarty_tpl->tpl_vars['contact']->value['email']) {?>
          <div class="form-group   col-12 col-lg-4">
            <label class="col-md-12 form-control-label" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
<sup>*</sup></label>
            <div class="col-md-12">
              <input id="email" class="form-control" name="from" type="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
">
            </div>
          </div>
          <?php } else { ?>
          <div class="form-group   col-12 col-lg-4">
            <label class="col-md-12 form-control-label" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
<sup>*</sup></label>
            <div class="col-md-12">
              <input id="email" class="form-control" name="from" type="email" 
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
">
            </div>
          </div>
          <?php }?>
          

          <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>
            <div class="form-group row col-12 col-lg-4">
              <label class="col-md-12 form-control-label" for="file-upload"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
              <div class="col-md-12">
                <input id="file-upload" type="file" name="fileUpload" class="filestyle"
                  data-buttonText="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
              </div>
              <span class="col-md-3 form-control-comment">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>

              </span>
            </div>
          <?php }?>
            
          

          <div class="form-group row col-12">
            <label class="col-md-12 form-control-label"
              for="contactform-message" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
            <div class="col-md-12">
              <textarea id="contactform-message" class="form-control" name="message"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How can we help?','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
                rows="3"><?php if ($_smarty_tpl->tpl_vars['contact']->value['message']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value['message'], ENT_QUOTES, 'UTF-8');
}?></textarea>
            </div>
            <span class="col-md-12" style="font-size: small;text-align:start;color:#333;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(max 500 chars)'),$_smarty_tpl ) );?>
</span>
          </div>

          <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
            <div class="form-group row">
              <div class="offset-md-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

              </div>
            </div>
          <?php }?>

        </section>

        <footer class="form-footer text-sm-left" style="padding-inline: 15px;display:flex;justify-content:space-between;">
          <style>
            input[name=url] {
              display: none !important;
            }
          </style>
          <input type="text" name="url" value="" />
          <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8');?>
" />
          <div style="width: fit-content; height: fit-content; position: relative; padding-bottom: 1rem;">
              <input class="btn" type="submit" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SEND','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" style="background: white; color: var(--color-red); margin-bottom: 1rem;">
          </div>

          <div class="whatsapp-contancts desktop">
            <div style="display:flex;align-items:center;justify-content:end;">
              <div style="display:flex;align-items:center;justify-content:center;margin-right:1rem;">
                  <img src="https://www.all-stars-motorsport.com/img/whatsapp_search.png" style="width: 50px; height: 50px;padding:3px;margin-left:1rem;" alt="Whatsapp">
              <!--    <h3 style="margin: 0;font-weight:bolder;"><span style="color: #007a12;">Whatsapp</span></h3> -->
              </div>
              
              <div style="padding: 1rem;display:flex;">
                  <a class="social-icon-whatsapp-number" style="margin-right: 8px;display:flex;align-items:center;gap:0.5rem;padding: 0.5rem 8px;" href="https://wa.me/+351912201753" target="_blank">
                      <img src="https://www.all-stars-motorsport.com/img/en_flag_emails.jpg" width="34" height="auto" style="border-radius:5px;" alt="Whatsapp">
                      <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:bold;color: #282828;font-size:1rem;margin-left:1rem;text-decoration: 2px underline #282828;">+351 912 201 753</p>
                  </a>
                  
                  <a class="social-icon-whatsapp-number" style="margin-right: 8px;display:flex;align-items:center;gap:0.5rem;padding: 0.5rem 8px;" href="https://wa.me/+34691161570" target="_blank">
                      <img src="https://www.all-stars-motorsport.com/img/es_flag_emails.jpg" width="34" height="auto" style="border-radius:5px;" alt="Whatsapp">
                      <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:bold;color: #282828;font-size:1rem;margin-left:1rem;text-decoration: 2px underline #282828;">+34 691 16 15 70</p>
                  </a>
                  
                  <a class="social-icon-whatsapp-number" style="margin-right: 8px;display:flex;align-items:center;gap:0.5rem;padding: 0.5rem 8px;" href="https://wa.me/+330651871788" target="_blank">
                      
                      <img src="https://www.all-stars-motorsport.com/img/fr_flag_emails.jpg" width="34" height="auto" style="border-radius:5px;" alt="Whatsapp">
                      <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:bold;color: #282828;font-size:1rem;margin-left:1rem;text-decoration: 2px underline #282828;">+33 0651871788</p>
                  </a>
              </div>
            </div>
          </div>

          <div class=" whatsapp-mobile mobile">
            <div>
              <a class="social-icon-whatsapp-number" style="margin-right: 8px;display:flex;align-items:center;gap:0.5rem;padding: 0.5rem 8px;" href="https://wa.me/+351912201753" target="_blank">
                  <img src="https://www.all-stars-motorsport.com/img/en_flag_emails.jpg" width="34" height="auto" style="border-radius:5px;" alt="Whatsapp">
                  <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:bold;color: #282828;font-size:1rem;margin-left:1rem;text-decoration: 2px underline #282828;">+351 912 201 753</p>
              </a>
              
              <a class="social-icon-whatsapp-number" style="margin-right: 8px;display:flex;align-items:center;gap:0.5rem;padding: 0.5rem 8px;" href="https://wa.me/+34691161570" target="_blank">
                  <img src="https://www.all-stars-motorsport.com/img/es_flag_emails.jpg" width="34" height="auto" style="border-radius:5px;" alt="Whatsapp">
                  <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:bold;color: #282828;font-size:1rem;margin-left:1rem;text-decoration: 2px underline #282828;">+34 691 16 15 70</p>
              </a>
              
              <a class="social-icon-whatsapp-number" style="margin-right: 8px;display:flex;align-items:center;gap:0.5rem;padding: 0.5rem 8px;" href="https://wa.me/+330651871788" target="_blank">
                  
                  <img src="https://www.all-stars-motorsport.com/img/fr_flag_emails.jpg" width="34" height="auto" style="border-radius:5px;" alt="Whatsapp">
                  <p class="number_whatsapp_header" style="width:fit-content;margin:0;font-weight:bold;color: #282828;font-size:1rem;margin-left:1rem;text-decoration: 2px underline #282828;">+33 0651871788</p>
              </a>
            </div>
          </div>

        </footer>
      <?php }?>

    </form>
  </div>
</section>

<style>
  #main {
    width: 100% !important;
    background: #FFFFFF;
  }

  #contact #content {
    margin: 1rem 0;
    background: #FFFFFF;
  }
  #contact .breadcrumb_wrapper{
    padding: 0;
  }
  #contact .breadcrumb_wrapper .breadcrumb{
    margin: 0;
  }
  .contact-form {
    background: none repeat scroll 0 0 #FFFFFF;
    color: #d9d9d9;
    float: left;
    width: 100%;
  }

  .contact-form .form-fields {
    display: flex;
    flex-wrap: wrap;
  }


  .contact-form .form-group > * {
    padding-inline: 0;
  }

  .card {
    border: 0px;
  }

  .contact-form .form-control {
    color: #333333;
    border-radius: 4px;
  }

  .form-control-label{
    font-weight: bold;
    font-size: small;
    color: #333333 !important;
    text-align: start;

  }
  .form-control-label[for="contactform-message"]{
    position: relative;
    
  }
  .form-control-label[for="contactform-message"]::after{
    content: '*';
    color: var(--color-red);
    position: absolute;
  }

  .contact-form .btn[type="submit"]:hover{
    background: var(--color-red) !important;
    color: white !important;
  }

  .contact-form .btn[type="submit"]:hover ~ i{
    color: white !important;
  }

@media screen and (min-width:769px) {
  .contact-form .btn[type="submit"]{
    height: 34px;
  }
}  

/* mobile */
@media screen and (max-width:768px){
  #contact #content {
    margin:0;
    background: #FFFFFF;
  }

  #contact #main {
    padding: 0;
  }

  #contact .container {
    margin-inline: 0;
  }

  #contact .breadcrumb_wrapper{
    display: none;
  }

  .contact-form .btn[type="submit"]{
    width: 200px;
    height: 44px;
  }

  #contact .footer_after {
    display: block;
  }


  #contact #messageCheckBox {
    width: 1.25rem;
    height: 1.25rem;
  }
}

</style><?php }
}
