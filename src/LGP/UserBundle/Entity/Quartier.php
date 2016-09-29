<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quartier
 *
 * @ORM\Table(name="lgp_quartier")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\QuartierRepository")
 */
class Quartier {

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
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var 
     *
     * @ORM\ManyToMany(targetEntity="Prof", mappedBy="quartierCibles", cascade={"persist"})
     */
    private $profs;

    /**
     * Constructor
     */
    public function __construct() {
        $this->profs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Quartier
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Quartier
     */
    public function setVille($ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Affichage d'une desciption de Quartier
     * @return string
     */
    public function getAffichage() {
        return $this->intitule . ' - ' . $this->ville;
    }

    /**
     * Add prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return Quartier
     */
    public function addProf(\LGP\UserBundle\Entity\Prof $prof) {
        $this->profs[] = $prof;

        return $this;
    }

    /**
     * Remove prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     */
    public function removeProf(\LGP\UserBundle\Entity\Prof $prof) {
        $this->profs->removeElement($prof);
    }

    /**
     * Get profs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfs() {
        return $this->profs;
    }

}
