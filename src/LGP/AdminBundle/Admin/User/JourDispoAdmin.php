<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 28/10/16
 * Time: 11:42
 */

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class JourDispoAdmin extends Admin
{
  protected $baseRoutePattern = 'jour-dispo';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('intitule', 'choice', array(
        'choices' => array(
          'Lundi' => 'Lundi',
          'Mardi' => 'Mardi',
          'Mercredi' => 'Mercredi',
          'Jeudi' => 'Jeudi',
          'Vendredi' => 'Vendredi',
          'Samedi' => 'Samedi',
          'Dimanche' => 'Dimanche',
        ),
        'placeholder' => 'jour'
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
    return 'JourDispo'; // shown in the breadcrumb on the create view
  }
}