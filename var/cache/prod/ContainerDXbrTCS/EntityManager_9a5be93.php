<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere8e91 = null;
    private $initializer26d2d = null;
    private static $publicProperties9993f = [
        
    ];
    public function getConnection()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getConnection', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getMetadataFactory', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getExpressionBuilder', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'beginTransaction', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getCache', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getCache();
    }
    public function transactional($func)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'transactional', array('func' => $func), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'wrapInTransaction', array('func' => $func), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'commit', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->commit();
    }
    public function rollback()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'rollback', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getClassMetadata', array('className' => $className), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'createQuery', array('dql' => $dql), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'createNamedQuery', array('name' => $name), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'createQueryBuilder', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'flush', array('entity' => $entity), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'clear', array('entityName' => $entityName), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->clear($entityName);
    }
    public function close()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'close', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->close();
    }
    public function persist($entity)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'persist', array('entity' => $entity), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'remove', array('entity' => $entity), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'refresh', array('entity' => $entity), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'detach', array('entity' => $entity), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'merge', array('entity' => $entity), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getRepository', array('entityName' => $entityName), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'contains', array('entity' => $entity), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getEventManager', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getConfiguration', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'isOpen', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getUnitOfWork', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getProxyFactory', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'initializeObject', array('obj' => $obj), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'getFilters', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'isFiltersStateClean', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, 'hasFilters', array(), $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        return $this->valueHoldere8e91->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer26d2d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere8e91) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere8e91 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere8e91->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer26d2d && ($this->initializer26d2d->__invoke($valueHoldere8e91, $this, '__get', ['name' => $name], $this->initializer26d2d) || 1) && $this->valueHoldere8e91 = $valueHoldere8e91;
        if (isset(self::$publicProperties9993f[$name])) {
            return $this->valueHoldere8e91->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
