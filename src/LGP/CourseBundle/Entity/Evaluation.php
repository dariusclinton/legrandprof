<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evaluation
 *
 * @ORM\Table(name="lgp_evaluation")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\EvaluationRepository")
 */
class Evaluation
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
   * @ORM\Column(name="date", type="datetime", nullable=false)
   * @Assert\NotBlank(message="Ce champs est obligatoire")
   * @Assert\DateTime(message="vous devez entrer une date valide")
   */
  private $date;

  /**
   * @var int
   *
   * @ORM\Column(name="duree", type="integer", nullable=false)
   * @Assert\NotBlank(message="Ce champs est obligatoire")
   * @Assert\Range(min=0, minMessage="Vous devez entrer un nombre positif", invalidMessage="vous devez entrer un nombre")
   */
  private $duree;

  /**
   * @var \LGP\ReservationBundle\Entity\ReservationEnseignement
   *
   * @ORM\ManyToOne(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", inversedBy="evaluations")
   * @ORM\JoinColumn(nullable=false)
   */
  private $reservationEnseignement;

  /**
   * @var \LGP\UserBundle\Entity\Prof
   *
   * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\Prof", inversedBy="evaluations")
   * @ORM\JoinColumn(nullable=false)
   */
  private $prof;

  // Constructeur
  public  function __construct()
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
   * Set date
   *
   * @param \DateTime $date
   *
   * @return Evaluation
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
   * Set prof
   *
   * @param \LGP\UserBundle\Entity\Prof $prof
   *
   * @return Evaluation
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
   * @return Evaluation
   */
  public function setReservationEnseignement(\LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement)
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
     * Set duree
     *
     * @param integer $duree
     *
     * @return Evaluation
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
}
