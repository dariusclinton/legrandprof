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


class DiplomeAdmin extends Admin
{
  protected $baseRoutePattern = 'diplome';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('file', 'file')
      ->add('intitule', 'text')
      ->add('fileName', 'text')
      ->add('updatedAt', 'date')
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('intitule')
      ->add('updatedAt')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('intitule')
      ->addIdentifier('fileName')
      ->add('updatedAt')
      ->add('Fichier', null, array(
        'template' => 'LGPAdminBundle:DiplomeAdmin:list_diplomes.html.twig'
      ))
    ;
  }


  public function toString($object)
  {
    return 'Diplome'; // shown in the breadcrumb on the create view
  }
}