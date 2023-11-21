<div class="header_content">
{block name='header_nav'}
  <nav class="header-nav d-none d-lg-block" style="margin-bottom:0;background:linear-gradient(to bottom, #969696,#282828);">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;">
            <div class="left-nav">
             {hook h='displayNav1'}
            </div>
            <div class="right-nav" style="display: flex;gap:1rem;align-items:center;">
            <a href="./content/6-payment">
              <span style="color: white;">PAIMENT EN 3X / 4X PAR CB - EN SAVOIR PLUS</span>
              </a>
                {hook h='displayNav2'}
            </div>
        </div>
    </div>
  </nav>
  
  <nav class="header-nav mobile d-lg-none" style="margin-bottom:0;background: #111111;padding: 0.5rem 0;">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;">
            <div class="left-nav col-4 d-flex justify-content-start align-items-center">
              <i onclick="dropdownSearch()" class="fa-solid fa-magnifying-glass"></i>
              {hook h='displayLanguageSelector'}
            </div>
            <div class="col-4 d-flex justify-content-center">
              <img width="32" height="32" src="/img/eu.png" />
            </div>
            <div class="right-nav  col-4" style="display: flex;gap:1rem;align-items:center;">
                {hook h='displayMyAccountBlock'}
            </div>
        </div>
    </div>
  </nav>
  
  <div id="searchbar" style="display: none;">
      {hook h='displaySearch'}
	</div>
  <div id="languageSelectorMobile">
	</div>
  
{/block}

{block name='header_top'}
  <div class="header-top" style="background:  #282828;padding:2rem 0;margin:0;">
    <div class="container-fluid">
       <div class="row">
        <div class="col-xs-12 col-lg-4 d-flex justify-content-sm-center p-0" id="_desktop_logo">
          <a href="{$urls.base_url}">
            <img class="logo img-responsive" src="{if isset($tc_dev_mode) && $tc_dev_mode && isset($logo_url)&&$logo_url}{$logo_url}{else}{$shop.logo}{/if}" alt="{$shop.name}">
          </a>
        </div>
        <div class="col-md-4  d-none d-lg-flex justify-content-center align-items-center" >
        <img width="90" height="90" src="/img/eu.png" />
        </div>
        <div class="col-md-4 d-none d-lg-flex justify-content-center align-items-center" style="position: relative;z-index:1;">
            {hook h='displaySearch'}
            <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}
</div>
{hook h='displayMLS'}
