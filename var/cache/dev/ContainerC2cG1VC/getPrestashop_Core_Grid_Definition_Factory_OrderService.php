<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.order' shared service.

$a = ($this->services['prestashop.core.form.choice_provider.order_state_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_OrderStateByIdService.php'));

$this->services['prestashop.core.grid.definition.factory.order'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\OrderGridDefinitionFactory(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.form.choice_provider.order_countries'] ?? ($this->services['prestashop.adapter.form.choice_provider.order_countries'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\OrderCountriesChoiceProvider())), $a, ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->date_format_full, ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService()), ($this->services['prestashop.core.grid.action.row.accessibility_checker.print_invoice'] ?? ($this->services['prestashop.core.grid.action.row.accessibility_checker.print_invoice'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\PrintInvoiceAccessibilityChecker())), ($this->services['prestashop.core.grid.action.row.accessibility_checker.print_delivery_slip'] ?? ($this->services['prestashop.core.grid.action.row.accessibility_checker.print_delivery_slip'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\PrintDeliverySlipAccessibilityChecker())), $a);

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
