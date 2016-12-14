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


class HoraireAdmin extends Admin
{
  protected $baseRoutePattern = 'horaire';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('debut', 'time')
      ->add('fin', 'time')
      ->add('jour', 'choice', array(
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
      ->add('debut')
      ->add('fin')
      ->add('jour')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('debut')
      ->addIdentifier('fin')
      ->addIdentifier('jour')
    ;
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('debut', 'time')
      ->add('fin', 'time')
    ;
  }


  public function toString($object)
  {
    return 'Horaire'; // shown in the breadcrumb on the create view
  }
}