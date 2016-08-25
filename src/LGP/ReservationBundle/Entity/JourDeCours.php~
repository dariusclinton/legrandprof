<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JourDeCours
 *
 * @ORM\Table(name="lgp_jour_de_cours")
 * @ORM\Entity(repositoryClass="LGP\ReservationBundle\Repository\JourDeCoursRepository")
 */
class JourDeCours {

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
     * @ORM\Column(name="intitule", type="string", length=255, nullable=false)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="time", nullable=false)
     */
    private $heureFin;

    /**
     * @var \LGPReservationBundle\Entity\ReservationEnseignement
     * 
     * @ORM\ManyToMany(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", mappedBy="joursDeCours")
     */
    private $reservationEnseignements;

    /**
     * @var \LGPCourseBundle\Entity\SeanceDeCours
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\SeanceDeCours", mappedBy="jourDeCours")
     */
    private $seanceDeCours;

  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservationEnseignements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->seanceDeCours = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return JourDeCours
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    
        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     *
     * @return JourDeCours
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    
        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return JourDeCours
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;
    
        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Add reservationEnseignement
     *
     * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
     *
     * @return JourDeCours
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
     * Add seanceDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour
     *
     * @return JourDeCours
     */
    public function addSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour)
    {
        $this->seanceDeCours[] = $seanceDeCour;
    
        return $this;
    }

    /**
     * Remove seanceDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour
     */
    public function removeSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour)
    {
        $this->seanceDeCours->removeElement($seanceDeCour);
    }

    /**
     * Get seanceDeCours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeanceDeCours()
    {
        return $this->seanceDeCours;
    }
}
