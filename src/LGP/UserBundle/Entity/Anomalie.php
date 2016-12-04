<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Anomalie
 *
 * @ORM\Table(name="lgp_anomalie")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\AnomalieRepository")
 */
class Anomalie
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
   * @ORM\Column(name="objet", type="string", length=255)
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $objet;

  /**
   * @var string
   *
   * @ORM\Column(name="contenu", type="text")
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $contenu;

  /**
   * @ORM\Column(name="date_publication", type="datetime")
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $datePublication;

  /**
   * @ORM\Column(name="is_read", type="boolean")
   */
  private $isRead = false;

  /**
   * @ORM\ManyToOne(targetEntity="User")
   */
  private $user;

  /**
   * Constructeur
   */
  public function __construct()
  {
    $this->datePublication = new \DateTime();
  }

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
   * Set objet
   *
   * @param string $objet
   *
   * @return Anomalie
   */
  public function setObjet($objet)
  {
    $this->objet = $objet;

    return $this;
  }

  /**
   * Get objet
   *
   * @return string
   */
  public function getObjet()
  {
    return $this->objet;
  }

  /**
   * Set contenu
   *
   * @param string $contenu
   *
   * @return Anomalie
   */
  public function setContenu($contenu)
  {
    $this->contenu = $contenu;

    return $this;
  }

  /**
   * Get contenu
   *
   * @return string
   */
  public function getContenu()
  {
    return $this->contenu;
  }

  /**
   * Set user
   *
   * @param \LGP\UserBundle\Entity\User $user
   *
   * @return Anomalie
   */
  public function setUser(\LGP\UserBundle\Entity\User $user = null)
  {
    $this->user = $user;

    return $this;
  }

  /**
   * Get user
   *
   * @return \LGP\UserBundle\Entity\User
   */
  public function getUser()
  {
    return $this->user;
  }

  /**
   *
   * @return type
   */
  function getDatePublication()
  {
    return $this->datePublication;
  }

  /**
   *
   * @param type $datePublication
   */
  function setDatePublication($datePublication)
  {
    $this->datePublication = $datePublication;
  }

  /**
   * Set isRead
   *
   * @param boolean $isRead
   *
   * @return Anomalie
   */
  public function setIsRead($isRead)
  {
    $this->isRead = $isRead;

    return $this;
  }

  /**
   * Get isRead
   *
   * @return boolean
   */
  public function getIsRead()
  {
    return $this->isRead;
  }
}
