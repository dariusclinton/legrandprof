<?php

namespace Proxies\__CG__\LGP\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Prof extends \LGP\UserBundle\Entity\Prof implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'diplomes', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'experiencePros', 'id', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'ville', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'quartier', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'boitePostale', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'situationMatrimoniale', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'niveauScolaire', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'nombreEnfants', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'isRecommande', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'isActif', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'presentation', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'profession', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'seanceDeCours', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'reservations', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'enseignes', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'evaluations', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'locked', 'expired', 'expiresAt', 'roles', 'credentialsExpired', 'credentialsExpireAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'diplomes', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'experiencePros', 'id', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'ville', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'quartier', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'boitePostale', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'situationMatrimoniale', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'niveauScolaire', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'nombreEnfants', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'isRecommande', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'isActif', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'presentation', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'profession', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'seanceDeCours', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'reservations', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'enseignes', '' . "\0" . 'LGP\\UserBundle\\Entity\\Prof' . "\0" . 'evaluations', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'locked', 'expired', 'expiresAt', 'roles', 'credentialsExpired', 'credentialsExpireAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Prof $proxy) {
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
    public function setQuartier($quartier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuartier', [$quartier]);

        return parent::setQuartier($quartier);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuartier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuartier', []);

        return parent::getQuartier();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoitePostale($boitePostale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoitePostale', [$boitePostale]);

        return parent::setBoitePostale($boitePostale);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoitePostale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoitePostale', []);

        return parent::getBoitePostale();
    }

    /**
     * {@inheritDoc}
     */
    public function setSituationMatrimoniale($situationMatrimoniale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSituationMatrimoniale', [$situationMatrimoniale]);

        return parent::setSituationMatrimoniale($situationMatrimoniale);
    }

    /**
     * {@inheritDoc}
     */
    public function getSituationMatrimoniale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSituationMatrimoniale', []);

        return parent::getSituationMatrimoniale();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveauScolaire($niveauScolaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveauScolaire', [$niveauScolaire]);

        return parent::setNiveauScolaire($niveauScolaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveauScolaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveauScolaire', []);

        return parent::getNiveauScolaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreEnfants($nombreEnfants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreEnfants', [$nombreEnfants]);

        return parent::setNombreEnfants($nombreEnfants);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreEnfants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreEnfants', []);

        return parent::getNombreEnfants();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRecommande($isRecommande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRecommande', [$isRecommande]);

        return parent::setIsRecommande($isRecommande);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRecommande()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRecommande', []);

        return parent::getIsRecommande();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActif($isActif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActif', [$isActif]);

        return parent::setIsActif($isActif);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActif', []);

        return parent::getIsActif();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentation($presentation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentation', [$presentation]);

        return parent::setPresentation($presentation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentation', []);

        return parent::getPresentation();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfession($profession)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfession', [$profession]);

        return parent::setProfession($profession);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfession()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfession', []);

        return parent::getProfession();
    }

    /**
     * {@inheritDoc}
     */
    public function addDiplome(\LGP\UserBundle\Entity\Diplome $diplome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDiplome', [$diplome]);

        return parent::addDiplome($diplome);
    }

    /**
     * {@inheritDoc}
     */
    public function addSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSeanceDeCour', [$seanceDeCour]);

        return parent::addSeanceDeCour($seanceDeCour);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSeanceDeCour', [$seanceDeCour]);

        return parent::removeSeanceDeCour($seanceDeCour);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeanceDeCours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeanceDeCours', []);

        return parent::getSeanceDeCours();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservation(\LGP\ReservationBundle\Entity\Reservation $reservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', [$reservation]);

        return parent::addReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDiplome(\LGP\UserBundle\Entity\Diplome $diplome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDiplome', [$diplome]);

        return parent::removeDiplome($diplome);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiplomes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiplomes', []);

        return parent::getDiplomes();
    }

    /**
     * {@inheritDoc}
     */
    public function addExperiencePro(\LGP\UserBundle\Entity\ExperiencePro $experiencePro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addExperiencePro', [$experiencePro]);

        return parent::addExperiencePro($experiencePro);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservation(\LGP\ReservationBundle\Entity\Reservation $reservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservation', [$reservation]);

        return parent::removeReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservations', []);

        return parent::getReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnseigne(\LGP\CourseBundle\Entity\Enseigne $enseigne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnseigne', [$enseigne]);

        return parent::addEnseigne($enseigne);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnseigne(\LGP\CourseBundle\Entity\Enseigne $enseigne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnseigne', [$enseigne]);

        return parent::removeEnseigne($enseigne);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnseignes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnseignes', []);

        return parent::getEnseignes();
    }

    /**
     * {@inheritDoc}
     */
    public function addEvaluation(\LGP\CourseBundle\Entity\Evaluation $evaluation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvaluation', [$evaluation]);

        return parent::addEvaluation($evaluation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeExperiencePro(\LGP\UserBundle\Entity\ExperiencePro $experiencePro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeExperiencePro', [$experiencePro]);

        return parent::removeExperiencePro($experiencePro);
    }

    /**
     * {@inheritDoc}
     */
    public function getExperiencePros()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperiencePros', []);

        return parent::getExperiencePros();
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvaluation(\LGP\CourseBundle\Entity\Evaluation $evaluation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvaluation', [$evaluation]);

        return parent::removeEvaluation($evaluation);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvaluations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvaluations', []);

        return parent::getEvaluations();
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
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenoms($prenoms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenoms', [$prenoms]);

        return parent::setPrenoms($prenoms);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenoms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenoms', []);

        return parent::getPrenoms();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance($dateNaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$dateNaissance]);

        return parent::setDateNaissance($dateNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', []);

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumTelephone($numTelephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumTelephone', [$numTelephone]);

        return parent::setNumTelephone($numTelephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumTelephone', []);

        return parent::getNumTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateInscription($dateInscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateInscription', [$dateInscription]);

        return parent::setDateInscription($dateInscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateInscription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateInscription', []);

        return parent::getDateInscription();
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
    public function enabledUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enabledUser', []);

        return parent::enabledUser();
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
    public function addRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', [$role]);

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', []);

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', []);

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$role]);

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsExpired', []);

        return parent::isCredentialsExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isExpired', []);

        return parent::isExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocked', []);

        return parent::isLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuperAdmin', []);

        return parent::isSuperAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', [$role]);

        return parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical($usernameCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', [$usernameCanonical]);

        return parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpireAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpireAt', [$date]);

        return parent::setCredentialsExpireAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpired', [$boolean]);

        return parent::setCredentialsExpired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical($emailCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', [$emailCanonical]);

        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$boolean]);

        return parent::setEnabled($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setExpired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpired', [$boolean]);

        return parent::setExpired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiresAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiresAt', [$date]);

        return parent::setExpiresAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperAdmin', [$boolean]);

        return parent::setSuperAdmin($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$password]);

        return parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$time]);

        return parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function setLocked($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocked', [$boolean]);

        return parent::setLocked($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$confirmationToken]);

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', [$date]);

        return parent::setPasswordRequestedAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', []);

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired($ttl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', [$ttl]);

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', []);

        return parent::getGroupNames();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', [$name]);

        return parent::hasGroup($name);
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
