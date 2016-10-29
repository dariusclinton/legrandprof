<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage ="La longueur doit être au moins de 3 caractères",
     *     maxMessage="La longueur doit être au plus de 255 caractères"
     * )
     */
    private $frequencePaiement;


    /**
     * @var string
     *
     * @ORM\Column(name="mode_paiement", type="string", length=255, nullable=true)
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage ="La longueur doit être au moins de 3 caractères",
     *     maxMessage="La longueur doit être au plus de 255 caractères"
     * )
     */
    private $modePaiement;


    /**
     * @var string
     *
     * @ORM\Column(name="periode_paiement", type="string", length=255, nullable=true)
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage ="La longueur doit être au moins de 3 caractères",
     *     maxMessage="La longueur doit être au plus de 255 caractères"
     * )
     */
    private $periodePaiement;


    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     * @Assert\Range(min=0, minMessage="Vous devez entrer un nombre positif", invalidMessage="vous devez entrer un nombre")
     */
    private $montant;


    
    /**
     * @var \Datetime
     * 
     * @ORM\Column(name="date_reservation",type="datetime", nullable=false)
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     * @Assert\DateTime(message="Vous devez entrer une date valide")
     */
    private $dateReservation;

    /**
     * @var \LGP\ReservationBundle\Entity\Facture
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\Facture", mappedBy="reservation", cascade={"persist","remove"})
     */
    private $factures;
    
    /**
     * @var \LGP\UserBundle\Entity\User
     * 
     * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\User", inversedBy="reservations")
     */
    private $user;
    
    /**
     * @var \LGP\ReservationBundle\Entity\ReservationEnseignement
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", mappedBy="reservation")
     */
    private $reservationEnseignements;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dateReservation = new \DateTime();
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

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     *
     * @return Reservation
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set periodePaiement
     *
     * @param string $periodePaiement
     *
     * @return Reservation
     */
    public function setPeriodePaiement($periodePaiement)
    {
        $this->periodePaiement = $periodePaiement;

        return $this;
    }

    /**
     * Get periodePaiement
     *
     * @return string
     */
    public function getPeriodePaiement()
    {
        return $this->periodePaiement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Reservation
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
}
