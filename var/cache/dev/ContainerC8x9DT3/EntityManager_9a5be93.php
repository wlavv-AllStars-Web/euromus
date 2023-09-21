<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef046 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5502e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties11d21 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getConnection', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getMetadataFactory', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getExpressionBuilder', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'beginTransaction', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getCache', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'transactional', array('func' => $func), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'commit', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->commit();
    }

    public function rollback()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'rollback', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getClassMetadata', array('className' => $className), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'createQuery', array('dql' => $dql), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'createNamedQuery', array('name' => $name), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'createQueryBuilder', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'flush', array('entity' => $entity), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'clear', array('entityName' => $entityName), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->clear($entityName);
    }

    public function close()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'close', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->close();
    }

    public function persist($entity)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'persist', array('entity' => $entity), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'remove', array('entity' => $entity), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'refresh', array('entity' => $entity), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'detach', array('entity' => $entity), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'merge', array('entity' => $entity), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'contains', array('entity' => $entity), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getEventManager', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getConfiguration', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'isOpen', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getUnitOfWork', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getProxyFactory', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'initializeObject', array('obj' => $obj), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'getFilters', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'isFiltersStateClean', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'hasFilters', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return $this->valueHolderef046->hasFilters();
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

        $instance->initializer5502e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderef046) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef046 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef046->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, '__get', ['name' => $name], $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        if (isset(self::$publicProperties11d21[$name])) {
            return $this->valueHolderef046->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef046;

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

        $targetObject = $this->valueHolderef046;
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
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef046;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef046;
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
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, '__isset', array('name' => $name), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef046;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderef046;
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
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, '__unset', array('name' => $name), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef046;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderef046;
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
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, '__clone', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        $this->valueHolderef046 = clone $this->valueHolderef046;
    }

    public function __sleep()
    {
        $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, '__sleep', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;

        return array('valueHolderef046');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5502e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5502e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5502e && ($this->initializer5502e->__invoke($valueHolderef046, $this, 'initializeProxy', array(), $this->initializer5502e) || 1) && $this->valueHolderef046 = $valueHolderef046;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef046;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef046;
    }
}
