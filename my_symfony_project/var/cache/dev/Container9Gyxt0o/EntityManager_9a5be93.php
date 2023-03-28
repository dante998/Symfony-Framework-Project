<?php

namespace Container9Gyxt0o;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder46631 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd690d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd0a4a = [
        
    ];

    public function getConnection()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getConnection', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getMetadataFactory', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getExpressionBuilder', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'beginTransaction', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getCache', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'transactional', array('func' => $func), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'commit', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->commit();
    }

    public function rollback()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'rollback', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getClassMetadata', array('className' => $className), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'createQuery', array('dql' => $dql), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'createNamedQuery', array('name' => $name), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'createQueryBuilder', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'flush', array('entity' => $entity), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'clear', array('entityName' => $entityName), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->clear($entityName);
    }

    public function close()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'close', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->close();
    }

    public function persist($entity)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'persist', array('entity' => $entity), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'remove', array('entity' => $entity), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'refresh', array('entity' => $entity), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'detach', array('entity' => $entity), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'merge', array('entity' => $entity), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'contains', array('entity' => $entity), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getEventManager', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getConfiguration', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'isOpen', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getUnitOfWork', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getProxyFactory', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'initializeObject', array('obj' => $obj), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'getFilters', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'isFiltersStateClean', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'hasFilters', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return $this->valueHolder46631->hasFilters();
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

        $instance->initializerd690d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder46631) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder46631 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder46631->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, '__get', ['name' => $name], $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        if (isset(self::$publicPropertiesd0a4a[$name])) {
            return $this->valueHolder46631->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46631;

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

        $targetObject = $this->valueHolder46631;
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
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46631;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46631;
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
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, '__isset', array('name' => $name), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46631;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder46631;
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
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, '__unset', array('name' => $name), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46631;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder46631;
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
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, '__clone', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        $this->valueHolder46631 = clone $this->valueHolder46631;
    }

    public function __sleep()
    {
        $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, '__sleep', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;

        return array('valueHolder46631');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd690d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd690d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd690d && ($this->initializerd690d->__invoke($valueHolder46631, $this, 'initializeProxy', array(), $this->initializerd690d) || 1) && $this->valueHolder46631 = $valueHolder46631;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder46631;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder46631;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}