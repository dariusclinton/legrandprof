<?php

namespace Proxies\__CG__\LGP\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Anomalie extends \LGP\UserBundle\Entity\Anomalie implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'id', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'objet', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'contenu', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'datePublication', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'isRead', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'id', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'objet', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'contenu', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'datePublication', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'isRead', '' . "\0" . 'LGP\\UserBundle\\Entity\\Anomalie' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Anomalie $proxy) {
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
    public function setObjet($objet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjet', [$objet]);

        return parent::setObjet($objet);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjet', []);

        return parent::getObjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenu($contenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenu', [$contenu]);

        return parent::setContenu($contenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenu', []);

        return parent::getContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\LGP\UserBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePublication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePublication', []);

        return parent::getDatePublication();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePublication($datePublication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePublication', [$datePublication]);

        return parent::setDatePublication($datePublication);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRead($isRead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRead', [$isRead]);

        return parent::setIsRead($isRead);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRead', []);

        return parent::getIsRead();
    }

}
