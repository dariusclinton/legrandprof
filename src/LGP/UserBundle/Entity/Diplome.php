<?php

namespace LGP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Diplome
 *
 * @ORM\Table(name="lgp_diplome")
 * @ORM\Entity(repositoryClass="LGP\UserBundle\Repository\DiplomeRepository")
 * @ORM\HasLifecycleCallbacks
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
     * @var string
     * 
     * @ORM\Column(name="url", type="string", length=255) 
     */
    private $url;
    
    /**
     * @var UploadedFile
     * @Assert\File(mimeTypes={"application/pdf"})
     */
    private $file;
    
    private $tmpFilename;


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
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
        
      if (null !== $this->url) {
        $this->tmpFilename = $this->url;
        
        $this->url = null;
      }
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
     * Set url
     *
     * @param string $url
     *
     * @return Diplome
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
      if (null === $this->file) {
        return;
      }
      
      $this->url = $this->file->guessExtension();
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
      if (null === $this->file) {
        return;
      }
      
      if (null !== $this->tmpFilename) {
        $oldFile = $this->getUploadRootDir().'/'.$this->getId().'.'.$this->tmpFilename;
        
        if (file_exists($oldFile)) {
          unlink($oldFile);
        }
      }
      
      $this->file->move($this->getUploadRootDir(), $this->getId().'.'.$this->url);
    }
    
    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
      // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
      $this->tmpFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
      if (file_exists($this->tmpFilename)) {
        unlink($this->tmpFilename);
      }
    }
    
    public function getUploadDir() {
     return 'uploads/diplomes';
    }
    
    public function getUploadRootDir() {
      return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    public function getWebPath() {
      return $this->getUploadDir() . '/' . $this->getId() . '.' . $this->getUrl();
    }

}
