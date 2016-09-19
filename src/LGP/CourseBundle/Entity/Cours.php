<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="description", type="text", length=1000, nullable=false)
     */
    private $description;

    /**
     * @var \LGP\UserBundle\Entity\Image
     * 
     * @ORM\OneToOne(targetEntity="LGP\UserBundle\Entity\Image", cascade={ "persist", "remove" })
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
     * @var \LGP\CourseBundle\Entity\Evaluation
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Evaluation", mappedBy="cours")
     */
    private $evaluations;

    /**
     * @var \LGPCourseBundle\Entity\Enseigne
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Enseignement", mappedBy="cours")
     */
    private $enseignements;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->evaluations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enseignements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Cours
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
     * @return Cours
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
     * @return Cours
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
     * Set categorie
     *
     * @param \LGP\CourseBundle\Entity\Categorie $categorie
     *
     * @return Cours
     */
    public function setCategorie(\LGP\CourseBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \LGP\CourseBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add evaluation
     *
     * @param \LGP\CourseBundle\Entity\Evaluation $evaluation
     *
     * @return Cours
     */
    public function addEvaluation(\LGP\CourseBundle\Entity\Evaluation $evaluation)
    {
        $this->evaluations[] = $evaluation;
    
        return $this;
    }

    /**
     * Remove evaluation
     *
     * @param \LGP\CourseBundle\Entity\Evaluation $evaluation
     */
    public function removeEvaluation(\LGP\CourseBundle\Entity\Evaluation $evaluation)
    {
        $this->evaluations->removeElement($evaluation);
    }

    /**
     * Get evaluations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvaluations()
    {
        return $this->evaluations;
    }

    /**
     * Add enseignement
     *
     * @param \LGP\CourseBundle\Entity\Enseignement $enseignement
     *
     * @return Cours
     */
    public function addEnseignement(\LGP\CourseBundle\Entity\Enseignement $enseignement)
    {
        $this->enseignements[] = $enseignement;
    
        return $this;
    }

    /**
     * Remove enseignement
     *
     * @param \LGP\CourseBundle\Entity\Enseignement $enseignement
     */
    public function removeEnseignement(\LGP\CourseBundle\Entity\Enseignement $enseignement)
    {
        $this->enseignements->removeElement($enseignement);
    }

    /**
     * Get enseignements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignements()
    {
        return $this->enseignements;
    }
}
