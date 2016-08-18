<?php
namespace LGP\UserBundle\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use LGP\UserBundle\Uploader\ImageUploader;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use LGP\UserBundle\Entity\User;

class ImageUploadListener
{
  // Repertoire dans lequel seront stocquees les images
  private $uploader;

  public function __construct(ImageUploader $uploader)
  {
    $this->uploader = $uploader;
  }

  public function prePersist(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();
    $this->uploadImage($entity);
  }

  public function preUpdate(PreUpdateEventArgs $args)
  {
    $entity = $args->getObject();
    $this->uploadImage($entity);
  }

  private function uploadImage($entity)
  {
    // Si l'entite n'est pas de type User
    if (!$entity instanceof User)
    {
      return;
    }

    $file = $entity->getFile();

    // Uploader uniqment les nouveaux fichiers
    if (!$file instanceof UploadedFile)
    {
      return;
    }

    $fileName = $this->uploader->upload($file);
    $entity->setPhoto($fileName);
  }
}
