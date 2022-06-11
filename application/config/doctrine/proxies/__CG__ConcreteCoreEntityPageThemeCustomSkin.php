<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Page\Theme;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CustomSkin extends \Concrete\Core\Entity\Page\Theme\CustomSkin implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'skinID', 'skinIdentifier', 'pThemeID', 'skinName', 'presetStartingPoint', 'author', 'dateCreated', 'dateUpdated', 'variableCollection', 'customCss'];
        }

        return ['__isInitialized__', 'skinID', 'skinIdentifier', 'pThemeID', 'skinName', 'presetStartingPoint', 'author', 'dateCreated', 'dateUpdated', 'variableCollection', 'customCss'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CustomSkin $proxy) {
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
    public function getSkinID()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getSkinID();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkinID', []);

        return parent::getSkinID();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkinID($skinID): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkinID', [$skinID]);

        parent::setSkinID($skinID);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkinIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkinIdentifier', []);

        return parent::getSkinIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkinIdentifier(string $skinIdentifier): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkinIdentifier', [$skinIdentifier]);

        parent::setSkinIdentifier($skinIdentifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkinName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkinName', []);

        return parent::getSkinName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkinName(string $skinName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkinName', [$skinName]);

        parent::setSkinName($skinName);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        parent::setAuthor($author);
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
    public function getDateUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUpdated', []);

        return parent::getDateUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUpdated($dateUpdated): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUpdated', [$dateUpdated]);

        parent::setDateUpdated($dateUpdated);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariableCollection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariableCollection', []);

        return parent::getVariableCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariableCollection($variableCollection): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariableCollection', [$variableCollection]);

        parent::setVariableCollection($variableCollection);
    }

    /**
     * {@inheritDoc}
     */
    public function getThemeID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemeID', []);

        return parent::getThemeID();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemeID($pThemeID): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemeID', [$pThemeID]);

        parent::setThemeID($pThemeID);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomCss()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomCss', []);

        return parent::getCustomCss();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomCss($customCss): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomCss', [$customCss]);

        parent::setCustomCss($customCss);
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
    public function getIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPresetStartingPoint(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresetStartingPoint', []);

        return parent::getPresetStartingPoint();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresetStartingPoint(string $presetStartingPoint): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresetStartingPoint', [$presetStartingPoint]);

        parent::setPresetStartingPoint($presetStartingPoint);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme(): \Concrete\Core\Page\Theme\Theme
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', []);

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function getStylesheet(): \HtmlObject\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStylesheet', []);

        return parent::getStylesheet();
    }

}
