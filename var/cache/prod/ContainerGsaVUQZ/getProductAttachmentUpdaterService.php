<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Update\ProductAttachmentUpdater' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductAttachmentUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductAttachmentUpdater(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository3Service.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Attachment\\AttachmentRepository'] ?? $this->load('getAttachmentRepositoryService.php')));
