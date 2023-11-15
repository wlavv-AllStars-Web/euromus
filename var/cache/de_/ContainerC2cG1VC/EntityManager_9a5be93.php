<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6a201 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4dfc7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties17798 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getConnection', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getMetadataFactory', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getExpressionBuilder', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'beginTransaction', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getCache', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'transactional', array('func' => $func), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'commit', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->commit();
    }

    public function rollback()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'rollback', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getClassMetadata', array('className' => $className), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'createQuery', array('dql' => $dql), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'createNamedQuery', array('name' => $name), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'createQueryBuilder', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'flush', array('entity' => $entity), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'clear', array('entityName' => $entityName), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->clear($entityName);
    }

    public function close()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'close', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->close();
    }

    public function persist($entity)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'persist', array('entity' => $entity), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'remove', array('entity' => $entity), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'refresh', array('entity' => $entity), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'detach', array('entity' => $entity), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'merge', array('entity' => $entity), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'contains', array('entity' => $entity), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getEventManager', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getConfiguration', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'isOpen', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getUnitOfWork', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getProxyFactory', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'initializeObject', array('obj' => $obj), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'getFilters', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'isFiltersStateClean', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'hasFilters', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return $this->valueHolder6a201->hasFilters();
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

        $instance->initializer4dfc7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6a201) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6a201 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6a201->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, '__get', ['name' => $name], $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        if (isset(self::$publicProperties17798[$name])) {
            return $this->valueHolder6a201->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a201;

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

        $targetObject = $this->valueHolder6a201;
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
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a201;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6a201;
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
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, '__isset', array('name' => $name), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a201;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6a201;
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
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, '__unset', array('name' => $name), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a201;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6a201;
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
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, '__clone', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        $this->valueHolder6a201 = clone $this->valueHolder6a201;
    }

    public function __sleep()
    {
        $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, '__sleep', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;

        return array('valueHolder6a201');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4dfc7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4dfc7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4dfc7 && ($this->initializer4dfc7->__invoke($valueHolder6a201, $this, 'initializeProxy', array(), $this->initializer4dfc7) || 1) && $this->valueHolder6a201 = $valueHolder6a201;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6a201;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6a201;
    }
}
