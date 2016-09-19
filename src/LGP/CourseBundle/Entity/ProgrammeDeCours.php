<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgrammeDeCours
 *
 * @ORM\Table(name="lgp_programme_de_cours")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\ProgrammeDeCoursRepository")
 */
class ProgrammeDeCours
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
     * @var \LGP\ReservationBundle\Entity\ReservationEnseignement
     * 
     * @ORM\OneToOne(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", mappedBy="programmeDeCours")
     */
   private $reservationEnseignement;
   
    /**
     * @var \LGP\CourseBundle\Entity\EntreeProgramme
     * 
     * @ORM\OneToOne(targetEntity="LGP\CourseBundle\Entity\EntreeProgramme", inversedBy="programmeDeCours")
     */
   private $entreeProgramme;

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
     * Set reservationEnseignement
     *
     * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
     *
     * @return ProgrammeDeCours
     */
    public function setReservationEnseignement(\LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement = null)
    {
        $this->reservationEnseignement = $reservationEnseignement;
    
        return $this;
    }

    /**
     * Get reservationEnseignement
     *
     * @return \LGP\ReservationBundle\Entity\ReservationEnseignement
     */
    public function getReservationEnseignement()
    {
        return $this->reservationEnseignement;
    }

    /**
     * Set entreeProgramme
     *
     * @param \LGP\CourseBundle\Entity\EntreeProgramme $entreeProgramme
     *
     * @return ProgrammeDeCours
     */
    public function setEntreeProgramme(\LGP\CourseBundle\Entity\EntreeProgramme $entreeProgramme = null)
    {
        $this->entreeProgramme = $entreeProgramme;
    
        return $this;
    }

    /**
     * Get entreeProgramme
     *
     * @return \LGP\CourseBundle\Entity\EntreeProgramme
     */
    public function getEntreeProgramme()
    {
        return $this->entreeProgramme;
    }
}
