<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1ca3d = null;
    private $initializer4b59b = null;
    private static $publicProperties6d34c = [
        
    ];
    public function getConnection()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getConnection', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getMetadataFactory', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getExpressionBuilder', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'beginTransaction', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getCache', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'transactional', array('func' => $func), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'commit', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->commit();
    }
    public function rollback()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'rollback', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getClassMetadata', array('className' => $className), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'createQuery', array('dql' => $dql), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'createNamedQuery', array('name' => $name), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'createQueryBuilder', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'flush', array('entity' => $entity), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'clear', array('entityName' => $entityName), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->clear($entityName);
    }
    public function close()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'close', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->close();
    }
    public function persist($entity)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'persist', array('entity' => $entity), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'remove', array('entity' => $entity), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'refresh', array('entity' => $entity), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'detach', array('entity' => $entity), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'merge', array('entity' => $entity), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'contains', array('entity' => $entity), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getEventManager', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getConfiguration', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'isOpen', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getUnitOfWork', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getProxyFactory', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'initializeObject', array('obj' => $obj), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'getFilters', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'isFiltersStateClean', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, 'hasFilters', array(), $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        return $this->valueHolder1ca3d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4b59b = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder1ca3d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1ca3d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder1ca3d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer4b59b && ($this->initializer4b59b->__invoke($valueHolder1ca3d, $this, '__get', ['name' => $name], $this->initializer4b59b) || 1) && $this->valueHolder1ca3d = $valueHolder1ca3d;
        if (isset(self::$publicProperties6d34c[$name])) {
            return $this->valueHolder1ca3d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
