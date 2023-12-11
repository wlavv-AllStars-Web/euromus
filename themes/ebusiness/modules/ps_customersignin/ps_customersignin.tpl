<div id="_desktop_user_info">
  <div class="user-info">
    {if $logged}
        <a class="user-info-account" href="{$my_account_url}" title="{l s='My account' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >
        
        <span>{l s='My account' d='Shop.Theme.Actions'}</span>
      </a>
      <a class="logout" href="{$logout_url}" rel="nofollow" >
        <i class="material-icons">power_settings_new</i>
        {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
    {else}
      <a href="{$my_account_url}" title="{l s='Log in to your customer account' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >
      <i class="fa-solid fa-user" style="margin-top: -16px;color:#fff"></i>
      </a>
        <span style="border-right: 1px solid #444; margin-top: 9px;   height: 21px;   display: inline-block;" >
    </span>
    {/if}
  </div>
</div>
