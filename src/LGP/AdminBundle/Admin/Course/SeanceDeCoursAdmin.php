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

class SeanceDeCoursAdmin extends Admin
{
  protected $baseRoutePattern = 'seances-de-cours';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('date', 'date')
      ->add('duree', 'text', array('label' => 'Durée (heures)'))
      ->add('prof', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:Prof',
        'property' => 'affichage'
      ))
      ->add('reservationEnseignement', 'sonata_type_model', array(
        'class' => 'LGPReservationBundle:ReservationEnseignement',
        'property' => 'id'
      ))
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('date')
      ->add('duree')
      ->add('prof.nom')
    ;
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('date')
      ->addIdentifier('duree', null, array('label' => 'Durée (heures)'))
      ->add('prof', null, array(
        'associated_property' => 'affichage'
      ))
      ->add('reservationEnseignement', null, array(
        'associated_property' => 'id'
      ))
    ;
  }


  public function toString($object)
  {
    return 'Séance de cours'; // shown in the breadcrumb on the create view
  }
}