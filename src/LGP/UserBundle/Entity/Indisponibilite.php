<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Indisponibilite
 *
 * @ORM\Table(name="lgp_indisponibilite")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\IndisponibiliteRepository")
 */
class Indisponibilite
{
  /**
   * @ORM\ManyToOne(targetEntity="Prof")
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="text", nullable=true)
     */
    private $motif;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Indisponibilite
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
     * @return Indisponibilite
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
     * Set motif
     *
     * @param string $motif
     *
     * @return Indisponibilite
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return Indisponibilite
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
    
    /**
     * @Assert\Callback
     */
    public function isDateFinValid(ExecutionContextInterface $context) {
      if ($this->getDateFin() < $this->getDateDebut()) {
        // La règle est violée, on définit l'erreur
        $context
          ->buildViolation('La date de fin doit être supérieure à la date de début.') // message
          ->atPath('dateFin') // attribut de l'objet qui est violé
          ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
        ;
      }
    }
}
