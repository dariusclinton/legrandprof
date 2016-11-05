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


class NouvelleCategorieCoursAdmin extends Admin
{
  protected $baseRoutePattern = 'nouvelle-categorie-cours';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('intitule', 'text')
      ->add('description', 'textarea')
      ->add('dateProposition', 'date')
      ->add('user', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:User',
        'property' => 'affichage'
      ))
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('intitule')
      ->add('user.nom')
      ->add('dateProposition')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('intitule')
      ->addIdentifier('dateProposition')
      ->add('user', null, array(
        'label' => 'Utilisateur',
        'associated_property' => 'affichage'
      ))
      ->add('description')
    ;
  }


  public function toString($object)
  {
    return 'Nouvelle catégorie de cours'; // shown in the breadcrumb on the create view
  }
}