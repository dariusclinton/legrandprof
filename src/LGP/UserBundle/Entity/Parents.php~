<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parents
 *
 * @ORM\Table(name="lgp_parents")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\ParentsRepository")
 */
class Parents
{
  /**
   * @ORM\OneToOne(targetEntity="User", cascade={"persist", "remove"})
   * @ORM\JoinColumn(nullable=false)
   */
   private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * Set user
     *
     * @param \LGP\UserBundle\Entity\User $user
     *
     * @return Parents
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
}
