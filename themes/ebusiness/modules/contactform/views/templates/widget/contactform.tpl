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
<style>
    #main{
      background: #000000;
      width:100%!important;
    }
  .contact-form {
  background: none repeat scroll 0 0 #FFFFFF;
  color: #878787;
  float: left;
  width: 100%;
  padding-left: 33px;
  padding-right: 33px;
}
.card {
  border: 0px;
}
</style> 
<section class="contact-form" style="justify-content: center;   justify-items: center;   display: grid;">
<div align="center" style="width:1440px;background-color: #d9d9d9;">
<img alt="contact" src="/img/cms/contact_{$language.iso_code}.jpg" class="img-responsive" style="margin:0 auto;">
<div style="max-width: 1400px;padding-top: 23px;font-height: 600; color:#000; ">
{l s='In order to provide optimal customer service in 4 languages that ensures fast and efficient follow-up of our contacts, our communications are exclusively carried out by email. We do not use telephone lines or social networks.' d='Shop.Theme.Global'}
</div>

  <form action="{$urls.pages.contact}" method="post" {if $contact.allow_file_upload}enctype="multipart/form-data"{/if} style="width: 1378px;">
    {if $notifications}
      <div class="col-xs-12 alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}">
        <ul>
          {foreach $notifications.messages as $notif}
            <li>{$notif}</li>
          {/foreach}
        </ul>
      </div>
    {/if}

    {if !$notifications || $notifications.nw_error}
      <section class="form-fields">

        <div class="form-group row">
          <div class="col-md-9 col-md-offset-3">
            <h3></h3>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 form-control-label" for="id_contact">{l s='Subject' d='Shop.Forms.Labels'}</label>
          <div class="col-md-6">
            <select name="id_contact" id="id_contact" class="form-control form-control-select">
              {foreach from=$contact.contacts item=contact_elt}
                <option value="{$contact_elt.id_contact}">{$contact_elt.name}</option>
              {/foreach}
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 form-control-label" for="email">{l s='Email address' d='Shop.Forms.Labels'}</label>
          <div class="col-md-6">
            <input
              id="email"
              class="form-control"
              name="from"
              type="email"
              value="{$contact.email}"
              placeholder="{l s='your@email.com' d='Shop.Forms.Help'}"
            >
          </div>
        </div>

        {if $contact.orders}
          <div class="form-group row">
            <label class="col-md-3 form-control-label" for="id-order">{l s='Order reference' d='Shop.Forms.Labels'}</label>
            <div class="col-md-6">
              <select id="id-order" name="id_order" class="form-control form-control-select">
                <option value="">{l s='Select reference' d='Shop.Forms.Help'}</option>
                {foreach from=$contact.orders item=order}
                  <option value="{$order.id_order}">{$order.reference}</option>
                {/foreach}
              </select>
            </div>
            <span class="col-md-3 form-control-comment">
              {l s='optional' d='Shop.Forms.Help'}
            </span>
          </div>
        {/if}

        {if $contact.allow_file_upload}
          <div class="form-group row">
            <label class="col-md-3 form-control-label" for="file-upload">{l s='Attachment' d='Shop.Forms.Labels'}</label>
            <div class="col-md-6">
              <input id="file-upload" type="file" name="fileUpload" class="filestyle" data-buttonText="{l s='Choose file' d='Shop.Theme.Actions'}">
            </div>
            <span class="col-md-3 form-control-comment">
              {l s='optional' d='Shop.Forms.Help'}
            </span>
          </div>
        {/if}

        <div class="form-group row">
          <label class="col-md-3 form-control-label" for="contactform-message">{l s='Message' d='Shop.Forms.Labels'}</label>
          <div class="col-md-6">
            <textarea
              id="contactform-message"
              class="form-control"
              name="message"
              placeholder="{l s='How can we help?' d='Shop.Forms.Help'}"
              rows="3"
            >{if $contact.message}{$contact.message}{/if}</textarea>
          </div>
        </div>

        {if isset($id_module)}
          <div class="form-group row">
            <div class="offset-md-3">
              {hook h='displayGDPRConsent' id_module=$id_module}
            </div>
          </div>
        {/if}

      </section>

      <footer class="form-footer text-sm-left">
        <style>
          input[name=url] {
            display: none !important;
          }
        </style>
        <input type="text" name="url" value=""/>
        <input type="hidden" name="token" value="{$token}" />
        <input class="btn btn-primary" type="submit" name="submitMessage" value="{l s='Send' d='Shop.Theme.Actions'}">
      </footer>
    {/if}

  </form>
  </div>
</section>
