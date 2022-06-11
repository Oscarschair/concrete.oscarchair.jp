<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\OAuth;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \Concrete\Core\Entity\OAuth\Client implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'identifier', 'name', 'redirectUri', 'clientKey', 'clientSecret', 'consentType'];
        }

        return ['__isInitialized__', 'identifier', 'name', 'redirectUri', 'clientKey', 'clientSecret', 'consentType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
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
    public function getIdentifier()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getIdentifier();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentifier($identifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifier', [$identifier]);

        return parent::setIdentifier($identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function isConfidential()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isConfidential', []);

        return parent::isConfidential();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientKey', []);

        return parent::getClientKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientKey($clientKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientKey', [$clientKey]);

        return parent::setClientKey($clientKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientSecret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientSecret', []);

        return parent::getClientSecret();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientSecret($clientSecret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientSecret', [$clientSecret]);

        return parent::setClientSecret($clientSecret);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedirectUri()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedirectUri', []);

        return parent::getRedirectUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setRedirectUri($redirectUri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedirectUri', [$redirectUri]);

        return parent::setRedirectUri($redirectUri);
    }

    /**
     * {@inheritDoc}
     */
    public function getConsentType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConsentType', []);

        return parent::getConsentType();
    }

    /**
     * {@inheritDoc}
     */
    public function setConsentType($consentType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConsentType', [$consentType]);

        return parent::setConsentType($consentType);
    }

}
