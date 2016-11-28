<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * ExperiencePro
 *
 * @ORM\Table(name="lgp_experience_pro")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\ExperienceProRepository")
 */
class ExperiencePro
{
  /**
   * @ORM\ManyToOne(targetEntity="Prof", inversedBy="experiencePros")
   * @ORM\JoinColumn(nullable=false)
   */
  private $prof;

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
   * @ORM\Column(name="etablissement", type="string", length=255)
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $etablissement;

  /**
   * @var string
   *
   * @ORM\Column(name="poste", type="string", length=255)
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $poste;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="date_debut", type="datetime")
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $dateDebut;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="date_fin", type="datetime")
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $dateFin;

  // Constructeur
  public function __construct($etablissement, $poste, \DateTime $dateDebut, \DateTime $dateFin, Prof $prof)
  {
    $this->etablissement = $etablissement;
    $this->poste = $poste;
    $this->dateDebut = $dateDebut;
    $this->dateFin = $dateFin;
    $this->prof = $prof;
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
   * Set etablissement
   *
   * @param string $etablissement
   *
   * @return ExperiencePro
   */
  public function setEtablissement($etablissement)
  {
    $this->etablissement = $etablissement;

    return $this;
  }

  /**
   * Get etablissement
   *
   * @return string
   */
  public function getEtablissement()
  {
    return $this->etablissement;
  }

  /**
   * Set poste
   *
   * @param string $poste
   *
   * @return ExperiencePro
   */
  public function setPoste($poste)
  {
    $this->poste = $poste;

    return $this;
  }

  /**
   * Get poste
   *
   * @return string
   */
  public function getPoste()
  {
    return $this->poste;
  }

  /**
   * Set dateDebut
   *
   * @param \DateTime $dateDebut
   *
   * @return ExperiencePro
   */
  public function setDateDebut($dateDebut)
  {
    $this->dateDebut = $dateDebut;

    return $this;
  }

  /**
   * Get dateDebut
   *
   * @return \DateTime
   */
  public function getDateDebut()
  {
    return $this->dateDebut;
  }

  /**
   * Set dateFin
   *
   * @param \DateTime $dateFin
   *
   * @return ExperiencePro
   */
  public function setDateFin($dateFin)
  {
    $this->dateFin = $dateFin;

    return $this;
  }

  /**
   * Get dateFin
   *
   * @return \DateTime
   */
  public function getDateFin()
  {
    return $this->dateFin;
  }

  /**
   * Set prof
   *
   * @param \LGP\UserBundle\Entity\Prof $prof
   *
   * @return ExperiencePro
   */
  public function setProf(\LGP\UserBundle\Entity\Prof $prof)
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
//
//  /**
//   * @Assert\Callback
//   */
//  public function isDateFinValid(ExecutionContextInterface $context)
//  {
//    if ($this->getDateFin() < $this->getDateDebut()) {
//      // La règle est violée, on définit l'erreur
//      $context
//        ->buildViolation('La date de fin doit être supérieure à la date de début.')// message
//        ->atPath('dateFin')// attribut de l'objet qui est violé
//        ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
//      ;
//    }
//  }
}
