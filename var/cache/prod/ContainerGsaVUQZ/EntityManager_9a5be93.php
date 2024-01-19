<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc6d2 = null;
    private $initializerf7c73 = null;
    private static $publicProperties1ff14 = [
        
    ];
    public function getConnection()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getConnection', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getMetadataFactory', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getExpressionBuilder', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'beginTransaction', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getCache', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'transactional', array('func' => $func), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'commit', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->commit();
    }
    public function rollback()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'rollback', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getClassMetadata', array('className' => $className), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'createQuery', array('dql' => $dql), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'createNamedQuery', array('name' => $name), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'createQueryBuilder', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'flush', array('entity' => $entity), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'clear', array('entityName' => $entityName), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->clear($entityName);
    }
    public function close()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'close', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->close();
    }
    public function persist($entity)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'persist', array('entity' => $entity), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'remove', array('entity' => $entity), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'refresh', array('entity' => $entity), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'detach', array('entity' => $entity), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'merge', array('entity' => $entity), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'contains', array('entity' => $entity), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getEventManager', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getConfiguration', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'isOpen', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getUnitOfWork', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getProxyFactory', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'initializeObject', array('obj' => $obj), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'getFilters', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'isFiltersStateClean', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, 'hasFilters', array(), $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        return $this->valueHolderdc6d2->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf7c73 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderdc6d2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdc6d2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderdc6d2->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf7c73 && ($this->initializerf7c73->__invoke($valueHolderdc6d2, $this, '__get', ['name' => $name], $this->initializerf7c73) || 1) && $this->valueHolderdc6d2 = $valueHolderdc6d2;
        if (isset(self::$publicProperties1ff14[$name])) {
            return $this->valueHolderdc6d2->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
