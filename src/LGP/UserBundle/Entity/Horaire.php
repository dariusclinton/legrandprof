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
   * @ORM\ManyToMany(targetEntity="LGP\UserBundle\Entity\JourDispo", mappedBy="horaires")
   */
  private $joursDispos;


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
    $this->joursDispos = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
   * Add joursDispo
   *
   * @param \LGP\UserBundle\Entity\JourDispo $joursDispo
   *
   * @return Horaire
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
   * @return string
   */
  public function getAffichage() {
    return $this->debut . ' - ' . $this->fin;
  }
}
