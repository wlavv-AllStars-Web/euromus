<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Core\Security\TokenAuthenticator' shared service.

return $this->privates['PrestaShop\\PrestaShop\\Core\\Security\\TokenAuthenticator'] = new \PrestaShop\PrestaShop\Core\Security\TokenAuthenticator(new \PrestaShopBundle\Security\OAuth2\ResourceServer(new \League\OAuth2\Server\ResourceServer(($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \League\OAuth2\Server\CryptKey('-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAm0ckZU3jdWHT1ANt9fnV'."\n".'fMSSvYvS5eFxUYIiG4PU2iy1Bys9wIH2tleKYXObukO3y4KmFDnCoVcRFhDKkcoC'."\n".'OZJgPNEQ2WmHafls8nGpGZM8NynFQ41F6V/TFtIXDKkLJxLg1HqPbjfl6GUmfKiJ'."\n".'IdkGam0+9ZKW8uGF/bJSCtYuyNpBF9G29oxpGxNbUCMAvUHEsoTsfrsw0kBQS2+3'."\n".'1zf3RyaYG3n2pC7hNGo0SiUAYPujUAjJANA7K7fZku43u/eMf+4Kg2YogF3mJGTX'."\n".'Idlji55oJ8KLTymWmRhzpY7sAfMXXurYXz7B4WlWsF1HAiUqK+RUHp2koJc+xWLQ'."\n".'0wIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'')), ($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([])))), ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')));
