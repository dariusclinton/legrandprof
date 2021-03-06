<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 06/10/16
 * Time: 10:56
 */

namespace LGP\AdminBundle\Admin\Course;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProgrammeDeCoursAdmin extends Admin
{
  protected $baseRoutePattern = 'programme-de-cours';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('reservationEnseignement', 'sonata_type_model', array(
        'class' => 'LGPReservationBundle:ReservationEnseignement',
        'property' => 'id',
        'required' => false
      ))
      ->add('entreesProgrammes', 'sonata_type_model', array(
        'class' => 'LGPCourseBundle:EntreeProgramme',
        'property' => 'intitule',
        'multiple' => true,
        'expanded' => true,
        'required' => false,
      ))
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
//    $datagridMapper
//      ->add('entreesProgramme.intitule');
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('id')
      ->add('reservationEnseignement', null, array(
        'associated_property' => 'id',
        'label' => 'Réservation Enseignement'
      ))
      ->add('entreesProgrammes', null, array(
        'associated_property' => 'intitule',
        'label' => 'Entrées du programme'
      ));
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('reservationEnseignement', null, array(
        'associated_property' => 'id',
        'label' => 'Réservation Enseignement'
      ))
      ->add('entreesProgrammes', null, array(
        'associated_property' => 'intitule',
        'label' => 'Entrées du programme'
      ))
      ;
  }


  public function toString($object)
  {
    return 'ProgrammeDeCours'; // shown in the breadcrumb on the create view
  }
}