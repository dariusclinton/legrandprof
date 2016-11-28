<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Quartier
 *
 * @ORM\Table(name="lgp_quartier")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\QuartierRepository")
 */
class Quartier
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
   * @ORM\Column(name="intitule", type="string", length=255, unique=true)
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $intitule;

  /**
   * @var string
   *
   * @ORM\Column(name="ville", type="string", length=255)
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
   */
  private $ville;

  /**
   * @var string
   *
   * @Gedmo\Slug(fields={"ville"}, unique=false, updatable=true, )
   * @ORM\Column(name="slug_ville", type="string", length=255)
   */
  private $slugVille;

  /**
   * @var string
   *
   * @Gedmo\Slug(fields={"intitule"}, unique=false, updatable=true)
   * @ORM\Column(name="slug_quartier", type="string", length=255)
   */
  private $slugQuartier;

  /**
   * @var
   *
   * @ORM\ManyToMany(targetEntity="Prof", mappedBy="quartierCibles", cascade={"persist"})
   */
  private $profs;

  /**
   * Constructor
   */
  public function __construct()
  {
    $this->profs = new \Doctrine\Common\Collections\ArrayCollection();
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
   * Set intitule
   *
   * @param string $intitule
   *
   * @return Quartier
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
   * Set ville
   *
   * @param string $ville
   *
   * @return Quartier
   */
  public function setVille($ville)
  {
    $this->ville = $ville;

    return $this;
  }

  /**
   * Get ville
   *
   * @return string
   */
  public function getVille()
  {
    return $this->ville;
  }

  /**
   * Affichage d'une desciption de Quartier
   * @return string
   */
  public function getAffichage()
  {
    return $this->intitule . ' - ' . $this->ville;
  }

  /**
   * Add prof
   *
   * @param \LGP\UserBundle\Entity\Prof $prof
   *
   * @return Quartier
   */
  public function addProf(\LGP\UserBundle\Entity\Prof $prof)
  {
    $this->profs[] = $prof;

    return $this;
  }

  /**
   * Remove prof
   *
   * @param \LGP\UserBundle\Entity\Prof $prof
   */
  public function removeProf(\LGP\UserBundle\Entity\Prof $prof)
  {
    $this->profs->removeElement($prof);
  }

  /**
   * Get profs
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getProfs()
  {
    return $this->profs;
  }


  /**
   * Set slugVille
   *
   * @param string $slugVille
   *
   * @return Quartier
   */
  public function setSlugVille($slugVille)
  {
    $this->slugVille = $slugVille;

    return $this;
  }

  /**
   * Get slugVille
   *
   * @return string
   */
  public function getSlugVille()
  {
    return $this->slugVille;
  }

  /**
   * Set slugQuartier
   *
   * @param string $slugQuartier
   *
   * @return Quartier
   */
  public function setSlugQuartier($slugQuartier)
  {
    $this->slugQuartier = $slugQuartier;

    return $this;
  }

  /**
   * Get slugQuartier
   *
   * @return string
   */
  public function getSlugQuartier()
  {
    return $this->slugQuartier;
  }
}
