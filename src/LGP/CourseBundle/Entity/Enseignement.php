<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignement
 *
 * @ORM\Table(name="lgp_enseignement")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\EnseignementRepository")
 */
class Enseignement
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
     * @ORM\Column(name="classe", type="string", length=255)
     */
    private $classe;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;
    
    /**
     * @var \LGPCourseBundle\Entity\Cours
     * 
     * @ORM\ManyToOne(targetEntity="LGP\CourseBundle\Entity\Cours", inversedBy="enseignements")
     */
    private $cours;
    
    /**
     * @var \LGPUserBundle\Entity\Prof
     * 
     * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\Prof", inversedBy="enseignements")
     */
    private $prof;
    
    /**
     * @var \LGPReservationBundle\Entity\ReservationEnseignement
     * 
     * @ORM\OneToMany(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", mappedBy="enseignement",  cascade={"persist", "remove"})
     */
    private $reservationEnseignements;
   
    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set classe
     *
     * @param string $classe
     *
     * @return Enseignement
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return string
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Enseignement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set cours
     *
     * @param \LGP\CourseBundle\Entity\Cours $cours
     *
     * @return Enseignement
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
     * Set prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return Enseignement
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

    /**
     * Add reservationEnseignement
     *
     * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
     *
     * @return Enseignement
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
     * Cette fonction affiche une description de l'enseigement
     * @return string
     */
    public function affichage() {
        return $this->getCours()->getIntitule() . " - " . $this->classe;
    }
}
