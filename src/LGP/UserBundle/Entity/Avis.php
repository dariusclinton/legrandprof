<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="lgp_avis")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\AvisRepository")
 */
class Avis {

  /**
   * @ORM\ManyToOne(targetEntity="Parents")
   * @ORM\JoinColumn(nullable=false)
   */
  private $parent;

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
   */
  private $note;

  /**
   * @var string
   *
   * @ORM\Column(name="commentaire", type="text", nullable=true)
   */
  private $commentaire;

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
     * Set parent
     *
     * @param \LGP\UserBundle\Entity\Parents $parent
     *
     * @return Avis
     */
    public function setParent(\LGP\UserBundle\Entity\Parents $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \LGP\UserBundle\Entity\Parents
     */
    public function getParent()
    {
        return $this->parent;
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
}
