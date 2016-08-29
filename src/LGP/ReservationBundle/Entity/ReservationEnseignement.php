<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationEnseignement
 *
 * @ORM\Table(name="lgp_reservation_enseignement")
 * @ORM\Entity(repositoryClass="LGP\ReservationBundle\Repository\ReservationEnseignementRepository")
 */
class ReservationEnseignement
{
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
     * @ORM\Column(name="lieu_de_cours", type="string", length=255)
     */
    private $lieuDeCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_apprenants", type="integer")
     */
    private $nbApprenants;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_heure_par_jour", type="integer")
     */
    private $nbHeureParJour;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
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
     * @ORM\ManyToMany(targetEntity="LGP\ReservationBundle\Entity\JourDeCours", inversedBy="reservationEnseignements")
     */
   private $joursDeCours;
   
   /**
     * @var \LGPReservationBundle\Entity\Reservation
     * 
     * @ORM\ManyToOne(targetEntity="LGP\ReservationBundle\Entity\Reservation", inversedBy="reservationEnseignements")
     */
    private $reservation;
   
   /**
     * @var \LGPCourseBundle\Entity\Enseignement
     * 
     * @ORM\ManyToOne(targetEntity="LGP\CourseBundle\Entity\Enseignement", inversedBy="reservationEnseignements")
     */
    private $enseignement;
    
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->joursDeCours = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ReservationEnseignement
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
     * @return ReservationEnseignement
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
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return ReservationEnseignement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set nbApprenants
     *
     * @param integer $nbApprenants
     *
     * @return ReservationEnseignement
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
     * Set nbHeureParJour
     *
     * @param integer $nbHeureParJour
     *
     * @return ReservationEnseignement
     */
    public function setNbHeureParJour($nbHeureParJour)
    {
        $this->nbHeureParJour = $nbHeureParJour;
    
        return $this;
    }

    /**
     * Get nbHeureParJour
     *
     * @return integer
     */
    public function getNbHeureParJour()
    {
        return $this->nbHeureParJour;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return ReservationEnseignement
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    
        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return ReservationEnseignement
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
     * @return ReservationEnseignement
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
     * @return ReservationEnseignement
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
     * Set reservation
     *
     * @param \LGP\ReservationBundle\Entity\Reservation $reservation
     *
     * @return ReservationEnseignement
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
     * Set enseignement
     *
     * @param \LGP\CourseBundle\Entity\Enseignement $enseignement
     *
     * @return ReservationEnseignement
     */
    public function setEnseignement(\LGP\CourseBundle\Entity\Enseignement $enseignement = null)
    {
        $this->enseignement = $enseignement;
    
        return $this;
    }

    /**
     * Get enseignement
     *
     * @return \LGP\CourseBundle\Entity\Enseignement
     */
    public function getEnseignement()
    {
        return $this->enseignement;
    }
}
