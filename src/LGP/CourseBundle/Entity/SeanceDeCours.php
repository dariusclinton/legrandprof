<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeanceDeCours
 *
 * @ORM\Table(name="lgp_seance_de_cours")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\SeanceDeCoursRepository")
 */
class SeanceDeCours
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
   * @ORM\Column(name="resume", type="string", length=255, nullable=true)
   */
  private $resume;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="date", type="date", nullable=false)
   */
  private $date;

  /**
   *
   * @var int
   *
   * @ORM\Column(name="duree", type="integer")
   */
  private $duree;

  /**
   * @var \LGPReservationBundle\Entity\ReservationEnseignement
   *
   * @ORM\ManyToOne(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", inversedBy="seancesDeCours")
   * @ORM\JoinColumn(nullable=false)
   */
  private $reservationEnseignement;

  /**
   * @var \LGPUserBundle\Entity\Prof
   *
   * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\Prof", inversedBy="seancesDeCours")
   * @ORM\JoinColumn(nullable=false)
   */
  private $prof;

  public function __construct()
  {
    $this->date = new \DateTime();
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
   * Set resume
   *
   * @param string $resume
   *
   * @return SeanceDeCours
   */
  public function setResume($resume)
  {
    $this->resume = $resume;

    return $this;
  }

  /**
   * Get resume
   *
   * @return string
   */
  public function getResume()
  {
    return $this->resume;
  }

  /**
   * Set date
   *
   * @param \DateTime $date
   *
   * @return SeanceDeCours
   */
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }

  /**
   * Get date
   *
   * @return \DateTime
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * Set duree
   *
   * @param integer $duree
   *
   * @return SeanceDeCours
   */
  public function setDuree($duree)
  {
    $this->duree = $duree;

    return $this;
  }

  /**
   * Get duree
   *
   * @return integer
   */
  public function getDuree()
  {
    return $this->duree;
  }

  /**
   * Set prof
   *
   * @param \LGP\UserBundle\Entity\Prof $prof
   *
   * @return SeanceDeCours
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
   * Set reservationEnseignement
   *
   * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
   *
   * @return SeanceDeCours
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
}
