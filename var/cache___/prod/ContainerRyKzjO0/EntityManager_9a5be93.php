<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2705d = null;
    private $initializer08154 = null;
    private static $publicPropertiesdcefb = [
        
    ];
    public function getConnection()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getConnection', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getMetadataFactory', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getExpressionBuilder', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'beginTransaction', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getCache', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getCache();
    }
    public function transactional($func)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'transactional', array('func' => $func), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'commit', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->commit();
    }
    public function rollback()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'rollback', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getClassMetadata', array('className' => $className), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'createQuery', array('dql' => $dql), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'createNamedQuery', array('name' => $name), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'createQueryBuilder', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'flush', array('entity' => $entity), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'clear', array('entityName' => $entityName), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->clear($entityName);
    }
    public function close()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'close', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->close();
    }
    public function persist($entity)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'persist', array('entity' => $entity), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'remove', array('entity' => $entity), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'refresh', array('entity' => $entity), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'detach', array('entity' => $entity), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'merge', array('entity' => $entity), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'contains', array('entity' => $entity), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getEventManager', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getConfiguration', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'isOpen', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getUnitOfWork', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getProxyFactory', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'initializeObject', array('obj' => $obj), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'getFilters', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'isFiltersStateClean', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, 'hasFilters', array(), $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        return $this->valueHolder2705d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer08154 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2705d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2705d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2705d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer08154 && ($this->initializer08154->__invoke($valueHolder2705d, $this, '__get', ['name' => $name], $this->initializer08154) || 1) && $this->valueHolder2705d = $valueHolder2705d;
        if (isset(self::$publicPropertiesdcefb[$name])) {
            return $this->valueHolder2705d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
