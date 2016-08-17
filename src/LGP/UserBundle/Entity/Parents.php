<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parents
 *
 * @ORM\Table(name="lgp_parents")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\ParentsRepository")
 */
class Parents {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    /**
     * @var \LGPReservationBundle\Entity\Reservation
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\Reservation", mappedBy="parent", cascade={"persist","remove"})
     */
    private $reservations;
    
    /**
     * @var \LGPReservationBundle\Entity\Paiement
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\Paiement", mappedBy="parent")
     */
    private $paiements;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->paiements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set user
     *
     * @param \LGP\UserBundle\Entity\User $user
     *
     * @return Parents
     */
    public function setUser(\LGP\UserBundle\Entity\User $user)
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
     * Add reservation
     *
     * @param \LGP\ReservationBundle\Entity\Reservation $reservation
     *
     * @return Parents
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
     * @return Parents
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
