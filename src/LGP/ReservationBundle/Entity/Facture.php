<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 * @ORM\Table(name="lgp_facture")
 * @ORM\Entity(repositoryClass="LGP\ReservationBundle\Repository\FactureRepository")
 */
class Facture {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var \LGPReservationBundle\Entity\Reservation
     * 
     * @ORM\ManyToMany(targetEntity="LGP\ReservationBundle\Entity\Reservation", mappedBy="factures")
     */
    private $reservations;

    /**
     * @var \LGPReservationBundle\Entity\Paiement
     * 
     * @ORM\OneToOne(targetEntity="LGP\ReservationBundle\Entity\Paiement", mappedBy="facture")
     */
    private $paiement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set montant
     *
     * @param integer $montant
     *
     * @return Facture
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Add reservation
     *
     * @param \LGP\ReservationBundle\Entity\Reservation $reservation
     *
     * @return Facture
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
     * Set paiement
     *
     * @param \LGP\ReservationBundle\Entity\Paiement $paiement
     *
     * @return Facture
     */
    public function setPaiement(\LGP\ReservationBundle\Entity\Paiement $paiement = null)
    {
        $this->paiement = $paiement;
    
        return $this;
    }

    /**
     * Get paiement
     *
     * @return \LGP\ReservationBundle\Entity\Paiement
     */
    public function getPaiement()
    {
        return $this->paiement;
    }
}
