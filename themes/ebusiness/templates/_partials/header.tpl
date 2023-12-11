<div class="header_content">
{block name='header_nav'}
  <nav class="header-nav d-none d-lg-block" style="margin-bottom:0;background:linear-gradient(to bottom, #969696,#282828);">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;margin-top: -2px;">
            <div class="left-nav">
             {hook h='displayNav1'}
            </div>
            <div class="right-nav" style="display: flex;gap:1rem;align-items:center;">
                {hook h='displayNav2'}
            </div>
        </div>
    </div>
  </nav>
  
  <nav class="header-nav mobile d-lg-none" style="margin-bottom:0;background: #111111;height: 43px;">
    <div class="container-fluid">
        <div class="nav" style="display: flex;justify-content:space-between;width:100%;align-items:center;padding-top: 5px;">
            <div class="left-nav col-4 d-flex justify-content-start align-items-center">
              <i onclick="dropdownSearch()" class="fa-solid fa-magnifying-glass" style="cursor:pointer;padding-right: 12px;"></i>
              {hook h='displayLanguageSelector'}
            </div>
            <div class="col-4 d-flex justify-content-center">
              <img width="32" height="32" src="/img/eum.png" />
            </div>
            <div class="right-nav  col-4" style="display: flex;align-items:center;justify-content: end;">
                {hook h='displayMyAccountBlock'}
            </div>
        </div>
    </div>
  </nav>

{/block}

{block name='header_top'}
  <div class="header-top" style="background:  #282828;padding:0.5rem 0;margin:0;">
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
