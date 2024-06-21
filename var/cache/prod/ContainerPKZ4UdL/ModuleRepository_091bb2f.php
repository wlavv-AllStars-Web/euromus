<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldercce17 = null;
    private $initializerf7414 = null;
    private static $publicProperties040d4 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getList', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return $this->valueHoldercce17->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getInstalledModules', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return $this->valueHoldercce17->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getMustBeConfiguredModules', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return $this->valueHoldercce17->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getUpgradableModules', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return $this->valueHoldercce17->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return $this->valueHoldercce17->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return $this->valueHoldercce17->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'setActionUrls', array('collection' => $collection), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return $this->valueHoldercce17->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return $this->valueHoldercce17->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerf7414 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldercce17) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldercce17 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldercce17->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, '__get', ['name' => $name], $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        if (isset(self::$publicProperties040d4[$name])) {
            return $this->valueHoldercce17->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercce17;
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
        $targetObject = $this->valueHoldercce17;
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
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercce17;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldercce17;
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
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, '__isset', array('name' => $name), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercce17;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldercce17;
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
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, '__unset', array('name' => $name), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercce17;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldercce17;
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
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, '__clone', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        $this->valueHoldercce17 = clone $this->valueHoldercce17;
    }
    public function __sleep()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, '__sleep', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
        return array('valueHoldercce17');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf7414 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf7414;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'initializeProxy', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercce17;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercce17;
    }
}
