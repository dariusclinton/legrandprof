<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 06/10/16
 * Time: 10:15
 */

namespace LGP\AdminBundle\Admin\Course;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnseignementAdmin extends Admin
{
  protected $baseRoutePattern = 'Enseignement';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('classe', 'text', array(
        'required' => false
      ))
      ->add('prix', 'text', array(
        'required' => false,
        'label' => 'Prix (FCFA)'
      ))
      ->add('cours', 'sonata_type_model', array(
        'class' => 'LGPCourseBundle:Cours',
        'property' => 'intitule'
      ))
      ->add('prof', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:Prof',
        'property' => 'affichage'
      ));
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('classe')
      ->add('prix');
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('classe')
      ->addIdentifier('prix', null, array(
        'label' => 'Prix (FCFA)'
      ))
      ->add('cours', null, array(
        'associated_property' => 'intitule',
        'label' => 'Intitulé'
      ))
      ->add('prof', null, array(
        'associated_property' => 'affichage',
        'label' => 'Prof'
      ));
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('classe')
      ->add('prix')
      ->add('cours', null, array(
        'associated_property' => 'intitule',
        'label' => 'Intitulé'
      ))
      ->add('prof', null, array(
        'associated_property' => 'affichage',
        'label' => 'Prof'
      ))
      ->add('reservationEnseignements', null, array(
        'associated_property' => 'id'
      ))
    ;
  }

  public function toString($object)
  {
    return 'Enseignement'; // shown in the breadcrumb on the create view
  }
}