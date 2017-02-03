<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="lgp_prof")
 * @UniqueEntity(fields = "username", targetClass = "LGP\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LGP\UserBundle\Entity\User", message="fos_user.email.already_used")
 * @ORM\HasLifecycleCallbacks
 */
class Prof extends User
{

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
     * @ORM\ManyToMany(targetEntity="Quartier", inversedBy="profs", cascade={ "persist", "remove" })
     * @ORM\JoinTable(name="lgp_prof_quartier")
     */
    private $quartierCibles;

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
     * @ORM\Column(name="niveau_scolaire", type="string", length=255, nullable=true)
     */
    private $niveauScolaire;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_enfants", type="integer", nullable=true)
     * @Assert\Range(min=0, invalidMessage="Veuillez entrer un nombre")
     */
    private $nombreEnfants;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_recommande", type="boolean")
     */
    private $isRecommande = false;

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
     * @ORM\OneToOne(targetEntity="CVFile", cascade={ "persist", "remove" })
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    private $CVFile;

    /**
     * @var \LGP\CourseBundle\Entity\SeanceDeCours
     *
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\SeanceDeCours", mappedBy="prof", cascade={"persist", "remove"})
     */
    private $seancesDeCours;

    /**
     * @var \LGP\CourseBundle\Entity\Enseigne
     *
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Enseignement", mappedBy="prof", cascade={"persist", "remove"})
     */
    private $enseignements;

    /**
     * @var \LGP\CourseBundle\Entity\Evaluation
     *
     * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\Evaluation", mappedBy="prof", cascade={ "persist", "remove" })
     */
    private $evaluations;

    /**
     * @ORM\OneToMany(targetEntity="LGP\UserBundle\Entity\Diplome", mappedBy="prof", cascade={ "persist", "remove" })
     * @Assert\Valid()
     */
    private $diplomes;

    /**
     * @ORM\OneToMany(targetEntity="ExperiencePro", mappedBy="prof", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $experiencePros;

    /**
     * @ORM\OneToMany(targetEntity="Remuneration", mappedBy="prof", cascade={"persist", "remove"})
     */
    private $remunerations;


    /**
     * @ORM\OneToOne(targetEntity="LGP\UserBundle\Entity\ProgrammeDeDispo", inversedBy="prof", cascade={ "persist", "remove" })
     * @ORM\JoinColumn(nullable=true)
     */
    private $programmeDeDispo;

