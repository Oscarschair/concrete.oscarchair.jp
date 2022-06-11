<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Board;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Instance extends \Concrete\Core\Entity\Board\Instance implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'boardInstanceID', 'board', 'items', 'rules', 'batches', 'boardInstanceName', 'dateCreated', 'dateDataPoolLastUpdated', 'site', 'slots'];
        }

        return ['__isInitialized__', 'boardInstanceID', 'board', 'items', 'rules', 'batches', 'boardInstanceName', 'dateCreated', 'dateDataPoolLastUpdated', 'site', 'slots'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Instance $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItems', []);

        return parent::getItems();
    }

    /**
     * {@inheritDoc}
     */
    public function setItems($items): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItems', [$items]);

        parent::setItems($items);
    }

    /**
     * {@inheritDoc}
     */
    public function getBatches()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBatches', []);

        return parent::getBatches();
    }

    /**
     * {@inheritDoc}
     */
    public function setBatches($batches): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBatches', [$batches]);

        parent::setBatches($batches);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoardInstanceID()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getBoardInstanceID();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoardInstanceID', []);

        return parent::getBoardInstanceID();
    }

    /**
     * {@inheritDoc}
     */
    public function getBoardInstanceName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoardInstanceName', []);

        return parent::getBoardInstanceName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoardInstanceName($boardInstanceName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoardInstanceName', [$boardInstanceName]);

        parent::setBoardInstanceName($boardInstanceName);
    }

    /**
     * {@inheritDoc}
     */
    public function getSite(): ?\Concrete\Core\Entity\Site\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite(\Concrete\Core\Entity\Site\Site $site = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlots()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlots', []);

        return parent::getSlots();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlots($slots): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlots', [$slots]);

        parent::setSlots($slots);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoard(): \Concrete\Core\Entity\Board\Board
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoard', []);

        return parent::getBoard();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoard($board): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoard', [$board]);

        parent::setBoard($board);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', []);

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', [$dateCreated]);

        parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreatedObject(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreatedObject', []);

        return parent::getDateCreatedObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDataPoolLastUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDataPoolLastUpdated', []);

        return parent::getDateDataPoolLastUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDataPoolLastUpdated($dateDataPoolLastUpdated): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDataPoolLastUpdated', [$dateDataPoolLastUpdated]);

        parent::setDateDataPoolLastUpdated($dateDataPoolLastUpdated);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function getRules()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRules', []);

        return parent::getRules();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionAssignmentClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionAssignmentClassName', []);

        return parent::getPermissionAssignmentClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectKeyCategoryHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectKeyCategoryHandle', []);

        return parent::getPermissionObjectKeyCategoryHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectIdentifier', []);

        return parent::getPermissionObjectIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionResponseClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionResponseClassName', []);

        return parent::getPermissionResponseClassName();
    }

}
