<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\ChapitreRepository")
 */
class Chapitre
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
     * @var integer
     *
     * @ORM\Column(name="numero_de_partie", type="integer", nullable=false)
     */
    private $numeroDePartie;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255, nullable=false)
     */
    private $intitule;
    
    /**
     * @var \LGP\CourseBundle\Entitty\ProgrammeDeCours
     * 
     * @ORM\ManyToOne(targetEntity="LGP\CourseBundle\Entity\ProgrammeDeCours", inversedBy="chapitres")
     */
    private $programme;


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
     * Set numeroDePartie
     *
     * @param integer $numeroDePartie
     *
     * @return Chapitre
     */
    public function setNumeroDePartie($numeroDePartie)
    {
        $this->numeroDePartie = $numeroDePartie;
    
        return $this;
    }

    /**
     * Get numeroDePartie
     *
     * @return integer
     */
    public function getNumeroDePartie()
    {
        return $this->numeroDePartie;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Chapitre
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
     * Set programme
     *
     * @param \LGP\CourseBundle\Entity\ProgrammeDeCours $programme
     *
     * @return Chapitre
     */
    public function setProgramme(\LGP\CourseBundle\Entity\ProgrammeDeCours $programme = null)
    {
        $this->programme = $programme;
    
        return $this;
    }

    /**
     * Get programme
     *
     * @return \LGP\CourseBundle\Entity\ProgrammeDeCours
     */
    public function getProgramme()
    {
        return $this->programme;
    }
}