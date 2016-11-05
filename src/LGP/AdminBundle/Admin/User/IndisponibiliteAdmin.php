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


class IndisponibiliteAdmin extends Admin
{
  protected $baseRoutePattern = 'indisponibilite';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('dateDebut', 'date')
      ->add('dateFin', 'date')
      ->add('motif', 'textarea')
      ->add('prof', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:Prof',
        'property' => 'affichage'
      ))
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('dateDebut')
      ->add('dateFin')
      ->add('prof.nom')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('dateDebut', 'datetime', array(
        'label' => 'Date de début',
        'format' => 'd/m/Y'
      ))
      ->addIdentifier('dateFin', 'datetime', array(
        'label' => 'Date de fin',
        'format' => 'd/m/Y'
      ))
      ->add('prof', null, array(
        'label' => 'Prof',
        'associated_property' => 'affichage'
      ))
      ->add('motif')
    ;
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('dateDebut', 'datetime', array(
        'label' => 'Date de début',
        'format' => 'd/m/Y'
      ))
      ->add('dateFin', 'datetime', array(
        'label' => 'Date de fin',
        'format' => 'd/m/Y'
      ))
      ->add('motif')
      ->add('prof', null, array(
        'associated_property' => 'affichage'
      ))
    ;
  }


  public function toString($object)
  {
    return 'Indisponibilite'; // shown in the breadcrumb on the create view
  }
}