<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
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
}
