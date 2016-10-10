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
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=255, unique=true)
     */
    private $fileName;

    /**
     * @var \LGP\ReservationBundle\Entity\Reservation
     * 
     * @ORM\ManyToOne(targetEntity="LGP\ReservationBundle\Entity\Reservation", inversedBy="factures")
     */
    private $reservation;

    /**
     * @var \LGP\ReservationBundle\Entity\Paiement
     * 
     * @ORM\OneToOne(targetEntity="LGP\ReservationBundle\Entity\Paiement", mappedBy="facture")
     */
    private $paiement;

    

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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return Facture
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set reservation
     *
     * @param \LGP\ReservationBundle\Entity\Reservation $reservation
     *
     * @return Facture
     */
    public function setReservation(\LGP\ReservationBundle\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \LGP\ReservationBundle\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
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
