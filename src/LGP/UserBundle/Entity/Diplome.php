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
     * @Assert\File(mimeTypes={"application/pdf"}, mimeTypesMessage="Uniquement les pdf sont valides")
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
    public function getWebPath() {
        return 'uploads/diplomes/' . $this->getFileName();
    }
}
