<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class IndexControllerCore extends FrontController
{
    /** @var string */
    public $php_self = 'index';
    public $id_shop;

    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        $this->id_shop = (int)Context::getContext()->shop->id;
        $homepage_mobile = Db::getInstance()->executes("Select * FROM "._DB_PREFIX_."asm_homepage_online WHERE destination = 'mobile' AND active=1 AND id_shop=".$this->id_shop." ORDER BY id");

        $homepage_desktop = [
            'banners'       => Db::getInstance()->executes("Select * FROM "._DB_PREFIX_."asm_homepage_online WHERE destination = 'desktop' AND icon_type=1 AND active=1 AND id_shop=".$this->id_shop),
            'icones_50'     => Db::getInstance()->executes("Select * FROM "._DB_PREFIX_."asm_homepage_online WHERE destination = 'desktop' AND icon_type=2 AND active=1 AND id_shop=".$this->id_shop),
            'icones_33'     => Db::getInstance()->executes("Select * FROM "._DB_PREFIX_."asm_homepage_online WHERE destination = 'desktop' AND icon_type=3 AND active=1 AND id_shop=".$this->id_shop),
            'icones_videos' => Db::getInstance()->executes("Select * FROM "._DB_PREFIX_."asm_homepage_online WHERE destination = 'desktop' AND icon_type=4 AND active=1 AND id_shop=".$this->id_shop)
        ];

        $this->context->smarty->assign('desktop', $homepage_desktop);
        $this->context->smarty->assign('mobile', $homepage_mobile);

        parent::initContent();
        $this->context->smarty->assign([
            'HOOK_HOME' => Hook::exec('displayHome'),
        ]);
        

        $this->setTemplate('index');
    }

    public static function getBrandAndModel($filter1,$filter2,$filter3,$filter4,$id_lang){
        $array_NameModel = [];
        $brandnamesql = "Select value
                        FROM eu_ukoocompat_criterion_lang
                        WHERE id_ukoocompat_criterion = '" . $filter1 . "'
                        AND id_lang = '". $id_lang ."'
                        LIMIT 1";
        $brandnameResult  = Db::getInstance()->executeS($brandnamesql);

        $Modelnamesql = "Select value
                        FROM eu_ukoocompat_criterion_lang
                        WHERE id_ukoocompat_criterion = '" . $filter2 . "'
                        AND id_lang = '". $id_lang ."'
                        LIMIT 1";
        $ModelnameResult  = Db::getInstance()->executeS($Modelnamesql);

        $Typenamesql = "Select value
                        FROM eu_ukoocompat_criterion_lang
                        WHERE id_ukoocompat_criterion = '" . $filter3 . "'
                        AND id_lang = '". $id_lang ."'
                        LIMIT 1";
        $TypenameResult  = Db::getInstance()->executeS($Typenamesql);

        $Versionnamesql = "Select value
                        FROM eu_ukoocompat_criterion_lang
                        WHERE id_ukoocompat_criterion = '" . $filter4 . "'
                        AND id_lang = '". $id_lang ."'
                        LIMIT 1";
        $VersionnameResult  = Db::getInstance()->executeS($Versionnamesql);

        $array_NameModel[] = [
            'name_brand'   => $brandnameResult,
            'name_model'   => $ModelnameResult,
            'name_type'   => $TypenameResult,
            'name_version'   => $VersionnameResult,
        ];

        return $array_NameModel;
    }

    public static function getCarsOfBrand($idBrand,$idModel,$idLang){
        
        
        $array_cars = [];
        $brandnameIdsql = "Select id_ukoocompat_criterion
                        FROM eu_ukoocompat_criterion_lang
                        WHERE value = '" . $idBrand . "'
                        LIMIT 1";
        $brandnameIdResult  = Db::getInstance()->executeS($brandnameIdsql);
        $brandnameId = !empty($brandnameIdResult) ? $brandnameIdResult[0]['id_ukoocompat_criterion'] : null;

        $modelnameIdsql = "Select id_ukoocompat_criterion
                        FROM eu_ukoocompat_criterion_lang
                        WHERE value = '".$idModel."'
                        LIMIT 1";
        $modelnameIdResult = Db::getInstance()->executeS($modelnameIdsql);
        $modelnameId =  !empty($modelnameIdResult) ? $modelnameIdResult[0]['id_ukoocompat_criterion'] : null;

        if($modelnameId != null && $brandnameId != null) {
            $sql = "Select *
            FROM eu_ukoocompat_compat_asm 
            WHERE id_filter_value_1 = " . $brandnameId . ' AND id_filter_value_2 = '. $modelnameId .'
            ORDER BY position';
    
            $cars = Db::getInstance()->executeS($sql);

            foreach($cars AS $car){
            
                $brand   = Db::getInstance()->getValue('SELECT value FROM eu_ukoocompat_criterion_lang WHERE id_lang='.$idLang.' AND id_ukoocompat_criterion=' . $car['id_filter_value_1']);
                $model   = Db::getInstance()->getValue('SELECT value FROM eu_ukoocompat_criterion_lang WHERE id_lang='.$idLang.' AND id_ukoocompat_criterion=' . $car['id_filter_value_2']);
                $version = Db::getInstance()->getValue('SELECT value FROM eu_ukoocompat_criterion_lang WHERE id_lang='.$idLang.' AND id_ukoocompat_criterion=' . $car['id_filter_value_3']);
                $type    = Db::getInstance()->getValue('SELECT value FROM eu_ukoocompat_criterion_lang WHERE id_lang='.$idLang.' AND id_ukoocompat_criterion=' . $car['id_filter_value_4']);
                
                $array_cars[] = [
                    'id_brand'   => $car['id_filter_value_1'],
                    'id_model'   => $car['id_filter_value_2'],
                    'id_type'    => $car['id_filter_value_3'],
                    'id_version' => $car['id_filter_value_4'],
                    'brand'      => $brand,
                    'model'      => $model,
                    'type'       => $version,
                    'version'    => $type
                ];
                
            }
        }
        
        

        
        
        return $array_cars;
        
    }
}
