<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="lgp_user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"user_one" = "Parents", "user_two" = "Prof"})
 *
 * @UniqueEntity(fields="telephone", message="Ce numéro de téléphone est déjà utilisé.")
 */
abstract class User extends BaseUser
{
    /**
     * @ORM\OneToOne(targetEntity="Image", cascade={ "persist", "remove" })
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    protected $image;
    
    /**
     * @var \LGPReservationBundle\Entity\Reservation
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\Reservation", mappedBy="user", cascade={"persist","remove"})
     */
    private $reservations;
    
    /**
     * @var \LGPReservationBundle\Entity\Paiement
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\Paiement", mappedBy="user")
     */
    private $paiements;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenoms", type="string", length=255, nullable=true)
     */
    protected $prenoms;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime", nullable=true)
     */
    protected $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    protected $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, unique=true, nullable=true)
     * @Assert\Length(
     *  min=9, minMessage="Le numéro de téléphone doit avoir 9 chiffres.",
     *  max=9, maxMessage="Le numéro de téléphone doit avoir 9 chiffres."
     * )
     * @Assert\Range(min=0, invalidMessage="Veuillez entrer un nombre.")
     */
    protected $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    protected $pays;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime")
     */
    protected $dateInscription;

    /**
     * Constructeur
     */
     public function __construct()
     {
       parent::__construct();
       
       $this->reservations    = new \Doctrine\Common\Collections\ArrayCollection();
       $this->paiements       = new \Doctrine\Common\Collections\ArrayCollection();
       $this->dateInscription = new \DateTime();
       $this->pays            = 'CM';
     }
     
     /**
      * Surcharge de la methode afin de remplir manuellement 
      * l'attribut $username
      * @param type $email
      */
     public function setEmail($email) {
       parent::setEmail($email);
       $this->setUsername(uniqid());
     }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenoms
     *
     * @param string $prenoms
     *
     * @return User
     */
    public function setPrenoms($prenoms)
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    /**
     * Get prenoms
     *
     * @return string
     */
    public function getPrenoms()
    {
        return $this->prenoms;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return User
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set numTelephone
     *
     * @param string $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get numTelephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return User
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return User
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set image
     *
     * @param \LGP\UserBundle\Entity\Image $image
     *
     * @return User
     */
    public function setImage(\LGP\UserBundle\Entity\Image $image = null)
    {
        $this->image = $image;
        
        return $this;
    }

    /**
     * Get image
     *
     * @return \LGP\UserBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Cette fonction retourne quelques infos decrivant l'utilisateur
     * @return type
     */
    public function getAffichage() {
      return $this->prenoms.' '.$this->nom;
    }

    /**
     * Add reservation
     *
     * @param \LGP\ReservationBundle\Entity\Reservation $reservation
     *
     * @return User
     */
    public function addReservation(\LGP\ReservationBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    
        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \LGP\ReservationBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\LGP\ReservationBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }
    
    /**
     * Add paiement
     *
     * @param \LGP\ReservationBundle\Entity\Paiement $paiement
     *
     * @return User
     */
    public function addPaiement(\LGP\ReservationBundle\Entity\Paiement $paiement)
    {
        $this->paiements[] = $paiement;
    
        return $this;
    }

    /**
     * Remove paiement
     *
     * @param \LGP\ReservationBundle\Entity\Paiement $paiement
     */
    public function removePaiement(\LGP\ReservationBundle\Entity\Paiement $paiement)
    {
        $this->paiements->removeElement($paiement);
    }

    /**
     * Get paiements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaiements()
    {
        return $this->paiements;
    }
}
