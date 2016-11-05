<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 29/09/16
 * Time: 07:22
 */

namespace LGP\AdminBundle\Admin\Course;

use LGP\CourseBundle\Form\ImageCategorieType;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EvaluationAdmin extends Admin
{
  protected $baseRoutePattern = 'evaluation';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('date', 'date')
      ->add('duree', 'text', array('label' => 'Durée (heures)'))
      ->add('reservationEnseignement', 'sonata_type_model', array(
        'class' => 'LGPReservationBundle:ReservationEnseignement',
        'property' => 'id'
      ))
      ->add('prof', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:Prof',
        'property' => 'affichage'
      ))
      ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('date')
      ->add('prof.nom')
    ;
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('date', 'datetime', array(
        'format' => 'd/m/Y'
      ))
      ->addIdentifier('duree', null, array('label' => 'Durée (heures)'))
      ->add('reservationEnseignement', null, array(
        'associated_property' => 'id'
      ))
      ->add('prof', null, array(
        'associated_property' => 'affichage'
      ))
    ;
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('date', 'datetime', array(
        'format' => 'd/m/Y'
      ))
      ->add('duree', 'text', array('label' => 'Durée (heures)'))
      ->add('reservationEnseignement', null, array(
        'associated_property' => 'id'
      ))
      ->add('prof', null, array(
        'associated_property' => 'affichage'
      ))
      ;
  }


  public function toString($object)
  {
    return 'Evaluation'; // shown in the breadcrumb on the create view
  }
}