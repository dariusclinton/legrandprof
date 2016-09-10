<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeanceDeCours
 *
 * @ORM\Table(name="lgp_seance_de_cours")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\SeanceDeCoursRepository")
 */
class SeanceDeCours {

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
     * @ORM\Column(name="resume", type="string", length=255, nullable=true)
     */
    private $resume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;
    
    /**
     *
     * @var int
     * 
     * @ORM\Column(name="nb_heures", type="integer")
     */
    private $nbHeures;
    
    /**
     * @var \LGPReservationBundle\Entity\JourDeCours
     * 
     * @ORM\OneToOne(targetEntity="LGP\ReservationBundle\Entity\JourDeCours", inversedBy="seanceDeCours")
     */
    private $jourDeCours;

    /**
     * @var \LGPUserBundle\Entity\Prof
     * 
     * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\Prof", inversedBy="seancesDeCours")
     */
    private $prof;
    
    

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
     * Set resume
     *
     * @param string $resume
     *
     * @return SeanceDeCours
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return SeanceDeCours
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
     * Set nbHeures
     *
     * @param integer $nbHeures
     *
     * @return SeanceDeCours
     */
    public function setNbHeures($nbHeures)
    {
        $this->nbHeures = $nbHeures;
    
        return $this;
    }

    /**
     * Get nbHeures
     *
     * @return integer
     */
    public function getNbHeures()
    {
        return $this->nbHeures;
    }

    /**
     * Set jourDeCours
     *
     * @param \LGP\ReservationBundle\Entity\JourDeCours $jourDeCours
     *
     * @return SeanceDeCours
     */
    public function setJourDeCours(\LGP\ReservationBundle\Entity\JourDeCours $jourDeCours = null)
    {
        $this->jourDeCours = $jourDeCours;
    
        return $this;
    }

    /**
     * Get jourDeCours
     *
     * @return \LGP\ReservationBundle\Entity\JourDeCours
     */
    public function getJourDeCours()
    {
        return $this->jourDeCours;
    }

    /**
     * Set prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return SeanceDeCours
     */
    public function setProf(\LGP\UserBundle\Entity\Prof $prof = null)
    {
        $this->prof = $prof;
    
        return $this;
    }

    /**
     * Get prof
     *
     * @return \LGP\UserBundle\Entity\Prof
     */
    public function getProf()
    {
        return $this->prof;
    }
}
