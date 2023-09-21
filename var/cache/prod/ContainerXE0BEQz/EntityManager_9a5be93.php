<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera8c3f = null;
    private $initializerecee2 = null;
    private static $publicPropertiesa9448 = [
        
    ];
    public function getConnection()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getConnection', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getMetadataFactory', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getExpressionBuilder', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'beginTransaction', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getCache', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getCache();
    }
    public function transactional($func)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'transactional', array('func' => $func), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'commit', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->commit();
    }
    public function rollback()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'rollback', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getClassMetadata', array('className' => $className), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'createQuery', array('dql' => $dql), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'createNamedQuery', array('name' => $name), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'createQueryBuilder', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'flush', array('entity' => $entity), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'clear', array('entityName' => $entityName), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->clear($entityName);
    }
    public function close()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'close', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->close();
    }
    public function persist($entity)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'persist', array('entity' => $entity), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'remove', array('entity' => $entity), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'refresh', array('entity' => $entity), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'detach', array('entity' => $entity), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'merge', array('entity' => $entity), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'contains', array('entity' => $entity), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getEventManager', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getConfiguration', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'isOpen', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getUnitOfWork', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getProxyFactory', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'initializeObject', array('obj' => $obj), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'getFilters', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'isFiltersStateClean', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'hasFilters', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return $this->valueHoldera8c3f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerecee2 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera8c3f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera8c3f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera8c3f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, '__get', ['name' => $name], $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        if (isset(self::$publicPropertiesa9448[$name])) {
            return $this->valueHoldera8c3f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8c3f;
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
        $targetObject = $this->valueHoldera8c3f;
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
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8c3f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera8c3f;
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
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, '__isset', array('name' => $name), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8c3f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera8c3f;
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
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, '__unset', array('name' => $name), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8c3f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera8c3f;
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
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, '__clone', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        $this->valueHoldera8c3f = clone $this->valueHoldera8c3f;
    }
    public function __sleep()
    {
        $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, '__sleep', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
        return array('valueHoldera8c3f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerecee2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerecee2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerecee2 && ($this->initializerecee2->__invoke($valueHoldera8c3f, $this, 'initializeProxy', array(), $this->initializerecee2) || 1) && $this->valueHoldera8c3f = $valueHoldera8c3f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera8c3f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera8c3f;
    }
}
