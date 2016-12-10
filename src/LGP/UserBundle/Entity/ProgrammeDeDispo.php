<?php

namespace LGP\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProgrammeDeDispo
 *
 * @ORM\Table(name="lgp_programme_de_dispo")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\ProgrammeDeDispoRepository")
 */
class ProgrammeDeDispo
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
   * @ORM\ManyToMany(targetEntity="LGP\UserBundle\Entity\Horaire", inversedBy="programmesDeDispos")
   * @ORM\JoinTable(name="lgp_programme_de_dispo_horaire")
   */
  private $horaires;

  /**
   * @ORM\OneToOne(targetEntity="LGP\UserBundle\Entity\Prof", mappedBy="programmeDeDispo")
   */
  private $prof;

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
     * Constructor
     */
    public function __construct()
    {
      $this->horaires = new ArrayCollection();
    }

    /**
     * Set prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return ProgrammeDeDispo
     */
    public function setProf(\LGP\UserBundle\Entity\Prof $prof = null)
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
     * Add horaire
     *
     * @param \LGP\UserBundle\Entity\Horaire $horaire
     *
     * @return ProgrammeDeDispo
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
