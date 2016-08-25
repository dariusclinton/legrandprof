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
     * @var \LGPReservationBundle\Entity\ReservationEnseignement
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", mappedBy="reservation")
     */
    private $reservationEnseignements;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->factures = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservationEnseignements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add reservationEnseignement
     *
     * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
     *
     * @return Reservation
     */
    public function addReservationEnseignement(\LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement)
    {
        $this->reservationEnseignements[] = $reservationEnseignement;
    
        return $this;
    }

    /**
     * Remove reservationEnseignement
     *
     * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
     */
    public function removeReservationEnseignement(\LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement)
    {
        $this->reservationEnseignements->removeElement($reservationEnseignement);
    }

    /**
     * Get reservationEnseignements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservationEnseignements()
    {
        return $this->reservationEnseignements;
    }
}
