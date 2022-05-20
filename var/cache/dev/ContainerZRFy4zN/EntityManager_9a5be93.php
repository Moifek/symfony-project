<?php

namespace ContainerZRFy4zN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24d2d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb3455 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties897e9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getConnection', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getMetadataFactory', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getExpressionBuilder', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'beginTransaction', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getCache', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'transactional', array('func' => $func), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'commit', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->commit();
    }

    public function rollback()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'rollback', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getClassMetadata', array('className' => $className), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'createQuery', array('dql' => $dql), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'createNamedQuery', array('name' => $name), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'createQueryBuilder', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'flush', array('entity' => $entity), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'clear', array('entityName' => $entityName), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->clear($entityName);
    }

    public function close()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'close', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->close();
    }

    public function persist($entity)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'persist', array('entity' => $entity), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'remove', array('entity' => $entity), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'refresh', array('entity' => $entity), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'detach', array('entity' => $entity), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'merge', array('entity' => $entity), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'contains', array('entity' => $entity), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getEventManager', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getConfiguration', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'isOpen', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getUnitOfWork', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getProxyFactory', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'initializeObject', array('obj' => $obj), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'getFilters', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'isFiltersStateClean', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'hasFilters', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return $this->valueHolder24d2d->hasFilters();
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

        $instance->initializerb3455 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder24d2d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24d2d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24d2d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, '__get', ['name' => $name], $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        if (isset(self::$publicProperties897e9[$name])) {
            return $this->valueHolder24d2d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24d2d;

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

        $targetObject = $this->valueHolder24d2d;
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
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24d2d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24d2d;
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
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, '__isset', array('name' => $name), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24d2d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24d2d;
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
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, '__unset', array('name' => $name), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24d2d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24d2d;
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
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, '__clone', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        $this->valueHolder24d2d = clone $this->valueHolder24d2d;
    }

    public function __sleep()
    {
        $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, '__sleep', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;

        return array('valueHolder24d2d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb3455 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb3455;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb3455 && ($this->initializerb3455->__invoke($valueHolder24d2d, $this, 'initializeProxy', array(), $this->initializerb3455) || 1) && $this->valueHolder24d2d = $valueHolder24d2d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24d2d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24d2d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
