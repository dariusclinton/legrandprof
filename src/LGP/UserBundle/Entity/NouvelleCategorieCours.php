<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NouvelleCategorieCours
 *
 * @ORM\Table(name="lgp_nouvelle_categorie_cours")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\NouvelleCategorieCoursRepository")
 */
class NouvelleCategorieCours
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
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="Prof")
     */
    private $prof;


    /**
     * Get id
     *
     * @return int
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
     * @return NouvelleCategorieCours
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
     * Set description
     *
     * @param string $description
     *
     * @return NouvelleCategorieCours
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return NouvelleCategorieCours
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