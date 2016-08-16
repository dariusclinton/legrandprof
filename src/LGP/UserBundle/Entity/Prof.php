<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prof
 *
 * @ORM\Table(name="lgp_prof")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\ProfRepository")
 */
class Prof {

    /**
     * @ORM\OneToOne(targetEntity="User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

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
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=255)
     */
    private $quartier;

    /**
     * @var string
     *
     * @ORM\Column(name="boite_postale", type="string", length=255, nullable=true)
     */
    private $boitePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="situation_matrimoniale", type="string", length=255)
     */
    private $situationMatrimoniale;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_scolaire", type="string", length=255, nullable=true)
     */
    private $niveauScolaire;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_enfants", type="integer")
     */
    private $nombreEnfants;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_recommande", type="boolean")
     */
    private $isRecommande = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_actif", type="boolean")
     */
    private $isActif = true;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text")
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255)
     */
    private $profession;

    /**
     * @var \LGPCourseBundle\Entity\SeanceDeCours
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\SeanceDeCours", mappedBy="prof")
     */
    private $seanceDeCours;

    /**
     * Constructor
     */
    public function __construct() {
        $this->seanceDeCours = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Prof
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
     * Set quartier
     *
     * @param string $quartier
     *
     * @return Prof
     */
    public function setQuartier($quartier) {
        $this->quartier = $quartier;

        return $this;
    }

    /**
     * Get quartier
     *
     * @return string
     */
    public function getQuartier() {
        return $this->quartier;
    }

    /**
     * Set boitePostale
     *
     * @param string $boitePostale
     *
     * @return Prof
     */
    public function setBoitePostale($boitePostale) {
        $this->boitePostale = $boitePostale;

        return $this;
    }

    /**
     * Get boitePostale
     *
     * @return string
     */
    public function getBoitePostale() {
        return $this->boitePostale;
    }

    /**
     * Set situationMatrimoniale
     *
     * @param string $situationMatrimoniale
     *
     * @return Prof
     */
    public function setSituationMatrimoniale($situationMatrimoniale) {
        $this->situationMatrimoniale = $situationMatrimoniale;

        return $this;
    }

    /**
     * Get situationMatrimoniale
     *
     * @return string
     */
    public function getSituationMatrimoniale() {
        return $this->situationMatrimoniale;
    }

    /**
     * Set niveauScolaire
     *
     * @param string $niveauScolaire
     *
     * @return Prof
     */
    public function setNiveauScolaire($niveauScolaire) {
        $this->niveauScolaire = $niveauScolaire;

        return $this;
    }

    /**
     * Get niveauScolaire
     *
     * @return string
     */
    public function getNiveauScolaire() {
        return $this->niveauScolaire;
    }

    /**
     * Set nombreEnfants
     *
     * @param integer $nombreEnfants
     *
     * @return Prof
     */
    public function setNombreEnfants($nombreEnfants) {
        $this->nombreEnfants = $nombreEnfants;

        return $this;
    }

    /**
     * Get nombreEnfants
     *
     * @return integer
     */
    public function getNombreEnfants() {
        return $this->nombreEnfants;
    }

    /**
     * Set isRecommande
     *
     * @param boolean $isRecommande
     *
     * @return Prof
     */
    public function setIsRecommande($isRecommande) {
        $this->isRecommande = $isRecommande;

        return $this;
    }

    /**
     * Get isRecommande
     *
     * @return boolean
     */
    public function getIsRecommande() {
        return $this->isRecommande;
    }

    /**
     * Set isActif
     *
     * @param boolean $isActif
     *
     * @return Prof
     */
    public function setIsActif($isActif) {
        $this->isActif = $isActif;

        return $this;
    }

    /**
     * Get isActif
     *
     * @return boolean
     */
    public function getIsActif() {
        return $this->isActif;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return Prof
     */
    public function setPresentation($presentation) {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation() {
        return $this->presentation;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Prof
     */
    public function setProfession($profession) {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession() {
        return $this->profession;
    }

    /**
     * Set user
     *
     * @param \LGP\UserBundle\Entity\User $user
     *
     * @return Prof
     */
    public function setUser(\LGP\UserBundle\Entity\User $user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \LGP\UserBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Add seanceDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour
     *
     * @return Prof
     */
    public function addSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour) {
        $this->seanceDeCours[] = $seanceDeCour;

        return $this;
    }

    /**
     * Remove seanceDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour
     */
    public function removeSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour) {
        $this->seanceDeCours->removeElement($seanceDeCour);
    }

    /**
     * Get seanceDeCours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeanceDeCours() {
        return $this->seanceDeCours;
    }

}
