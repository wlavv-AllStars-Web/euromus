<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.legacy_db' shared service.

@trigger_error('prestashop.adapter.legacy_db service is deprecated and will be removed in 8.0.', E_USER_DEPRECATED);

return $this->services['prestashop.adapter.legacy_db'] = \Db::getInstance();
