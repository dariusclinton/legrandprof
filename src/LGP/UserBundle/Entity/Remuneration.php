<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remuneration
 *
 * @ORM\Table(name="lgp_remuneration")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\RemunerationRepository")
 */
class Remuneration
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
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_paiement", type="string", length=255)
     */
    private $modePaiement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_remuneration", type="datetime")
     */
    private $dateRemuneration;
    
    /**
     * @ORM\ManyToOne(targetEntity="Prof", inversedBy="remunerations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $prof;
    
    /**
     * Constructeur
     */
    public function __construct() {
      $this->dateRemuneration = new \DateTime();
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
     * Set montant
     *
     * @param integer $montant
     *
     * @return Remuneration
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     *
     * @return Remuneration
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;
    
        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set dateRemuneration
     *
     * @param \DateTime $dateRemuneration
     *
     * @return Remuneration
     */
    public function setDateRemuneration($dateRemuneration)
    {
        $this->dateRemuneration = $dateRemuneration;
    
        return $this;
    }

    /**
     * Get dateRemuneration
     *
     * @return \DateTime
     */
    public function getDateRemuneration()
    {
        return $this->dateRemuneration;
    }

    /**
     * Set prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return Remuneration
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
