<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdc6d2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf7c73 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1ff14 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getList', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return $this->valueHolderdc6d2->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getInstalledModules', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return $this->valueHolderdc6d2->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getMustBeConfiguredModules', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return $this->valueHolderdc6d2->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getUpgradableModules', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return $this->valueHolderdc6d2->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return $this->valueHolderdc6d2->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return $this->valueHolderdc6d2->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'setActionUrls', array('collection' => $collection), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return $this->valueHolderdc6d2->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return $this->valueHolderdc6d2->clearCache($moduleName, $allShops);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializerf7c73 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolderdc6d2) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderdc6d2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolderdc6d2->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, '__get', ['name' => $name], $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        if (isset(self::$publicProperties1ff14[$name])) {
            return $this->valueHolderdc6d2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc6d2;

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

        $targetObject = $this->valueHolderdc6d2;
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
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc6d2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdc6d2;
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
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, '__isset', array('name' => $name), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc6d2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdc6d2;
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
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, '__unset', array('name' => $name), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc6d2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdc6d2;
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
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, '__clone', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        $this->valueHolderdc6d2 = clone $this->valueHolderdc6d2;
    }

    public function __sleep()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, '__sleep', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;

        return array('valueHolderdc6d2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf7c73 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf7c73;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'initializeProxy', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc6d2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc6d2;
    }
}
