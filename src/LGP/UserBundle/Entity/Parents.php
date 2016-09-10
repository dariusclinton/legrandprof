<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="lgp_parent")
 * @UniqueEntity(fields = "username", targetClass = "LGP\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LGP\UserBundle\Entity\User", message="fos_user.email.already_used")
 * @ORM\HasLifecycleCallbacks
 */
class Parents extends User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
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
      parent::__construct();
      $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
      $this->paiements = new \Doctrine\Common\Collections\ArrayCollection();
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
    
  /**
  * @ORM\PrePersist 
  */
  public function prePersist() {
    $this->roles[] = 'ROLE_PARENT';
  }

}
