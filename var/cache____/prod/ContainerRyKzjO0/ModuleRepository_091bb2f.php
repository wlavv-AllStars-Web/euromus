<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2705d = null;
    private $initializer08154 = null;
    private static $publicPropertiesdcefb = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getList', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getInstalledModules', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getMustBeConfiguredModules', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getUpgradableModules', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'setActionUrls', array('collection' => $collection), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer08154 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder2705d) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder2705d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder2705d->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, '__get', ['name' => $name], $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        if (isset(self::$publicPropertiesdcefb[$name])) {
            return $this->valueHolder2705d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2705d;
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
        $targetObject = $this->valueHolder2705d;
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
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2705d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2705d;
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
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, '__isset', array('name' => $name), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2705d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2705d;
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
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, '__unset', array('name' => $name), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2705d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2705d;
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
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, '__clone', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        $this->valueHolder2705d = clone $this->valueHolder2705d;
    }
    public function __sleep()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, '__sleep', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return array('valueHolder2705d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer08154 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer08154;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'initializeProxy', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2705d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2705d;
    }
}
