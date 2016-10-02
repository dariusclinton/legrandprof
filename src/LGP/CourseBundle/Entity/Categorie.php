<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @var \LGP\CourseBundle\Entity\Image
     * 
     * @ORM\OneToOne(targetEntity="LGP\CourseBundle\Entity\ImageCategorie", cascade={ "persist", "remove" })
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    /**
     * @Gedmo\Slug(fields={"intitule"}, unique=false, updatable=true)
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var \LGP\CourseBundle\Entity\Cours
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Cours", mappedBy="categorie", cascade={"persist","remove"})
     */
    private $cours;

    /**
     * Constructor
     */
    public function __construct() {
        $this->cours = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Categorie
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Categorie
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param \LGP\CourseBundle\Entity\ImageCategorie $image
     *
     * @return Categorie
     */
    public function setImage(\LGP\CourseBundle\Entity\ImageCategorie $image = null) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \LGP\CourseBundle\Entity\ImageCategorie
     */
    public function getImage() {
        return $this->image;
    }
    
    /**
     * Add cour
     *
     * @param \LGP\CourseBundle\Entity\Cours $cour
     *
     * @return Categorie
     */
    public function addCour(\LGP\CourseBundle\Entity\Cours $cour) {
        $this->cours[] = $cour;

        return $this;
    }

    /**
     * Remove cour
     *
     * @param \LGP\CourseBundle\Entity\Cours $cour
     */
    public function removeCour(\LGP\CourseBundle\Entity\Cours $cour) {
        $this->cours->removeElement($cour);
    }

    /**
     * Get cours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCours() {
        return $this->cours;
    }


    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Categorie
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
