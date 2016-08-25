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
     * @var \LGP\CourseBundle\Entity\Cours
     * 
     * @ORM\ManyToOne(targetEntity="LGP\CourseBundle\Entity\Cours", inversedBy="seances")
     */
    private $cours;

    /**
     * @var \LGPReservationBundle\Entity\JourDeCours
     * 
     * @ORM\ManyToOne(targetEntity="LGP\ReservationBundle\Entity\JourDeCours", inversedBy="seanceDeCours")
     */
    private $jourDeCours;

    /**
     * @var \LGPUserBundle\Entity\Prof
     * 
     * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\Prof", inversedBy="seanceDeCours")
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
     * Set cours
     *
     * @param \LGP\CourseBundle\Entity\Cours $cours
     *
     * @return SeanceDeCours
     */
    public function setCours(\LGP\CourseBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;
    
        return $this;
    }

    /**
     * Get cours
     *
     * @return \LGP\CourseBundle\Entity\Cours
     */
    public function getCours()
    {
        return $this->cours;
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
