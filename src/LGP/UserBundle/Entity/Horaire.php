<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table(name="lgp_horaire")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\HoraireRepository")
 */
class Horaire
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
   * @var \DateTime
   *
   * @ORM\Column(name="debut", type="time")
   */
  private $debut;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="fin", type="time")
   */
  private $fin;

  /**
   * @var \String
   *
   * @ORM\Column(name="jour", type="string", length=50)
   */
  private $jour;


  /**
   * @ORM\ManyToMany(targetEntity="LGP\UserBundle\Entity\ProgrammeDeDispo", mappedBy="horaires")
   */
  private $programmesDeDispos;


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
   * Set debut
   *
   * @param \DateTime $debut
   *
   * @return Horaire
   */
  public function setDebut($debut)
  {
    $this->debut = $debut;

    return $this;
  }

  /**
   * Get debut
   *
   * @return \DateTime
   */
  public function getDebut()
  {
    return $this->debut;
  }

  /**
   * Set fin
   *
   * @param \DateTime $fin
   *
   * @return Horaire
   */
  public function setFin($fin)
  {
    $this->fin = $fin;

    return $this;
  }

  /**
   * Get fin
   *
   * @return \DateTime
   */
  public function getFin()
  {
    return $this->fin;
  }

  /**
   * Constructor
   */
  public function __construct()
  {
    $this->programmesDeDispos = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
   * @return string
   */
  public function getAffichage()
  {
    return $this->debut . ' - ' . $this->fin;
  }

  /**
   * Add programmesDeDispo
   *
   * @param \LGP\UserBundle\Entity\ProgrammeDeDispo $programmesDeDispo
   *
   * @return Horaire
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
     * Set jour
     *
     * @param string $jour
     *
     * @return Horaire
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string
     */
    public function getJour()
    {
        return $this->jour;
    }
}
