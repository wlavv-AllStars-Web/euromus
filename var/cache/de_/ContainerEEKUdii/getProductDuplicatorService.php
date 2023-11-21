<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Update\ProductDuplicator' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductDuplicator'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductDuplicator(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Core\\Util\\String\\StringModifier'] ?? ($this->services['PrestaShop\\PrestaShop\\Core\\Util\\String\\StringModifier'] = new \PrestaShop\PrestaShop\Core\Util\String\StringModifier())), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'eu_', ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $this->load('getCombinationRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductSupplierRepository'] ?? $this->load('getProductSupplierRepository2Service.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\Repository\\SpecificPriceRepository'] ?? $this->load('getSpecificPriceRepository2Service.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockAvailableRepository'] ?? $this->load('getStockAvailableRepositoryService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Update\\ProductStockUpdater'] ?? $this->load('getProductStockUpdaterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\CombinationStockUpdater'] ?? $this->load('getCombinationStockUpdaterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $this->load('getProductImageRepositoryService.php')), ($this->services['prestashop.adapter.product.image.product_image_filesystem_path_factory'] ?? $this->load('getPrestashop_Adapter_Product_Image_ProductImageFilesystemPathFactoryService.php')));
