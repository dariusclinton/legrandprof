<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 06/10/16
 * Time: 12:09
 */

namespace LGP\AdminBundle\Admin\Reservation;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ReservationEnseignementAdmin extends Admin
{
  protected $baseRoutePattern = 'reservation-enseignement';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('isFinish', 'checkbox', array(
        'required' => false,
        'label'    => 'Achevé ?'
      ))
      ->add('lieuDeCours', 'choice', array(
        'choices'     => array(),
        'placeholder' => '--',
        'required'    => false
      ))
      ->add('dateDebut', 'date', array(
        'placeholder' => '--',
        'required'    => false
      ))
      ->add('nbApprenants', 'text', array(
        'required' => false
      ))
      ->add('ville', 'choice', array(
        'choices'     => array(),
        'placeholder' => '--',
        'required'     => false
      ))
      ->add('quartier', 'choice', array(
        'choices'     => array(),
        'placeholder' => '--',
        'required'     => false
      ))
      ->add('joursDeCours', 'sonata_type_model', array(
        'class'   => 'LGPReservationBundle:JourDeCours',
        'property' => 'intitule',
        'multiple' => true,
        'expanded' => true,
        'required' => false
      ))
      ->add('programmeDecours', 'sonata_type_model', array(
        'class'   => 'LGPCourseBundle:ProgrammeDeCours',
        'property' => 'id'
      ))
      ->add('reservation', 'sonata_type_model', array(
        'class'   => 'LGPReservationBundle:Reservation',
        'property' => 'id'
      ))
      ->add('enseignement', 'sonata_type_model', array(
        'class'   => 'LGPCourseBundle:Enseignement',
        'property' => 'affichage'
      ))
      ->add('enseignement.prof', 'sonata_type_model', array(
        'class'   => 'LGPUserBundle:Prof',
        'property' => 'affichage'
      ))
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('dateDebut')
      ->add('ville')
      ->add('quartier')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->add('isFinish')
      ->addIdentifier('lieuDeCours')
      ->addIdentifier('dateDebut')
      ->add('nbApprenants')
      ->add('ville')
      ->add('quartier')
      ->add('joursDeCours', null, array(
        'label'                => 'Jours de cours',
        'associated_property' => 'intitule'
      ))
      ->add('programmeDeCours', null, array(
        'label'                => 'Programme de cours',
        'associated_property' => 'id'
      ))
      ->add('reservation', null, array(
        'label'                => 'Réservation',
        'associated_property' => 'id'
      ))
      ->add('enseignement', null, array(
        'label'                => 'Enseignement',
        'associated_property' => 'affichage'
      ))
      ->add('enseignement.prof', null, array(
        'label'                => 'Prof',
        'associated_property' => 'affichage'
      ))
    ;
  }


  public function toString($object)
  {
    return 'RéservationEnseignement'; // shown in the breadcrumb on the create view
  }
}