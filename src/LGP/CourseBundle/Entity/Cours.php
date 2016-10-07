<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Cours
 *
 * @ORM\Table(name="lgp_cours")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\CoursRepository")
 */
class Cours {

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
     * @ORM\Column(name="description", type="text", length=1000, nullable=true)
     */
    private $description;

    /**
     * @Gedmo\Slug(fields={"intitule"}, unique=false, updatable=true)
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var \LGP\CourseBundle\Entity\ImageCourse
     * 
     * @ORM\OneToOne(targetEntity="LGP\CourseBundle\Entity\ImageCourse", cascade={ "persist", "remove" })
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    /**
     * @var \LGP\CourseBundle\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="LGP\CourseBundle\Entity\Categorie", inversedBy="cours")
     */
    private $categorie;

    /**
     * @var \LGP\CourseBundle\Entity\Enseigne
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Enseignement", mappedBy="cours", cascade={"persist","remove"})
     */
    private $enseignements;

    /**
     * Constructor
     */
    public function __construct() {
        $this->evaluations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enseignements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Cours
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
     * @return Cours
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
     * @param \LGP\CourseBundle\Entity\ImageCourse $image
     *
     * @return Cours
     */
    public function setImage(\LGP\CourseBundle\Entity\ImageCourse $image = null) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \LGP\CourseBundle\Entity\ImageCourse
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Set categorie
     *
     * @param \LGP\CourseBundle\Entity\Categorie $categorie
     *
     * @return Cours
     */
    public function setCategorie(\LGP\CourseBundle\Entity\Categorie $categorie = null) {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \LGP\CourseBundle\Entity\Categorie
     */
    public function getCategorie() {
        return $this->categorie;
    }

    /**
     * Add enseignement
     *
     * @param \LGP\CourseBundle\Entity\Enseignement $enseignement
     *
     * @return Cours
     */
    public function addEnseignement(\LGP\CourseBundle\Entity\Enseignement $enseignement) {
        $this->enseignements[] = $enseignement;

        return $this;
    }

    /**
     * Remove enseignement
     *
     * @param \LGP\CourseBundle\Entity\Enseignement $enseignement
     */
    public function removeEnseignement(\LGP\CourseBundle\Entity\Enseignement $enseignement) {
        $this->enseignements->removeElement($enseignement);
    }

    /**
     * Get enseignements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignements() {
        return $this->enseignements;
    }


    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Cours
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
