<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="lgp_categorie")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\CategorieRepository")
 */
class Categorie {

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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \LGPUserBundle\Entity\Image
     * 
     * @ORM\OneToOne(targetEntity="LGP\UserBundle\Entity\Image", cascade={ "persist", "remove" })
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;   

    /**
     * @var \LGP\CourseBundle\Entity\Cours
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Cours", mappedBy="categorie")
     */
    private $cours;
    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cours = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Categorie
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
     * @return Categorie
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
     * Set image
     *
     * @param \LGP\UserBundle\Entity\Image $image
     *
     * @return Categorie
     */
    public function setImage(\LGP\UserBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \LGP\UserBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add cour
     *
     * @param \LGP\CourseBundle\Entity\Cours $cour
     *
     * @return Categorie
     */
    public function addCour(\LGP\CourseBundle\Entity\Cours $cour)
    {
        $this->cours[] = $cour;
    
        return $this;
    }

    /**
     * Remove cour
     *
     * @param \LGP\CourseBundle\Entity\Cours $cour
     */
    public function removeCour(\LGP\CourseBundle\Entity\Cours $cour)
    {
        $this->cours->removeElement($cour);
    }

    /**
     * Get cours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCours()
    {
        return $this->cours;
    }
}
