<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1ca3d = null;
    private $initializer4b59b = null;
    private static $publicProperties6d34c = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getList', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getInstalledModules', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getMustBeConfiguredModules', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getUpgradableModules', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'setActionUrls', array('collection' => $collection), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer4b59b = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder1ca3d) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder1ca3d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder1ca3d->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, '__get', ['name' => $name], $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        if (isset(self::$publicProperties6d34c[$name])) {
            return $this->valueHolder1ca3d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ca3d;
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
        $targetObject = $this->valueHolder1ca3d;
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
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ca3d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1ca3d;
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
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, '__isset', array('name' => $name), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ca3d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder1ca3d;
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
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, '__unset', array('name' => $name), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ca3d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1ca3d;
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
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, '__clone', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        $this->valueHolder1ca3d = clone $this->valueHolder1ca3d;
    }
    public function __sleep()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, '__sleep', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return array('valueHolder1ca3d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4b59b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4b59b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'initializeProxy', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1ca3d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1ca3d;
    }
}
