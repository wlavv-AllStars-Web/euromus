<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.query.handler.order.get_order_for_payment_denied' shared service.

return $this->services['ps_checkout.query.handler.order.get_order_for_payment_denied'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler(($this->services['ps_checkout.repository.pscheckoutcart'] ?? $this->load('getPsCheckout_Repository_PscheckoutcartService.php')));
