{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
 {extends file='page.tpl'}
{* {assign var="language_id" value=Context::getContext->language}
<pre>{$language_id|print_r}</pre> *}
{block name='page_content'}

<section class="contact-form" style="width:100%;max-width:1440px;">
    {if isset($confirmation)}
        <div class="confirmation-msg">
            <p class="alert alert-success">{l s='Your message has been successfully sent to our team.'}</p>
        </div>

    {elseif isset($alreadySent)}
        
        <div class="confirmation-msg">
            <p class="alert alert-warning">{l s='Your message has already been sent.'}</p>
        </div>
    {/if}

  <div style="background-color: #fff;">
    <img alt="contact" src="/img/asd/Content_pages/contact/contact_{$language.iso_code}.webp" class="img-responsive" style="margin:0 auto;width:100%">
    {* <div style="max-width: 1200px;padding-top: 23px;font-height: 600; color:#000; font-size:16px;margin: 20px auto 40px auto;padding-inline:1rem">
      {l s='In order to provide optimal customer service in 4 languages that ensures fast and efficient follow-up of our contacts, our communications are exclusively carried out by email. We do not use telephone lines or social networks.' d='Shop.Theme.Global'}
    </div> *}

    <form action="{$request_uri}" method="post" class="contact-form-box" enctype="multipart/form-data" style="max-width:1350px; margin:0 auto; background-color:#fff; box-shadow: none;">
        <div class="spacer-20"></div>
        <input type="hidden" value="2" name="id_contact">
		<fieldset style="background: none;padding:0">
			<div id="step4" class="col-xs-12 col-md-12">
				<div class="name_field col-lg-4">
					<div class="form-group">
                        <label for="extrafield">{l s='Name'}<sup>*</sup></label>
                        {if isset($customerThread.extrafield)}
                        <input class="form-control grey" type="text" id="extrafield" name="extrafield" value="{$customerThread.extrafield|escape:'htmlall':'UTF-8'}" readonly="readonly" maxlength="40" style="max-width: 100%;"/>
                        {else}
                        <input class="is_required form-control grey validate" type="text" id="extrafield" name="extrafield" data-validate="isName" value="" maxlength="40" style="max-width: 100%;"/>
                        {/if}
					</div>
				</div>
				<div class="order_field" style="display: none;">
					<div class="form-group" style="max-width: 100%" >
						<label for="email">{l s='Order reference'}</label>
						<input  style="max-width: 100%;" class="form-control grey" type="text" placeholder="(ex: WNDGVVZLX)" name="id_order" id="id_order" value="{if isset($customerThread.id_order) && $customerThread.id_order|intval > 0}{$customerThread.id_order|intval}{else}{if isset($smarty.post.id_order) && !empty($smarty.post.id_order)}{$smarty.post.id_order|escape:'html':'UTF-8'}{/if}{/if}" />
					</div>
				</div>
				<div class="email_field col-lg-4">
					<p class="form-group"  style="max-width: 100%;">
						<label for="email">{l s='Email address'}<sup>*</sup></label>
						{if isset($customerThread.email)}
							<input class="form-control grey" type="text" id="email" name="from" value="{$customerThread.email|escape:'html':'UTF-8'}" readonly="readonly" style="max-width: 100%;"/>
						{else}
							<input class="form-control grey validate" type="text" id="email" name="from" data-validate="isEmail" value="{$email|escape:'html':'UTF-8'}" maxlength="40" style="max-width: 100%;"/>
						{/if}
					</p>
				</div>
				
				<div style="height: 2px; width: 100%; display: inline-block"></div>
				<div class="form-group" >
					<label for="message">{l s='Message'}<sup>*</sup></label>
					<textarea class="form-control" id="message" name="message" maxlength="500">{if isset($message)}{$message|escape:'html':'UTF-8'|stripslashes}{/if}</textarea>
					<span>{l s='(max 500 chars)'}</span>
				</div>
			</div>
			<div class="submit">
				<button type="submit" name="submitMessage" id="submitMessage" class="btn btn-default btn-md">
					<span> {l s='Send'} <i class="fa fa-chevron-right right"></i> </span>
				</button>
			</div>
		</fieldset>
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

</style>
{/block}