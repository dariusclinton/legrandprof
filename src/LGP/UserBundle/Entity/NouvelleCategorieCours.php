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
     * @var datetime
     *
     * @ORM\Column(name="dateProposition", type="datetime")
     */
    private $dateProposition;
    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * Constructeur
     */
    public function __construct() {
      $this->dateProposition = new \DateTime();
    }

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
     * @param \LGP\UserBundle\Entity\User $user
     *
     * @return NouvelleCategorieCours
     */
    public function setUser(\LGP\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get prof
     *
     * @return \LGP\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set dateProposition
     *
     * @param \DateTime $dateProposition
     *
     * @return NouvelleCategorieCours
     */
    public function setDateProposition($dateProposition)
    {
        $this->dateProposition = $dateProposition;
    
        return $this;
    }

    /**
     * Get dateProposition
     *
     * @return \DateTime
     */
    public function getDateProposition()
    {
        return $this->dateProposition;
    }
}
