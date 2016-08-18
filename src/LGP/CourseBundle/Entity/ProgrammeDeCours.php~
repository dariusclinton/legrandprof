<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgrammeDeCours
 *
 * @ORM\Table(name="lgp_programme_de_cours")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\ProgrammeDeCoursRepository")
 */
class ProgrammeDeCours {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \LGP\CourseBundle\Entity\Cours
     * 
     * @ORM\OneToOne(targetEntity="LGP\CourseBundle\Entity\Cours", mappedBy="programme")
     */
    private $cours;
    
    /**
     * @var \LGP\CourseBundle\Entity\Chapitre
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Chapitre", mappedBy="programme")
     */
    private $chapitres;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chapitres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cours
     *
     * @param \LGP\CourseBundle\Entity\Cours $cours
     *
     * @return ProgrammeDeCours
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
     * Add chapitre
     *
     * @param \LGP\CourseBundle\Entity\Chapitre $chapitre
     *
     * @return ProgrammeDeCours
     */
    public function addChapitre(\LGP\CourseBundle\Entity\Chapitre $chapitre)
    {
        $this->chapitres[] = $chapitre;
    
        return $this;
    }

    /**
     * Remove chapitre
     *
     * @param \LGP\CourseBundle\Entity\Chapitre $chapitre
     */
    public function removeChapitre(\LGP\CourseBundle\Entity\Chapitre $chapitre)
    {
        $this->chapitres->removeElement($chapitre);
    }

    /**
     * Get chapitres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChapitres()
    {
        return $this->chapitres;
    }
}
