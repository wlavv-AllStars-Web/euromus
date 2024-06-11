{extends file=$layout}
<pre>{$manufacturers|print_r}</pre>

{block name='content'}
	<section id="main" style="display: flex;flex-direction:column;">
<div class="text-center" style="max-width: 1350px;margin:auto;">
	<img src="https://www.allstarsmotorsport.fr/img/cms/Header_pages/catalog.jpg" alt="All Stars Distribution" class="img-fluid cms_header_image" />
</div>

<div class="spacer-20"></div>
<table id="cms_catalog_main_table" style="max-width: 1350px;">
	<tbody>
		<tr class="cms_catalog_table_header">
			<td class="header_label">{l s='Brand'}       </td>
			<td class="header_label">{l s='Import File'} </td>
			<td class="header_label">{l s='Catalogue'}   </td>
			<td class="header_label">{l s='Pictures'}    </td>
			<td class="header_label">{l s='Logos'}       </td>
			<td class="header_label">{l s='Facebook'}    </td>
			<td class="header_label">{l s='Website'}     </td>
			<td class="header_label">{l s='Updates'}     </td>
		</tr>
		
    	{foreach from=$manufacturers item=manufacturer name=manufacturers}
        	<tr class="cms_catalog_tr_separator">

    			<td class="cms_catalog_table_brand_td">
    				<img src="{$base_dir}/img/m/{$manufacturer.id_manufacturer}.jpg" class="cms_catalog_table_brand_td_image" />
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="/img/brands/{$manufacturer.name|replace:' ':''}/{$manufacturer.name|replace:' ':''}.csv" download="{$manufacturer.name|replace:' ':''}.csv">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/csv{if $manufacturer.csv == 1}_updated{elseif $manufacturer.csv == 2}_none{elseif $manufacturer.csv == 3}_commingSoon{/if}.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    			    {if ($manufacturer.id_manufacturer == 11) || ($manufacturer.id_manufacturer == 20) }
        				<a href="/img/brands/{$manufacturer.name|replace:' ':''}/{$manufacturer.name|replace:' ':''}.pdf" download="{$manufacturer.name|replace:' ':''}.pdf">
    			    {else}
        				<a href="/img/brands/{$manufacturer.name|replace:' ':''}/{$manufacturer.name|replace:' ':''}.xlsx" download="{$manufacturer.name|replace:' ':''}.xlsx">
    			    {/if}
    			    	<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/xlsx{if $manufacturer.xlsx == 1}_updated{elseif $manufacturer.xlsx == 2}_none{elseif $manufacturer.xlsx == 3}_commingSoon{/if}.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="/img/brands/{$manufacturer.name|replace:' ':''}/{$manufacturer.name|replace:' ':''}_images.zip" download="{$manufacturer.name|replace:' ':''}_IMAGES.zip">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/zip{if $manufacturer.pictures == 1}_updated{elseif $manufacturer.pictures == 2}_none{elseif $manufacturer.pictures == 3}_commingSoon{/if}.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="/img/brands/{$manufacturer.name|replace:' ':''}/{$manufacturer.name|replace:' ':''}_logos.zip" download="{$manufacturer.name|replace:' ':''}_LOGOS.zip">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/jpg{if $manufacturer.logos == 1}_updated{elseif $manufacturer.logos == 2}_none{/if}.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="{$manufacturer.facebook_url}" target="_blank">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/facebook{if $manufacturer.facebook == 1}_updated{elseif $manufacturer.facebook == 2 }_none{/if}.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_right_line">
    				<a href="{$manufacturer.site_url}" target="_blank">
    					<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/website{if $manufacturer.site ==1}_updated{elseif $manufacturer.site == 2 }_none{/if}.png" />
    				</a>
    			</td>

    			<td class="cms_catalog_table_updated_td">
    				<table class="width_100">
    					<tbody>
    						<tr>
    							<td class="no_padding_text_center">
    								<img class="cms_catalog_image" src="/img/cms/Content_pages/catalog/icons/stopwatch{if $manufacturer.info == 1}_updated{/if}.png" />
    							</td>
    						</tr>
    						<tr>
    							<td class="no_padding_text_center">
    								<div class="cms_catalog{if $manufacturer.info == 1}_updated{/if}_messages width_100">{l s='Updated'} <br>{$manufacturer.info_updated}</div>
    							</td>
    						</tr>
    					</tbody>
    				</table>
    			</td>

    		</tr>
		{/foreach}
	</tbody>
</table>
	</section>
	<style>
    .width_100{ width: 100%; }
    .cms_catalog_table_header{ text-align: center; background-color: #0273EB; color: white; text-transform: uppercase; padding: 10px; font-weight: bold; font-size: 14px;}
    .cms_catalog_tr_separator{ border-top: 1px solid #ddd;}
    .cms_catalog_row{ border: 1px solid #ddd; }
    .cms_catalog_right_line{ border-right: 1px solid #ddd; text-align: center; padding: 0; height: 150px; }
    .cms_catalog_image{ height:80px; margin: 0px 10px 0px 20px; }
    .cms_catalog_updated_image{ height:80px; margin: 0px 10px 0px 20px; }
    .cms_catalog_messages{ font-size: 18px; color: #000; line-height: 1.5; float: left; padding: 0 5px; }
    .cms_catalog_updated_messages{ font-size: 18px; color: #0273eb; line-height: 1.5; float: left; padding: 0 5px; }
    
    #cms_catalog_main_table{ max-width: 1350px; margin: 0 auto 2rem auto; margin-bottom: 40px;border: 1px solid #ddd; width: 100%; }
    .cms_catalog_table_brand_td{ border-right: 1px solid #ddd; width: 150px !important; padding: 0; text-align: center; }
    .cms_catalog_table_downloads_td{ width: 1070px; padding: 0 }
    .cms_catalog_table_brand_td_image{ width: 120px; max-width: 120px !important; margin: 10px; }
    .cms_catalog_table_updated_td{ width: 140px; padding: 0; text-align: center;}
    .no_padding_text_center{ padding: 0; text-align: center; }
    #cms #center_column img.cms_catalog_image{ height:80px; }
    #cms #center_column img.cms_catalog_updated_image{ height:60px; }
    
</style>
{/block}

