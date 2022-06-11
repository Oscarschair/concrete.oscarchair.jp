<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Site;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Locale extends \Concrete\Core\Entity\Site\Locale implements \Doctrine\ORM\Proxy\Proxy
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
  'msIsDefault' => NULL,
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
  'msIsDefault' => false,
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        unset($this->msIsDefault);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);

    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'siteLocaleID', 'site', 'tree', 'msIsDefault', 'msLanguage', 'msCountry', 'msNumPlurals', 'msPluralRule', 'msPluralCases'];
        }

        return ['__isInitialized__', 'siteLocaleID', 'site', 'tree', 'msLanguage', 'msCountry', 'msNumPlurals', 'msPluralRule', 'msPluralCases'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Locale $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->msIsDefault);
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
    public function getLocaleID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocaleID', []);

        return parent::getLocaleID();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDefault', []);

        return parent::getIsDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDefault($msIsDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDefault', [$msIsDefault]);

        return parent::setIsDefault($msIsDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite(\Concrete\Core\Entity\Site\Site $site = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTree', []);

        return parent::getSiteTree();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteTree($tree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteTree', [$tree]);

        return parent::setSiteTree($tree);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTreeID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTreeID', []);

        return parent::getSiteTreeID();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTreeObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTreeObject', []);

        return parent::getSiteTreeObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', []);

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($msLanguage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', [$msLanguage]);

        return parent::setLanguage($msLanguage);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($msCountry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$msCountry]);

        return parent::setCountry($msCountry);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumPlurals()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumPlurals', []);

        return parent::getNumPlurals();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumPlurals($msNumPlurals)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumPlurals', [$msNumPlurals]);

        return parent::setNumPlurals($msNumPlurals);
    }

    /**
     * {@inheritDoc}
     */
    public function getPluralRule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPluralRule', []);

        return parent::getPluralRule();
    }

    /**
     * {@inheritDoc}
     */
    public function setPluralRule($msPluralRule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPluralRule', [$msPluralRule]);

        return parent::setPluralRule($msPluralRule);
    }

    /**
     * {@inheritDoc}
     */
    public function getPluralCases()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPluralCases', []);

        return parent::getPluralCases();
    }

    /**
     * {@inheritDoc}
     */
    public function setPluralCases($msPluralCases)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPluralCases', [$msPluralCases]);

        return parent::setPluralCases($msPluralCases);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocale', []);

        return parent::getLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguageText($locale = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguageText', [$locale]);

        return parent::getLanguageText($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getExporter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExporter', []);

        return parent::getExporter();
    }

}
