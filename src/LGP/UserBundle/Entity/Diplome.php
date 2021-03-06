<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * Diplome
 *
 * @ORM\Table(name="lgp_diplome")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\DiplomeRepository")
 * @Vich\Uploadable
 */
class Diplome
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
   * @ORM\Column(name="intitule", type="string", length=255)
   */
  private $intitule;

  /**
   * @ORM\Column(type="datetime", nullable=true)
   *
   * @var \DateTime
   */
  private $updatedAt;

  /**
   * @Vich\UploadableField(mapping="diplome_file", fileNameProperty="fileName")
   * @Assert\File(
   *   mimeTypes={"application/pdf"},
   *   mimeTypesMessage="Uniquement les {{ types }} sont valides",
   *   maxSize="10M",
   *   maxSizeMessage= "La taille maximum du fichier est {{ limit }} {{ suffix }}"
   * )
   * @var File
   */
  private $file;

  /**
   * @var string
   *
   * @ORM\Column(name="file_name", type="string", length=255, nullable=true)
   */
  private $fileName;

  /**
   * @var
   * @ORM\ManyToOne(targetEntity="LGP\UserBundle\Entity\Prof", inversedBy="diplomes")
   */
  private $prof;


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
   * @return Diplome
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
   * Set file
   *
   * @param \LGP\UserBundle\Entity\filePDF $file
   *
   * @return Diplome
   */
  public function setFile(File $file = null)
  {
    $this->file = $file;

    if ($file) {
      $this->updatedAt = new \DateTime('now');
    }

    return $this;
  }

  /**
   * Get file
   *
   * @return \LGP\UserBundle\Entity\filePDF
   */
  public function getFile()
  {
    return $this->file;
  }

  /**
   * Set fileName
   *
   * @param string $fileName
   *
   * @return Diplome
   */
  public function setFileName($filename)
  {
    $this->fileName = $filename;

    return $this;
  }

  /**
   * Get fileName
   *
   * @return string
   */
  public function getFileName()
  {
    return $this->fileName;
  }

  /**
   * @return string
   */
  public function getWebPath()
  {
    return 'uploads/diplomes/' . $this->getFileName();
  }

  /**
   * Set updatedAt
   *
   * @param \DateTime $updatedAt
   *
   * @return Diplome
   */
  public function setUpdatedAt($updatedAt)
  {
    $this->updatedAt = $updatedAt;

    return $this;
  }

  /**
   * Get updatedAt
   *
   * @return \DateTime
   */
  public function getUpdatedAt()
  {
    return $this->updatedAt;
  }

    /**
     * Set prof
     *
     * @param \LGP\UserBundle\Entity\Prof $prof
     *
     * @return Diplome
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
}
