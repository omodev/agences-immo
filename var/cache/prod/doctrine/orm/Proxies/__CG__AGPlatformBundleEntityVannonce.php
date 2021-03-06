<?php

namespace Proxies\__CG__\AGPlatformBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vannonce extends \AGPlatformBundle\Entity\Vannonce implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'id', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'datei', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'datef', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'prix', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'prixf', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'ville', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'rue', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'surface', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'owner', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'vendu', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'loue', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'test'];
        }

        return ['__isInitialized__', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'id', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'datei', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'datef', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'prix', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'prixf', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'ville', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'rue', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'surface', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'owner', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'vendu', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'loue', '' . "\0" . 'AGPlatformBundle\\Entity\\Vannonce' . "\0" . 'test'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Vannonce $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatei($datei)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatei', [$datei]);

        return parent::setDatei($datei);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatei()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatei', []);

        return parent::getDatei();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatef($datef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatef', [$datef]);

        return parent::setDatef($datef);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatef', []);

        return parent::getDatef();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixf($prixf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixf', [$prixf]);

        return parent::setPrixf($prixf);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixf', []);

        return parent::getPrixf();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setRue($rue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRue', [$rue]);

        return parent::setRue($rue);
    }

    /**
     * {@inheritDoc}
     */
    public function getRue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRue', []);

        return parent::getRue();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurface($surface)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurface', [$surface]);

        return parent::setSurface($surface);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurface()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurface', []);

        return parent::getSurface();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setVendu($vendu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVendu', [$vendu]);

        return parent::setVendu($vendu);
    }

    /**
     * {@inheritDoc}
     */
    public function getVendu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVendu', []);

        return parent::getVendu();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoue($loue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoue', [$loue]);

        return parent::setLoue($loue);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoue', []);

        return parent::getLoue();
    }

    /**
     * {@inheritDoc}
     */
    public function setTest($test)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTest', [$test]);

        return parent::setTest($test);
    }

    /**
     * {@inheritDoc}
     */
    public function getTest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTest', []);

        return parent::getTest();
    }

}
