<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.country' shared service.

$this->services['prestashop.core.grid.definition.factory.country'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CountryGridDefinitionFactory(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
