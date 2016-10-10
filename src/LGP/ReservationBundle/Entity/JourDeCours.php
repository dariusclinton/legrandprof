<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * JourDeCours
 *
 * @ORM\Table(name="lgp_jour_de_cours")
 * @ORM\Entity(repositoryClass="LGP\ReservationBundle\Repository\JourDeCoursRepository")
 * @UniqueEntity(fields="intitule", message="Cet intitulé est déjà utilisé.")
 */
class JourDeCours
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
   * @ORM\Column(name="intitule", type="string", length=255, nullable=false, unique=true)
   */
  private $intitule;

  /**
   * @var \LGPReservationBundle\Entity\ReservationEnseignement
   *
   * @ORM\ManyToMany(targetEntity="LGP\ReservationBundle\Entity\ReservationEnseignement", mappedBy="joursDeCours")
   */
  private $reservationEnseignements;


  /**
   * Constructor
   */
  public function __construct()
  {
    $this->reservationEnseignements = new \Doctrine\Common\Collections\ArrayCollection();
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
   * Set intitule
   *
   * @param string $intitule
   *
   * @return JourDeCours
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
   * Add reservationEnseignement
   *
   * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
   *
   * @return JourDeCours
   */
  public function addReservationEnseignement(\LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement)
  {
    $this->reservationEnseignements[] = $reservationEnseignement;

    return $this;
  }

  /**
   * Remove reservationEnseignement
   *
   * @param \LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement
   */
  public function removeReservationEnseignement(\LGP\ReservationBundle\Entity\ReservationEnseignement $reservationEnseignement)
  {
    $this->reservationEnseignements->removeElement($reservationEnseignement);
  }

  /**
   * Get reservationEnseignements
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getReservationEnseignements()
  {
    return $this->reservationEnseignements;
  }
}
