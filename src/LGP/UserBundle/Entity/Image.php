<?php
namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table(name="lgp_image")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\ImageRepository")
 * @Vich\Uploadable
 */
class Image
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
   * @ORM\Column(type="datetime")
   *
   * @var \DateTime
   */
  private $updatedAt;

  /**
   * @Vich\UploadableField(mapping="user_image", fileNameProperty="imageName")
   * @Assert\Image(
   *  maxSize="5M",
   *  maxSizeMessage= "La taille maximum du fichier est {{ limit }} {{ suffix }}"
   * )
   * @var File
   */
  private $imageFile;

  /**
   * @ORM\Column(type="string", length=255)
   *
   * @var string
   */
  private $imageName;

  /**
   *
   * @return type
   */
  function getId()
  {
    return $this->id;
  }

  /**
   * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
   *
   * @return Image
   */
  public function setImageFile(File $image = null)
  {
    $this->imageFile = $image;

    if ($image) {
      // It is required that at least one field changes if you are using doctrine
      // otherwise the event listeners won't be called and the file is lost
      $this->updatedAt = new \DateTime('now');
    }

    return $this;
  }

  /**
   * @return File|null
   */
  public function getImageFile()
  {
    return $this->imageFile;
  }

  /**
   * @param string $imageName
   *
   * @return Product
   */
  public function setImageName($imageName)
  {
    $this->imageName = $imageName;
    return $this;
  }

  /**
   * @return string|null
   */
  public function getImageName()
  {
    return $this->imageName;
  }

  /**
   * @return string
   */
  public function getWebPath()
  {
    return 'uploads/profils/' . $this->getImageName();
  }

  /**
   * Set updatedAt
   *
   * @param \DateTime $updatedAt
   *
   * @return Image
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
}
