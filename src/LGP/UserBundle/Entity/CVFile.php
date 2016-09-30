<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * CVFile
 *
 * @ORM\Table(name="lgp_c_v_file")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\CVFileRepository")
 * @Vich\Uploadable
 */
class CVFile
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
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
     * @Vich\UploadableField(mapping="cv_file", fileNameProperty="fileName")
     * @Assert\File(mimeTypes={"application/pdf"}, mimeTypesMessage="Uniquement les pdf sont valides")
     * @var File
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="fileName", type="string", length=255, nullable=true)
     */
    private $fileName;

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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return CVFile
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CVFile
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
     * 
     * @return type
     */
    function getFile() {
      return $this->file;
    }

    /**
     * 
     * @param \LGP\UserBundle\Entity\File $file
     */
    function setFile(File $file) {
      $this->file = $file;
      
      if ($file) {
        $this->updatedAt = new \DateTime('now');
      }
      
      return $this;
    }

    /**
     * @return string
     */
    public function getWebPath() {
        return '../../../web/uploads/cv/' + $this->fileName;
    }
}
