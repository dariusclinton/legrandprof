<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="lgp_paiement")
 * @ORM\Entity(repositoryClass="LGP\ReservationBundle\Repository\PaiementRepository")
 */
class Paiement {

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
     * @ORM\Column(name="mode", type="string", length=255, nullable=false)
     */
    private $mode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \LGPReservationBundle\Entity\Facture
     * 
     * @ORM\OneToOne(targetEntity="LGP\ReservationBundle\Entity\Facture", inversedBy="paiement")
     * @ORM\JoinColumn(name="facture_id", referencedColumnName="id")
     */
    private $facture;

    /**
     * @var \LGPUserBundle\Entity\Parents
     * 
     * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\Parents", inversedBy="paiements")
     */
    private $parent;


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
     * Set mode
     *
     * @param string $mode
     *
     * @return Paiement
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    
        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Paiement
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set facture
     *
     * @param \LGP\ReservationBundle\Entity\Facture $facture
     *
     * @return Paiement
     */
    public function setFacture(\LGP\ReservationBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;
    
        return $this;
    }

    /**
     * Get facture
     *
     * @return \LGP\ReservationBundle\Entity\Facture
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set parent
     *
     * @param \LGP\UserBundle\Entity\Parents $parent
     *
     * @return Paiement
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
}
