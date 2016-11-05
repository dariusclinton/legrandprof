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
use Sonata\AdminBundle\Show\ShowMapper;


class CVFileAdmin extends Admin
{
  protected $baseRoutePattern = 'cv';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('file', 'file')
      ->add('fileName', 'text')
      ->add('updatedAt', 'date')
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('fileName')
      ->add('updatedAt')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('fileName', null, array(
        'label' => 'Nom du fichier'
      ))
      ->addIdentifier('updatedAt', 'datetime', array(
        'label' => 'Dernière mise à jour',
        'format' => 'd/m/Y'
      ))
      ->add('Fichier', null, array(
        'template' => 'LGPAdminBundle:CVFileAdmin:list_cv.html.twig'
      ))
    ;
  }

  protected function configureShowFields(ShowMapper $showMapper) {
    $showMapper
      ->add('fileName')
      ->add('updatedAt', 'datetime', array(
         'label' => 'Dernière mise à jour',
        'format' => 'd/m/Y'
      ))
      ->add('Fichier', null, array(
        'template' => 'LGPAdminBundle:CVFileAdmin:list_cv.html.twig'
      ))
    ;
  }


  public function toString($object)
  {
    return 'CV'; // shown in the breadcrumb on the create view
  }
}