{*
* 2007-2022 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
* 
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}

<div class="footer-container">
  <div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;"><div class="footer_title visible-xs" onclick="$('#block_1').toggle('slow')">Segue nos</div><ul class="footer_link_list footer_block" id="block_1"><li> <a class="social-icon" style="margin-right: 5px;" href="https://www.facebook.com/allstarsdistribution" target="_NEW"><i class="footer_link_list_a fa fa-facebook-square"></i> Facebook</a></li><li> <a class="social-icon" style="margin-right: 5px;" href="https://instagram.com/allstarsdistribution" target="_NEW"><i class="footer_link_list_a fa fa-instagram"></i> Instagram</a></li><li> <a class="footer_link_dealers" href="/pt/content/18-privacy-policy"><img class="left_icon_footer" src="/img/dealers/footer/ASD_footer_ima.png" alt="Star"> Política de privacidade</a></li></ul></div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;"><div class="footer_title visible-xs" onclick="$('#block_2').toggle('slow')">Informações</div><ul class="footer_link_list footer_block" id="block_2"><li><a class="footer_link_dealers" href="/pt/content/4-about"><img class="left_icon_footer" src="/img/dealers/footer/ASD_footer_ima.png" alt="Star">Sobre nós</a></li><li><a class="footer_link_dealers" href="/pt/content/11-partners"><img class="left_icon_footer" src="/img/dealers/footer/ASD_footer_ima.png" alt="Star">Parceiros</a></li><li><a class="footer_link_dealers" href="/pt/content/17-legal-notice"><img class="left_icon_footer" src="/img/dealers/footer/ASD_footer_ima.png" alt="Star">Menções legais</a></li></ul></div>  
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;"><div class="footer_title visible-xs" onclick="$('#block_3').toggle('slow')">Links</div><ul class="footer_link_list footer_block" id="block_3"><li> <a class="footer_link_dealers" href="/pt/content/19-payment"><img class="left_icon_footer" src="/img/dealers/footer/ASD_footer_ima.png" alt="Star">Métodos de pagamento</a></li><li> <a class="footer_link_dealers" href="/pt/content/10-career"><img class="left_icon_footer" src="/img/dealers/footer/ASD_footer_ima.png" alt="Star">Carreira</a></li><li> <a class="footer_link_dealers" href="/pt/content/20-terms-and-conditions"><img class="left_icon_footer" src="/img/dealers/footer/ASD_footer_ima.png" alt="Star">Termos e condições</a></li></ul></div>
    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12 event_div" style="margin-top: 10px;"><div class="footer_title visible-xs" onclick="$('#block_4').toggle('slow')">Evento</div><ul class="footer_link_list footer_block" id="block_4"><li> <a target="_blank" href="https://www.semashow.com/"><img src="/img/media_images/Events/main_250x100.webp?updated=1825598568" title="SEMASHOW 2023" id="footer_event_image" style="max-width: 200px;max-height: 80px;" class="img-responsive"></a></li></ul></div>
    {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
    </div>
    <div class="row">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          {block name='copyright_link'}
            <a href="https://www.prestashop-project.org/" target="_blank" rel="noopener noreferrer nofollow">
              {l s='%copyright% %year% - Ecommerce software by %prestashop%' sprintf=['%prestashop%' => 'PrestaShop™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
            </a>
          {/block}
        </p>
      </div>
    </div>
  </div>
</div>
