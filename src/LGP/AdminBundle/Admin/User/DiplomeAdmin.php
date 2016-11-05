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
      ->addIdentifier('intitule', null, array(
        'label' => 'Intitulé'
      ))
      ->addIdentifier('fileName', null, array(
        'label' => 'Nom du fichier'
      ))
      ->add('updatedAt', 'datetime', array(
        'label' => 'Dernière mise à jour',
        'format' => 'd/m/Y'
      ))
      ->add('Fichier', null, array(
        'template' => 'LGPAdminBundle:DiplomeAdmin:list_diplomes.html.twig'
      ))
    ;
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('intitule', null, array(
        'label' => 'Intitulé'
      ))
      ->add('fileName', null, array(
        'label' => 'Nom du fichier'
      ))
      ->add('updatedAt', 'datetime', array(
        'label' => 'Dernière mise à jour',
        'format' => 'd/m/Y'
      ))
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