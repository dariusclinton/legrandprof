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
     * @var \Datetime
     * 
     * @ORM\Column(name="date_reservation",type="datetime", nullable=false)
     */
    private $dateReservation;

    /**
     * @var \LGPReservationBundle\Entity\Facture
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\Facture", mappedBy="reservation", cascade={"persist","remove"})
     */
    private $factures;
    
    /**
     * @var \LGPUserBundle\Entity\User
     * 
     * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\User", inversedBy="reservations")
     */
    private $user;
    
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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
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
     * Set user
     *
     * @param \LGP\UserBundle\Entity\User $user
     *
     * @return Reservation
     */
    public function setUser(\LGP\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \LGP\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
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
