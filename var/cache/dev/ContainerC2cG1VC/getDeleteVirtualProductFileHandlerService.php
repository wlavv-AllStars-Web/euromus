<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler\DeleteVirtualProductFileHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\CommandHandler\\DeleteVirtualProductFileHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler\DeleteVirtualProductFileHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\Update\\VirtualProductUpdater'] ?? $this->load('getVirtualProductUpdaterService.php')));
