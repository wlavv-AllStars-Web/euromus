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

    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        $this->context->smarty->assign([
            'HOOK_HOME' => Hook::exec('displayHome'),
        ]);
        $this->setTemplate('index');
    }

    public static function getCarsOfBrand($idBrand,$idModel,$idLang){
        
        
        $array_cars = [];
        $sql = "Select *
                FROM eu_ukoocompat_compat_asm 
                WHERE id_filter_value_1 = " . $idBrand . ' AND id_filter_value_2 = '. $idModel .'
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
        
        return $array_cars;
        
    }
}
