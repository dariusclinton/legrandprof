<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="lgp_reservation")
 * @ORM\Entity(repositoryClass="LGP\ReservationBundle\Repository\ReservationRepository")
 */
class Reservation {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_de_cours", type="string", length=255, nullable=false)
     */
    private $lieuDeCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_apprenants", type="integer", nullable=false)
     */
    private $nbApprenants;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_validee", type="boolean", nullable=false)
     */
    private $isValidee;

    /**
     * @var string
     *
     * @ORM\Column(name="frequence_paiement", type="string", length=255, nullable=true)
     */
    private $frequencePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=255, nullable=true)
     */
    private $quartier;

    /**
     * @var \LGPReservationBundle\Entity\JourDeCours
     * 
     * @ORM\ManyToMany(targetEntity="LGP\ReservationBundle\Entity\JourDeCours", inversedBy="reservations")
     * @ORM\JoinTable(name="lgp_reservation_jours_de_cours")
     */
    private $joursDeCours;

    /**
     * @var \LGPReservationBundle\Entity\Facture
     * 
     * @ORM\ManyToMany(targetEntity="LGP\ReservationBundle\Entity\Facture", inversedBy="reservations")
     * @ORM\JoinTable(name="lgp_reservations_factures")
     */
    private $factures;
    
    /**
     * @var \LGPUserBundle\Entity\Parents
     * 
     * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\Parents", inversedBy="reservations")
     */
    private $parent;
    
    /**
     * @var \LGPUserBundle\Entity\Prof
     * 
     * @ORM\ManyToMany(targetEntity="LGP\UserBundle\Entity\Prof", mappedBy="reservations")
     */
    private $profs;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->joursDeCours = new \Doctrine\Common\Collections\ArrayCollection();
        $this->factures = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lieuDeCours
     *
     * @param string $lieuDeCours
     *
     * @return Reservation
     */
    public function setLieuDeCours($lieuDeCours)
    {
        $this->lieuDeCours = $lieuDeCours;
    
        return $this;
    }

    /**
     * Get lieuDeCours
     *
     * @return string
     */
    public function getLieuDeCours()
    {
        return $this->lieuDeCours;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Reservation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set nbApprenants
     *
     * @param integer $nbApprenants
     *
     * @return Reservation
     */
    public function setNbApprenants($nbApprenants)
    {
        $this->nbApprenants = $nbApprenants;
    
        return $this;
    }

    /**
     * Get nbApprenants
     *
     * @return integer
     */
    public function getNbApprenants()
    {
        return $this->nbApprenants;
    }

    /**
     * Set isValidee
     *
     * @param boolean $isValidee
     *
     * @return Reservation
     */
    public function setIsValidee($isValidee)
    {
        $this->isValidee = $isValidee;
    
        return $this;
    }

    /**
     * Get isValidee
     *
     * @return boolean
     */
    public function getIsValidee()
    {
        return $this->isValidee;
    }

    /**
     * Set frequencePaiement
     *
     * @param string $frequencePaiement
     *
     * @return Reservation
     */
    public function setFrequencePaiement($frequencePaiement)
    {
        $this->frequencePaiement = $frequencePaiement;
    
        return $this;
    }

    /**
     * Get frequencePaiement
     *
     * @return string
     */
    public function getFrequencePaiement()
    {
        return $this->frequencePaiement;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Reservation
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set quartier
     *
     * @param string $quartier
     *
     * @return Reservation
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;
    
        return $this;
    }

    /**
     * Get quartier
     *
     * @return string
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Add joursDeCour
     *
     * @param \LGP\ReservationBundle\Entity\JourDeCours $joursDeCour
     *
     * @return Reservation
     */
    public function addJoursDeCour(\LGP\ReservationBundle\Entity\JourDeCours $joursDeCour)
    {
        $this->joursDeCours[] = $joursDeCour;
    
        return $this;
    }

    /**
     * Remove joursDeCour
     *
     * @param \LGP\ReservationBundle\Entity\JourDeCours $joursDeCour
     */
    public function removeJoursDeCour(\LGP\ReservationBundle\Entity\JourDeCours $joursDeCour)
    {
        $this->joursDeCours->removeElement($joursDeCour);
    }

    /**
     * Get joursDeCours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJoursDeCours()
    {
        return $this->joursDeCours;
    }

    /**
     * Add facture
     *
     * @param \LGP\ReservationBundle\Entity\Facture $facture
     *
     * @return Reservation
     */
    public function addFacture(\LGP\ReservationBundle\Entity\Facture $facture)
    {
        $this->factures[] = $facture;
    
        return $this;
    }

    /**
     * Remove facture
     *
     * @param \LGP\ReservationBundle\Entity\Facture $facture
     */
    public function removeFacture(\LGP\ReservationBundle\Entity\Facture $facture)
    {
        $this->factures->removeElement($facture);
    }

    /**
     * Get factures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFactures()
    {
        return $this->factures;
    }

    /**
     * Set parent
     *
     * @param \LGP\UserBundle\Entity\Parents $parent
     *
     * @return Reservation
     */
    public function setParent(\LGP\UserBundle\Entity\Parents $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \LGP\UserBundle\Entity\Parents
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return Reservation
     */
    public function addProf(\LGP\UserBundle\Entity\Prof $prof)
    {
        $this->profs[] = $prof;
    
        return $this;
    }

    /**
     * Remove prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     */
    public function removeProf(\LGP\UserBundle\Entity\Prof $prof)
    {
        $this->profs->removeElement($prof);
    }

    /**
     * Get profs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfs()
    {
        return $this->profs;
    }
}
