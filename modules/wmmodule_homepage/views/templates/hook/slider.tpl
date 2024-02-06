
<script>
    function mostrarElemento(elm) {
      console.log(elm)
        var idDoElemento = elm.id;
        var elementoSapo = document.getElementById('pre_'+idDoElemento);
        if (elm.style.display == "none") {
            elm.style.display = "block";
            elementoSapo.style.display = "none";
            var partes = idDoElemento.split("vd_");
            var parteDesejada = 'y_'+partes[1]+'y';
            console.log(parteDesejada);
                $("#"+parteDesejada)[0].src += "&autoplay=1";
          } else {
            elm.style.display = "none";
            elementoSapo.style.display = "block";
        }
    } 
</script>
{if $angarslider.slides}
	<div id="homepage-slider">
		<ul id="angarslider">
		  {foreach from=$angarslider.slides item=slide name='angarslider'}
      {if $slide.icon_type == 1}
			<li class="angarslider-container">
			  <a href="{$slide.url|escape:'html':'UTF-8'}" title="{$slide.description}">
				  <img src="{$slide.image_url}" alt="{$slide.description}" width="100%" height="100%">
				  {if $slide.description == 0}
					  <div class="angarslider-description"><div class="slider_desc">{$slide.image_url nofilter} {*HTML CONTENT*}</div></div>
				  {/if}
			  </a>
			</li>
      {/if}
		  {/foreach}
		</ul>
	</div>
{/if}

<div id="angarbanners_top" class="angarbanners" style="margin: 0px auto 0;">
	<ul class="clearfix row">
		  {foreach from=$angarslider.slides item=slide name='angarslider'}
      {if $slide.icon_type == 3}
        <li class="angarbanners-item-1  col-xs-4">
          <div class="img-hover-zoom">
          <img src="{$slide.image_url}" class="item-img " title="{$slide.description}" alt="{$slide.description}" width="100%" height="100%">	
          </div>
        </li>
      {/if}
		  {/foreach}
      {foreach from=$angarslider.slides item=slide name='angarslider'}
      {if $slide.icon_type == 4}
        <li class="angarbanners-item-1 col-xs-4">
          <div class="img-hover-zoom" id="pre_vd_{$slide.id}">
          <img src="{$slide.image_url}" class="item-img " title="{$slide.description}" alt="{$slide.description}" width="100%" height="100%">	
          <div class="item_descc">
					<div class="item_desc_position">
					    <div class="item-html">
								<div class="play" align="center" onclick="mostrarElemento(vd_{$slide.id})"> <i class="fa fa-youtube-play"></i><p class="bg-play"></p></div>
 							</div>
					</div>
				</div>
        </div>
        <div style="display:none" id="vd_{$slide.id}">
        </div>
        </li>
      {/if}
		  {/foreach}
</ul>
<div>
<script>
  function loadVideos() {

      {foreach from=$angarslider.slides item=slide name='angarslider'}
      {if $slide.icon_type == 4}

    var video{$slide.id} = document.getElementById('vd_{$slide.id}');

    // Substitua o conteúdo da div oculta pelos códigos de incorporação dos vídeos
    video{$slide.id}.innerHTML = `
        <iframe id="y_{$slide.id}y" style="border: 1px solid #999;" width="100%" height="400" src="https://www.youtube.com/embed/{$slide.youtube}?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>		
      <!-- Adicione os códigos de incorporação dos outros vídeos aqui, se houver -->
    `;


          {/if}
		  {/foreach}
  }

  // Adicione um ouvinte de evento para chamar a função após 2 segundos do carregamento da página
  window.onload = function() {
    setTimeout(loadVideos, 4000); // 2000 milissegundos = 2 segundos
  };
</script>
