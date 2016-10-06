<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 06/10/16
 * Time: 07:25
 */

namespace LGP\AdminBundle\Admin\Reservation;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class JourDeCoursAdmin extends Admin
{
  protected $baseRoutePattern = 'JourDeCours';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('intitule', 'choice', array(
        'choices'     => array(
          'Lundi'    => 'Lundi',
          'Mardi'    => 'Mardi',
          'Mercredi' => 'Mercredi',
          'Jeudi'    => 'Jeudi',
          'Vendredi' => 'Vendredi',
          'Samedi'   => 'Samedi',
          'Dimanche' => 'Dimanche',
        ),
        'placeholder' => '--'
      ))
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('intitule')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('intitule')
      ;
  }


  public function toString($object)
  {
    return 'JourDeCours';
  }
}