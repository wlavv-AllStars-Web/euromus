<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere8e91 = null;
    private $initializer26d2d = null;
    private static $publicProperties9993f = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getList', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getInstalledModules', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getMustBeConfiguredModules', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getUpgradableModules', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'setActionUrls', array('collection' => $collection), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer26d2d = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldere8e91) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldere8e91 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldere8e91->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, '__get', ['name' => $name], $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        if (isset(self::$publicProperties9993f[$name])) {
            return $this->valueHoldere8e91->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8e91;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere8e91;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8e91;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere8e91;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, '__isset', array('name' => $name), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8e91;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere8e91;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, '__unset', array('name' => $name), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8e91;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere8e91;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, '__clone', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        $this->valueHoldere8e91 = clone $this->valueHoldere8e91;
    }
    public function __sleep()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, '__sleep', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return array('valueHoldere8e91');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer26d2d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer26d2d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'initializeProxy', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere8e91;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere8e91;
    }
}
