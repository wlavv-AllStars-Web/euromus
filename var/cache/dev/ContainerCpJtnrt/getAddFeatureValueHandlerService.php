<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Feature\CommandHandler\AddFeatureValueHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\CommandHandler\\AddFeatureValueHandler'] = new \PrestaShop\PrestaShop\Adapter\Feature\CommandHandler\AddFeatureValueHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureRepository'] ?? $this->load('getFeatureRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureValueRepository'] ?? $this->load('getFeatureValueRepositoryService.php')));
