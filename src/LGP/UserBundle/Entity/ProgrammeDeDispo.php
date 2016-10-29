<?php

namespace LGP\UserBundle\Entity;

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
   * @ORM\ManyToMany(targetEntity="LGP\UserBundle\Entity\JourDispo", inversedBy="programmesDeDispos")
   * @ORM\JoinTable(name="lgp_programme_de_dispo_jour_dispo")
   */
  private $joursDispos;

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
        $this->joursDispos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add joursDispo
     *
     * @param \LGP\UserBundle\Entity\JourDispo $joursDispo
     *
     * @return ProgrammeDeDispo
     */
    public function addJoursDispo(\LGP\UserBundle\Entity\JourDispo $joursDispo)
    {
        $this->joursDispos[] = $joursDispo;

        return $this;
    }

    /**
     * Remove joursDispo
     *
     * @param \LGP\UserBundle\Entity\JourDispo $joursDispo
     */
    public function removeJoursDispo(\LGP\UserBundle\Entity\JourDispo $joursDispo)
    {
        $this->joursDispos->removeElement($joursDispo);
    }

    /**
     * Get joursDispos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJoursDispos()
    {
        return $this->joursDispos;
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
}