    /**
     * @var slug
     *
     * @Gedmo\Slug(fields={"prenoms", "nom"}, unique=false, updatable=true)
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * Constructeur
     */
    function __construct()
    {
        parent::__construct();

        $this->seancesDeCours = new ArrayCollection();
        $this->enseignements = new ArrayCollection();
        $this->evaluations = new ArrayCollection();
        $this->diplomes = new ArrayCollection();
        $this->experiencePros = new ArrayCollection();
        $this->remunerations = new ArrayCollection();
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
     * @return integer
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
     * @return boolean
     */
    public function getIsRecommande()
    {
        return $this->isRecommande;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
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
     * @return string
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
     * Add seanceDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour
     *
     * @return Prof
     */
    public function addSeanceDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seanceDeCour)
    {
        $this->seanceDeCours[] = $seanceDeCour;
        $seanceDeCour->setProf($this);

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
     * Add seancesDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seancesDeCour
     *
     * @return Prof
     */
    public function addSeancesDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seancesDeCour)
    {
        $this->seancesDeCours[] = $seancesDeCour;
        $seancesDeCour->setProf($this);

        return $this;
    }

    /**
     * Remove seancesDeCour
     *
     * @param \LGP\CourseBundle\Entity\SeanceDeCours $seancesDeCour
     */
    public function removeSeancesDeCour(\LGP\CourseBundle\Entity\SeanceDeCours $seancesDeCour)
    {
        $this->seancesDeCours->removeElement($seancesDeCour);
    }

    /**
     * Get seancesDeCours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeancesDeCours()
    {
        return $this->seancesDeCours;
    }

    /**
     * Add enseignement
     *
     * @param \LGP\CourseBundle\Entity\Enseignement $enseignement
     *
     * @return Prof
     */
    public function addEnseignement(\LGP\CourseBundle\Entity\Enseignement $enseignement)
    {
        $this->enseignements[] = $enseignement;
        $enseignement->setProf($this);

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
        $enseignement->setProf($this);
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
        $evaluation->setProf($this);

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
     * Add diplome
     *
     * @param \LGP\UserBundle\Entity\Diplome $diplome
     *
     * @return Prof
     */
    public function addDiplome(\LGP\UserBundle\Entity\Diplome $diplome)
    {
        $this->diplomes[] = $diplome;
        $diplome->setProf($this);

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

        $experiencePro->setProf($this);

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
     * Cette fonction permet de retourner la chaine a afficher
     * decrivant le Prof
     * @return type
     */
    public function getAffichage()
    {
        return $this->nom . ' ' . $this->prenoms . ' - ' . $this->profession;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->roles[] = 'ROLE_PROF';
    }


    /**
     * Add quartierCible
     *
     * @param \LGP\UserBundle\Entity\Quartier $quartierCible
     *
     * @return Prof
     */
    public function addQuartierCible(\LGP\UserBundle\Entity\Quartier $quartierCible)
    {
        $this->quartierCibles[] = $quartierCible;
        $quartierCible->addProf($this);

        return $this;
    }

    /**
     * Remove quartierCible
     *
     * @param \LGP\UserBundle\Entity\Quartier $quartierCible
     */
    public function removeQuartierCible(\LGP\UserBundle\Entity\Quartier $quartierCible)
    {
        $this->quartierCibles->removeElement($quartierCible);
    }

    /**
     * Get quartierCibles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuartierCibles()
    {
        return $this->quartierCibles;
    }

    /**
     * Set cVFile
     *
     * @param \LGP\UserBundle\Entity\CVFile $cVFile
     *
     * @return Prof
     */
    public function setCVFile(\LGP\UserBundle\Entity\CVFile $cVFile = null)
    {
        $this->CVFile = $cVFile;

        return $this;
    }

    /**
     * Get cVFile
     *
     * @return \LGP\UserBundle\Entity\CVFile
     */
    public function getCVFile()
    {
        return $this->CVFile;
    }

    /**
     * Add remuneration
     *
     * @param \LGP\UserBundle\Entity\Remuneration $remuneration
     *
     * @return Prof
     */
    public function addRemuneration(\LGP\UserBundle\Entity\Remuneration $remuneration)
    {
        $this->remunerations[] = $remuneration;
        $remuneration->setProf($this);

        return $this;
    }

    /**
     * Remove remuneration
     *
     * @param \LGP\UserBundle\Entity\Remuneration $remuneration
     */
    public function removeRemuneration(\LGP\UserBundle\Entity\Remuneration $remuneration)
    {
        $this->remunerations->removeElement($remuneration);
    }

    /**
     * Get remunerations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRemunerations()
    {
        return $this->remunerations;
    }


    /**
     * Set programmeDeDispo
     *
     * @param \LGP\UserBundle\Entity\ProgrammeDeDispo $programmeDeDispo
     *
     * @return Prof
     */
    public function setProgrammeDeDispo(\LGP\UserBundle\Entity\ProgrammeDeDispo $programmeDeDispo = null)
    {
        $this->programmeDeDispo = $programmeDeDispo;

        return $this;
    }

    /**
     * Get programmeDeDispo
     *
     * @return \LGP\UserBundle\Entity\ProgrammeDeDispo
     */
    public function getProgrammeDeDispo()
    {
        return $this->programmeDeDispo;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Prof
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

    public function getAvanceeProfil()
    {
        $percent = 0;
        $total = 14;

        if ($this->ville !== null) {
            $percent += 1;
        }
        if ($this->quartierCibles !== null) {
            $percent += 1;
        }
        if ($this->niveauScolaire !== null) {
            $percent += 1;
        }
        if ($this->presentation !== null) {
            $percent += 1;
        }
        if ($this->profession !== null) {
            $percent += 1;
        }
        if ($this->CVFile !== null) {
            $percent += 1;
        }
        if ($this->diplomes !== null) {
            $percent += 1;
        }
        if ($this->enseignements !== null) {
            $percent += 1;
        }
        if ($this->experiencePros !== null) {
            $percent += 1;
        }
        if ($this->boitePostale !== null) {
            $percent += 1;
        }
        if ($this->situationMatrimoniale !== null) {
            $percent += 1;
        }
        if ($this->nombreEnfants !== null) {
            $percent += 1;
        }
        if ($this->telephone !== null) {
            $percent += 1;
        }
        if ($this->dateNaissance !== null) {
            $percent += 1;
        }
        if ($this->image !== null) {
            $percent += 1;
        }

        return round($percent / $total, 1) * 100;
    }

}
