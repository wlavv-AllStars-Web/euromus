<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\DefaultCombinationUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $this->load('getCombinationRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository3Service.php')));
