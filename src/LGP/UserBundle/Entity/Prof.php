<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="lgp_prof")
 * @UniqueEntity(fields = "username", targetClass = "LGP\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LGP\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Prof extends User
{
  /**
   * @ORM\ManyToMany(targetEntity="Diplome")
   * @ORM\JoinTable(name="lgp_prof_diplome")
   */
   private $diplomes;

  /**
   * @ORM\OneToMany(targetEntity="ExperiencePro", mappedBy="prof", cascade={"persist", "remove"})
   */
   private $experiencePros;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="situation_matrimoniale", type="string", length=255, nullable=true)
     */
    private $situationMatrimoniale;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_scolaire", type="string", length=255, nullable=true, nullable=true)
     */
    private $niveauScolaire;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_enfants", type="integer", nullable=true)
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
    private $isActif = false;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @var \LGPCourseBundle\Entity\SeanceDeCours
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\SeanceDeCours", mappedBy="prof")
     */
    private $seanceDeCours;
    
    /**
     * @var \LGPReservationBundle\Entity\Reservation
     * 
     * @ORM\ManyToMany(targetEntity="LGP\ReservationBundle\Entity\Reservation", inversedBy="profs")
     * @ORM\JoinTable(name="lgp_prof_reservation")
     */
    private $reservations;
    
    /**
     * @var \LGPCourseBundle\Entity\Enseigne
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Enseigne", mappedBy="prof")
     */
    private $enseignes;
    
    /**
     * @var \LGPCourseBundle\Entity\Evaluation
     * 
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Evaluation", mappedBy="prof")
     */
    private $evaluations;
   
    /**
     * Constructor
     */
    public function __construct()
    {
      parent::__construct();
      
      $this->diplomes       = new ArrayCollection();
      $this->experiencePros = new ArrayCollection();
      $this->seanceDeCours = new \Doctrine\Common\Collections\ArrayCollection();
      $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
      $this->enseignes = new \Doctrine\Common\Collections\ArrayCollection();
      $this->evaluations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Prof
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
        
        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set quartier
     *
     * @param string $quartier
     *
     * @return Prof
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;
        
        return $this;
    }

    /**
     * Get quartier
     *
     * @return string
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set boitePostale
     *
     * @param string $boitePostale
     *
     * @return Prof
     */
    public function setBoitePostale($boitePostale)
    {
        $this->boitePostale = $boitePostale;
        return $this;
    }

    /**
     * Get boitePostale
     *
     * @return string
     */
    public function getBoitePostale()
    {
        return $this->boitePostale;
    }

    /**
     * Set situationMatrimoniale
     *
     * @param string $situationMatrimoniale
     *
     * @return Prof
     */
    public function setSituationMatrimoniale($situationMatrimoniale)
    {
        $this->situationMatrimoniale = $situationMatrimoniale;
        
        return $this;
    }

    /**
     * Get situationMatrimoniale
     *
     * @return string
     */
    public function getSituationMatrimoniale()
    {
        return $this->situationMatrimoniale;
    }

    /**
     * Set niveauScolaire
     *
     * @param string $niveauScolaire
     *
     * @return Prof
     */
    public function setNiveauScolaire($niveauScolaire)
    {
        $this->niveauScolaire = $niveauScolaire;
        
        return $this;
    }

    /**
     * Get niveauScolaire
     *
     * @return string
     */
    public function getNiveauScolaire()
    {
        return $this->niveauScolaire;
    }

    /**
     * Set nombreEnfants
     *
     * @param integer $nombreEnfants
     *
     * @return Prof
     */
    public function setNombreEnfants($nombreEnfants)
    {
        $this->nombreEnfants = $nombreEnfants;
        
        return $this;
    }

    /**
     * Get nombreEnfants
     *
     * @return int
     */
    public function getNombreEnfants()
    {
        return $this->nombreEnfants;
    }

    /**
     * Set isRecommande
     *
     * @param boolean $isRecommande
     *
     * @return Prof
     */
    public function setIsRecommande($isRecommande)
    {
        $this->isRecommande = $isRecommande;
        
        return $this;
    }

    /**
     * Get isRecommande
     *
     * @return bool
     */
    public function getIsRecommande()
    {
        return $this->isRecommande;
    }

    /**
     * Set isActif
     *
     * @param boolean $isActif
     *
     * @return Prof
     */
    public function setIsActif($isActif)
    {
        $this->isActif = $isActif;
        
        return $this;
    }

    /**
     * Get isActif
     *
     * @return bool
     */
    public function getIsActif()
    {
        return $this->isActif;
    }

    /**
     * Set presentation
     *
     * @param text $presentation
     *
     * @return Prof
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
        
        return $this;
    }

    /**
     * Get presentation
     *
     * @return text
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Prof
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
        
        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Add diplome
     *
     * @param \LGP\UserBundle\Entity\Diplome $diplome
     *
     * @return Prof
     */
    public function addDiplome(\LGP\UserBundle\Entity\Diplome $diplome)
    {
        $this->diplomes[] = $diplome;
    }

    /**
     * Add seanceDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour
     *
     * @return Prof
     */
    public function addSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour)
    {
        $this->seanceDeCours[] = $seanceDeCour;
    
        return $this;
    }

    /**
     * Remove seanceDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour
     */
    public function removeSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour)
    {
        $this->seanceDeCours->removeElement($seanceDeCour);
    }

    /**
     * Get seanceDeCours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeanceDeCours()
    {
        return $this->seanceDeCours;
    }

    /**
     * Add reservation
     *
     * @param \LGP\ReservationBundle\Entity\Reservation $reservation
     *
     * @return Prof
     */
    public function addReservation(\LGP\ReservationBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    
        return $this;
    }

    /**
     * Remove diplome
     *
     * @param \LGP\UserBundle\Entity\Diplome $diplome
     */
    public function removeDiplome(\LGP\UserBundle\Entity\Diplome $diplome)
    {
        $this->diplomes->removeElement($diplome);
    }

    /**
     * Get diplomes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiplomes()
    {
        return $this->diplomes;
    }

    /**
     * Add experiencePro
     *
     * @param \LGP\UserBundle\Entity\ExperiencePro $experiencePro
     *
     * @return Prof
     */
    public function addExperiencePro(\LGP\UserBundle\Entity\ExperiencePro $experiencePro)
    {
        $this->experiencePros[] = $experiencePro;

        // On associe le prof a l'experiencePro
        $experiencePro->setProf($this);
        
        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \LGP\ReservationBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\LGP\ReservationBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add enseigne
     *
     * @param \LGP\CourseBundle\Entity\Enseigne $enseigne
     *
     * @return Prof
     */
    public function addEnseigne(\LGP\CourseBundle\Entity\Enseigne $enseigne)
    {
        $this->enseignes[] = $enseigne;
    
        return $this;
    }

    /**
     * Remove enseigne
     *
     * @param \LGP\CourseBundle\Entity\Enseigne $enseigne
     */
    public function removeEnseigne(\LGP\CourseBundle\Entity\Enseigne $enseigne)
    {
        $this->enseignes->removeElement($enseigne);
    }

    /**
     * Get enseignes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnseignes()
    {
        return $this->enseignes;
    }

    /**
     * Add evaluation
     *
     * @param \LGP\CourseBundle\Entity\Evaluation $evaluation
     *
     * @return Prof
     */
    public function addEvaluation(\LGP\CourseBundle\Entity\Evaluation $evaluation)
    {
        $this->evaluations[] = $evaluation;
    
        return $this;
    }

    /**
     * Remove experiencePro
     *
     * @param \LGP\UserBundle\Entity\ExperiencePro $experiencePro
     */
    public function removeExperiencePro(\LGP\UserBundle\Entity\ExperiencePro $experiencePro)
    {
        $this->experiencePros->removeElement($experiencePro);
    }

    /**
     * Get experiencePros
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExperiencePros()
    {
        return $this->experiencePros;
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
}
