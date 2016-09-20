<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntreeProgramme
 *
 * @ORM\Table(name="lgp_entree_programme")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\EntreeProgrammeRepository")
 */
class EntreeProgramme {

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
     * @ORM\Column(name="partie", type="string", length=255)
     */
    private $partie;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="isComplete", type="boolean")
     */
    private $isComplete;

    /**
     * @var \LGP\CourseBundle\Entity\ProgrammeDeCours
     * 
     * @ORM\OneToOne(targetEntity="LGP\CourseBundle\Entity\ProgrammeDeCours", mappedBy="entreeProgramme")
     */
    private $programmeDeCours;
    

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
     * Set partie
     *
     * @param string $partie
     *
     * @return EntreeProgramme
     */
    public function setPartie($partie)
    {
        $this->partie = $partie;
    
        return $this;
    }

    /**
     * Get partie
     *
     * @return string
     */
    public function getPartie()
    {
        return $this->partie;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return EntreeProgramme
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
     * Set type
     *
     * @param string $type
     *
     * @return EntreeProgramme
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isComplete
     *
     * @param boolean $isComplete
     *
     * @return EntreeProgramme
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;
    
        return $this;
    }

    /**
     * Get isComplete
     *
     * @return boolean
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * Set programmeDeCours
     *
     * @param \LGP\CourseBundle\Entity\ProgrammeDeCours $programmeDeCours
     *
     * @return EntreeProgramme
     */
    public function setProgrammeDeCours(\LGP\CourseBundle\Entity\ProgrammeDeCours $programmeDeCours = null)
    {
        $this->programmeDeCours = $programmeDeCours;
    
        return $this;
    }

    /**
     * Get programmeDeCours
     *
     * @return \LGP\CourseBundle\Entity\ProgrammeDeCours
     */
    public function getProgrammeDeCours()
    {
        return $this->programmeDeCours;
    }
}
