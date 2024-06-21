<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercce17 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf7414 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties040d4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getConnection', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getMetadataFactory', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getExpressionBuilder', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'beginTransaction', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getCache', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'transactional', array('func' => $func), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'commit', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->commit();
    }

    public function rollback()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'rollback', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getClassMetadata', array('className' => $className), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'createQuery', array('dql' => $dql), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'createNamedQuery', array('name' => $name), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'createQueryBuilder', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'flush', array('entity' => $entity), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'clear', array('entityName' => $entityName), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->clear($entityName);
    }

    public function close()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'close', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->close();
    }

    public function persist($entity)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'persist', array('entity' => $entity), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'remove', array('entity' => $entity), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'refresh', array('entity' => $entity), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'detach', array('entity' => $entity), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'merge', array('entity' => $entity), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'contains', array('entity' => $entity), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getEventManager', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getConfiguration', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'isOpen', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getUnitOfWork', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getProxyFactory', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'initializeObject', array('obj' => $obj), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'getFilters', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'isFiltersStateClean', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, 'hasFilters', array(), $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        return $this->valueHoldercce17->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf7414 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercce17) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercce17 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercce17->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf7414 && ($this->initializerf7414->__invoke($valueHoldercce17, $this, '__get', ['name' => $name], $this->initializerf7414) || 1) && $this->valueHoldercce17 = $valueHoldercce17;

        if (isset(self::$publicProperties040d4[$name])) {
            return $this->valueHoldercce17->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
