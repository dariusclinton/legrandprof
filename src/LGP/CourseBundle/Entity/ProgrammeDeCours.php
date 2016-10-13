<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ProgrammeDeCours
 *
 * @ORM\Table(name="lgp_programme_de_cours")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\ProgrammeDeCoursRepository")
 */
class ProgrammeDeCours
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
   * @var \LGP\ReservationBundle\Entity\ReservationEnseignement
   *
   * @ORM\OneToOne(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", mappedBy="programmeDeCours")
   */
  private $reservationEnseignement;

  /**
   * @var \LGP\CourseBundle\Entity\EntreeProgramme
   *
   * @ORM\OneToMany(targetEntity="LGP\CourseBundle\Entity\EntreeProgramme", mappedBy="programmeDeCours", cascade={"persist", "remove"})
   */
  private $entreesProgrammes;


  /**
   * Constructor
   */
  public function __construct()
  {
    $this->entreesProgrammes = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
   * Get id
   *
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set reservationEnseignement
   *
   * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
   *
   * @return ProgrammeDeCours
   */
  public function setReservationEnseignement(\LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement = null)
  {
    $this->reservationEnseignement = $reservationEnseignement;

    return $this;
  }

  /**
   * Get reservationEnseignement
   *
   * @return \LGP\ReservationBundle\Entity\ReservationEnseignement
   */
  public function getReservationEnseignement()
  {
    return $this->reservationEnseignement;
  }

  /**
   * Add entreesProgramme
   *
   * @param \LGP\CourseBundle\Entity\EntreeProgramme $entreesProgramme
   *
   * @return ProgrammeDeCours
   */
  public function addEntreesProgramme(\LGP\CourseBundle\Entity\EntreeProgramme $entreesProgramme)
  {
    $this->entreesProgrammes[] = $entreesProgramme;

    $entreesProgramme->setProgrammeDeCours($this);

    return $this;
  }

  /**
   * Remove entreesProgramme
   *
   * @param \LGP\CourseBundle\Entity\EntreeProgramme $entreesProgramme
   */
  public function removeEntreesProgramme(\LGP\CourseBundle\Entity\EntreeProgramme $entreesProgramme)
  {
    $this->entreesProgrammes->removeElement($entreesProgramme);
  }

  /**
   * Get entreesProgrammes
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getEntreesProgrammes()
  {
    return $this->entreesProgrammes;
  }
}
