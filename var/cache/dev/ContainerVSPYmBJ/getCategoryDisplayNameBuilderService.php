<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Core\Category\NameBuilder\CategoryDisplayNameBuilder' shared service.

return $this->services['PrestaShop\\PrestaShop\\Core\\Category\\NameBuilder\\CategoryDisplayNameBuilder'] = new \PrestaShop\PrestaShop\Core\Category\NameBuilder\CategoryDisplayNameBuilder(($this->services['PrestaShop\\PrestaShop\\Adapter\\Category\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ' > ');
