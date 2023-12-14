<div id="_desktop_user_info">
  <div class="user-info" style="display: flex;align-items:center;padding-left: 3rem;gap:2rem;">
    {if $logged}
      <a class="logout" href="{$logout_url}" rel="nofollow" >
      <i class="fa fa-unlock" style="font-size: 20px;color:#fff"></i>
        {* <span style="text-transform: uppercase;color:#fff">{l s='Sign out' d='Shop.Theme.Actions'}</span> *}
      </a>
      <a class="user-info-account"  style="display: flex;justify-content:end;align-items:center;padding-right:4px;gap:5px;" href="{$my_account_url}" title="{l s='My account' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >
        <i class="fa-solid fa-user" style="color:#fff"></i>
        <span style="text-transform: uppercase;color:#fff" >{l s='My account' d='Shop.Theme.Actions'}</span>
      </a>
      
    {else}
      <a href="{$my_account_url}" style="display: flex;justify-content:end;align-items:center;padding-right:4px;gap:5px;" title="{l s='Log in to your customer account' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >
        <i class="fa-solid fa-user" style="color:#fff"></i>
        <span style="text-transform: uppercase;color:#fff">{l s='My account' d='Shop.Theme.Actions'}</span>
      </a>
        
        {* <span style="border-right: 1px solid #fff; margin-top: 9px;   height: 21px;   display: inline-block;" > *}
    </span>
    {/if}
  </div>
</div>
