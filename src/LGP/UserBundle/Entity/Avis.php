<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Avis
 *
 * @ORM\Table(name="lgp_avis")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\AvisRepository")
 */
class Avis {

  /**
   * @ORM\ManyToOne(targetEntity="User")
   * @ORM\JoinColumn(nullable=false)
   */
  private $user;

  /**
   * @ORM\ManyToOne(targetEntity="Prof")
   * @ORM\JoinColumn(nullable=false)
   */
  private $prof;
  
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var int
   *
   * @ORM\Column(name="note", type="integer")
   * @Assert\Range(min=0, max=5, invalidMessage="Merci d'entrer un nombre")
   */
  private $note;

  /**
   * @var string
   *
   * @ORM\Column(name="commentaire", type="text", nullable=true)
   */
  private $commentaire;
  
  /**
   * @ORM\Column(name="is_read", type="boolean")
   */
  private $isRead = false;
  
  /**
   * @ORM\Column(name="date_avis", type="datetime")
   */
  private $dateAvis;

  
  /**
   * Constructeur
   */
  public function __construct() {
    $this->dateAvis = new \DateTime();
  }
  
  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set note
   *
   * @param integer $note
   *
   * @return Avis
   */
  public function setNote($note) {
    $this->note = $note;

    return $this;
  }

  /**
   * Get note
   *
   * @return int
   */
  public function getNote() {
    return $this->note;
  }

  /**
   * Set commentaire
   *
   * @param string $commentaire
   *
   * @return Avis
   */
  public function setCommentaire($commentaire) {
    $this->commentaire = $commentaire;

    return $this;
  }

  /**
   * Get commentaire
   *
   * @return string
   */
  public function getCommentaire() {
    return $this->commentaire;
  }

    /**
     * Set prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return Avis
     */
    public function setProf(\LGP\UserBundle\Entity\Prof $prof)
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
     * Set isRead
     *
     * @param boolean $isRead
     *
     * @return Avis
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

    /**
     * Set user
     *
     * @param \LGP\UserBundle\Entity\User $user
     *
     * @return Avis
     */
    public function setUser(\LGP\UserBundle\Entity\User $user)
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
     * Set dateAvis
     *
     * @param \DateTime $dateAvis
     *
     * @return Avis
     */
    public function setDateAvis($dateAvis)
    {
        $this->dateAvis = $dateAvis;
    
        return $this;
    }

    /**
     * Get dateAvis
     *
     * @return \DateTime
     */
    public function getDateAvis()
    {
        return $this->dateAvis;
    }
}
