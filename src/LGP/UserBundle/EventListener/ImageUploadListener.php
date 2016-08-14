<?php
namespace LGP\UserBundle\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use LGP\UserBundle\Uploader\ImageUploader;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

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
    $entity = $args->getEntity();
    $this->uploadImage($entity);
  }

  public function preUpdate(PreUpdateEventArgs $args)
  {
    $entity = $args->getEntity();
    $this->uploadImage($entity);
  }

  private function uploadImage($entity)
  {
    // Uploader uniquement l'image de l'entite User
    if (!$entity instanceof User)
    {
      return;
    }

    $photo = $entity->getPhoto();

    // Uploader uniqment les nouveaux fichiers
    if (!$photo instanceof UploadedFile)
    {
      return;
    }

    $fileName = $this->uploader->upload($photo);
    $entity->setPhoto($fileName);
  }
}
