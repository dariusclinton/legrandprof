<?php

namespace Proxies\__CG__\LGP\CourseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Categorie extends \LGP\CourseBundle\Entity\Categorie implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'id', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'intitule', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'description', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'image', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'slug', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'cours'];
        }

        return ['__isInitialized__', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'id', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'intitule', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'description', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'image', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'slug', '' . "\0" . 'LGP\\CourseBundle\\Entity\\Categorie' . "\0" . 'cours'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Categorie $proxy) {
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
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\LGP\UserBundle\Entity\Image $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function addCour(\LGP\CourseBundle\Entity\Cours $cour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCour', [$cour]);

        return parent::addCour($cour);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCour(\LGP\CourseBundle\Entity\Cours $cour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCour', [$cour]);

        return parent::removeCour($cour);
    }

    /**
     * {@inheritDoc}
     */
    public function getCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCours', []);

        return parent::getCours();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

}
