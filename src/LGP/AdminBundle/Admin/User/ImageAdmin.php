<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 29/10/16
 * Time: 05:13
 */

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class ImageAdmin extends Admin
{
  protected $baseRoutePattern = 'image-profil';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('imageFile', 'file')
      ->add('imageName', 'text')
      ->add('updatedAt', 'date')
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('imageName')
      ->add('updatedAt')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('imageName')
      ->addIdentifier('updatedAt')
      ->add('Fichier', null, array(
        'template' => 'LGPAdminBundle:ImageAdmin:list_image.html.twig'
      ))
    ;
  }


  public function toString($object)
  {
    return 'Image de profil'; // shown in the breadcrumb on the create view
  }
}