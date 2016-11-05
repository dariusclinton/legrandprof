<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Message
 *
 * @ORM\Table(name="lgp_message")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\MessageRepository")
 */
class Message
{
  /**
   * @ORM\ManyToOne(targetEntity="User")
   * @ORM\JoinColumn(nullable=false)
   */
  private $expediteur;
  
  /**
   * @ORM\ManyToOne(targetEntity="User")
   * @ORM\JoinColumn(nullable=false)
   */
  private $recepteur;
  
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
     * @ORM\Column(name="contenu", type="text", nullable=true)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     */
    private $contenu;

    /**
     * @ORM\Column(name="is_read", type="boolean")
     */
    private $isRead = false;
    
    /**
     * @ORM\Column(name="date_envoi", type="datetime")
     */
    private $dateEnvoi = false;
    
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
     * @return Message
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
     * @return Message
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
     * Constructor
     */
    public function __construct()
    {
        $this->dateEnvoi = new \DateTime();
    }

    /**
     * Set recepteur
     *
     * @param \LGP\UserBundle\Entity\User $recepteur
     *
     * @return Message
     */
    public function setRecepteur(\LGP\UserBundle\Entity\User $recepteur = null)
    {
        $this->recepteur = $recepteur;

        return $this;
    }

    /**
     * Get recepteur
     *
     * @return \LGP\UserBundle\Entity\User
     */
    public function getRecepteur()
    {
        return $this->recepteur;
    }


    /**
     * Set expediteur
     *
     * @param \LGP\UserBundle\Entity\User $expediteur
     *
     * @return Message
     */
    public function setExpediteur(\LGP\UserBundle\Entity\User $expediteur)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get expediteur
     *
     * @return \LGP\UserBundle\Entity\User
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     *
     * @return Message
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
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return Message
     */
    public function setDateEnvoi(\DateTime $dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;
    
        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }
}
