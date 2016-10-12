<?php

namespace Proxies\__CG__\LGP\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Quartier extends \LGP\UserBundle\Entity\Quartier implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'id', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'intitule', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'ville', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'slugVille', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'slugQuartier', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'profs'];
        }

        return ['__isInitialized__', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'id', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'intitule', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'ville', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'slugVille', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'slugQuartier', '' . "\0" . 'LGP\\UserBundle\\Entity\\Quartier' . "\0" . 'profs'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Quartier $proxy) {
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
    public function setIntitule($intitule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntitule', [$intitule]);

        return parent::setIntitule($intitule);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntitule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntitule', []);

        return parent::getIntitule();
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
    public function getAffichage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAffichage', []);

        return parent::getAffichage();
    }

    /**
     * {@inheritDoc}
     */
    public function addProf(\LGP\UserBundle\Entity\Prof $prof)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProf', [$prof]);

        return parent::addProf($prof);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProf(\LGP\UserBundle\Entity\Prof $prof)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProf', [$prof]);

        return parent::removeProf($prof);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfs', []);

        return parent::getProfs();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlugVille($slugVille)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlugVille', [$slugVille]);

        return parent::setSlugVille($slugVille);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlugVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlugVille', []);

        return parent::getSlugVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlugQuartier($slugQuartier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlugQuartier', [$slugQuartier]);

        return parent::setSlugQuartier($slugQuartier);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlugQuartier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlugQuartier', []);

        return parent::getSlugQuartier();
    }

}
