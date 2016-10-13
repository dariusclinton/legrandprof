<?php

namespace LGP\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Paiement
 *
 * @ORM\Table(name="lgp_paiement")
 * @ORM\Entity(repositoryClass="LGP\ReservationBundle\Repository\PaiementRepository")
 */
class Paiement {

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
     * @ORM\Column(name="mode", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage ="La longueur doit être au moins de 3 caractères",
     *     maxMessage="La longueur doit être au plus de 255 caractères"
     * )
     */
    private $mode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     * @Assert\DateTime(message="Vous devez entrer une date valide")
     */
    private $date;

    /**
     * @var \LGP\ReservationBundle\Entity\Facture
     * 
     * @ORM\OneToOne(targetEntity="LGP\ReservationBundle\Entity\Facture", inversedBy="paiement")
     */
    private $facture;

    /**
     * @var \LGP\UserBundle\Entity\User
     * 
     * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\User", inversedBy="paiements")
     */
    private $user;

    

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
     * Set mode
     *
     * @param string $mode
     *
     * @return Paiement
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Paiement
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
     * Set facture
     *
     * @param \LGP\ReservationBundle\Entity\Facture $facture
     *
     * @return Paiement
     */
    public function setFacture(\LGP\ReservationBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \LGP\ReservationBundle\Entity\Facture
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set user
     *
     * @param \LGP\UserBundle\Entity\User $user
     *
     * @return Paiement
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
}
