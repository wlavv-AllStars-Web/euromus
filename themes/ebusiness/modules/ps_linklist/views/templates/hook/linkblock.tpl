<div id="linksFooter" class="links p-0">
  <div class="row" style="width: 100%;">
  {* <pre>{var_dump($linkBlocks,1)}</pre> *}
  {foreach $linkBlocks as $linkBlock}
    <div class="wrapper" style="width: 100%;">
      <h3 class="h3 hidden-sm-down">{$linkBlock.title}</h3>
      {assign var=_expand_id value=10|mt_rand:100000}
      <div id="buttonLinksFooter" class="title clearfix hidden-md-up image-box" data-target="#footer_sub_menu_{$_expand_id}" data-toggle="collapse">
        <span class="h3">{$linkBlock.title}</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_{$_expand_id}" class="linksMenu collapse" >
        {foreach $linkBlock.links as $link}
          <li style="width: 45%;">
            <a id="{$link.id}-{$linkBlock.id}" class="{$link.class}" href="{$link.url}" title="{$link.description}" style="text-align:center;"> {$link.title}</a>
          </li>
        {/foreach}
      </ul>
    </div>
  {/foreach}
  </div>
</div>
<script>
// function openFooterSubMenu(value) {
//   const footerSubMenu = document.querySelector('.links .linksMenu')
//   footerSubMenu.classList.toggle('linkslists')
// }
  
</script>

