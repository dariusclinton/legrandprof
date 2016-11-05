<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * JourDispo
 *
 * @ORM\Table(name="lgp_jour_dispo")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\JourDispoRepository")
 */
class JourDispo
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
   * @ORM\Column(name="intitule", type="string", length=255, unique=true)
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $intitule;

  /**
   * @ORM\ManyToMany(targetEntity="LGP\UserBundle\Entity\ProgrammeDeDispo", mappedBy="joursDispos")
   */
  private $programmesDeDispos;

  /**
   * @ORM\ManyToMany(targetEntity="LGP\UserBundle\Entity\Horaire", inversedBy="joursDispos")
   * @ORM\JoinTable(name="lgp_jour_dispo_horaire")
   */
  private $horaires;


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
   * @return JourDispo
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
     * Constructor
     */
    public function __construct()
    {
        $this->programmesDeDispos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->horaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add programmesDeDispo
     *
     * @param \LGP\UserBundle\Entity\ProgrammeDeDispo $programmesDeDispo
     *
     * @return JourDispo
     */
    public function addProgrammesDeDispo(\LGP\UserBundle\Entity\ProgrammeDeDispo $programmesDeDispo)
    {
        $this->programmesDeDispos[] = $programmesDeDispo;

        return $this;
    }

    /**
     * Remove programmesDeDispo
     *
     * @param \LGP\UserBundle\Entity\ProgrammeDeDispo $programmesDeDispo
     */
    public function removeProgrammesDeDispo(\LGP\UserBundle\Entity\ProgrammeDeDispo $programmesDeDispo)
    {
        $this->programmesDeDispos->removeElement($programmesDeDispo);
    }

    /**
     * Get programmesDeDispos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProgrammesDeDispos()
    {
        return $this->programmesDeDispos;
    }

    /**
     * Add horaire
     *
     * @param \LGP\UserBundle\Entity\Horaire $horaire
     *
     * @return JourDispo
     */
    public function addHoraire(\LGP\UserBundle\Entity\Horaire $horaire)
    {
        $this->horaires[] = $horaire;

        return $this;
    }

    /**
     * Remove horaire
     *
     * @param \LGP\UserBundle\Entity\Horaire $horaire
     */
    public function removeHoraire(\LGP\UserBundle\Entity\Horaire $horaire)
    {
        $this->horaires->removeElement($horaire);
    }

    /**
     * Get horaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHoraires()
    {
        return $this->horaires;
    }
}
