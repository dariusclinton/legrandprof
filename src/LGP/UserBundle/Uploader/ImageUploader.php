<?php
namespace LGP\UserBundle\Uploader;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader
{
  // Repertoire dans lequel seront stocquees les images
  private $targetDir;

  public function __construct($targetDir)
  {
    $this->targetDir = $targetDir;
  }

  // Fonction d'upload
  public function upload(UploadedFile $file)
  {
    $fileName = md5(uniqid()).'.'.$file->gessExtension();

    $file->move($this->targetDir, $fileName);

    return $fileName;
  }
}
