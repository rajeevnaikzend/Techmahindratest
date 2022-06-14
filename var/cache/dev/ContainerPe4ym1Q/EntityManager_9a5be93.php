<?php

namespace ContainerPe4ym1Q;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc84f1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraaed4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1e252 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getConnection', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getMetadataFactory', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getExpressionBuilder', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'beginTransaction', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getCache', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'transactional', array('func' => $func), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'commit', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->commit();
    }

    public function rollback()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'rollback', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getClassMetadata', array('className' => $className), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'createQuery', array('dql' => $dql), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'createNamedQuery', array('name' => $name), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'createQueryBuilder', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'flush', array('entity' => $entity), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'clear', array('entityName' => $entityName), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->clear($entityName);
    }

    public function close()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'close', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->close();
    }

    public function persist($entity)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'persist', array('entity' => $entity), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'remove', array('entity' => $entity), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'refresh', array('entity' => $entity), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'detach', array('entity' => $entity), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'merge', array('entity' => $entity), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'contains', array('entity' => $entity), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getEventManager', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getConfiguration', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'isOpen', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getUnitOfWork', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getProxyFactory', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'initializeObject', array('obj' => $obj), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'getFilters', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'isFiltersStateClean', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'hasFilters', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return $this->valueHolderc84f1->hasFilters();
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

        $instance->initializeraaed4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc84f1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc84f1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc84f1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, '__get', ['name' => $name], $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        if (isset(self::$publicProperties1e252[$name])) {
            return $this->valueHolderc84f1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc84f1;

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

        $targetObject = $this->valueHolderc84f1;
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
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc84f1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc84f1;
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
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, '__isset', array('name' => $name), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc84f1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc84f1;
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
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, '__unset', array('name' => $name), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc84f1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc84f1;
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
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, '__clone', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        $this->valueHolderc84f1 = clone $this->valueHolderc84f1;
    }

    public function __sleep()
    {
        $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, '__sleep', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;

        return array('valueHolderc84f1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraaed4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraaed4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraaed4 && ($this->initializeraaed4->__invoke($valueHolderc84f1, $this, 'initializeProxy', array(), $this->initializeraaed4) || 1) && $this->valueHolderc84f1 = $valueHolderc84f1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc84f1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc84f1;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
