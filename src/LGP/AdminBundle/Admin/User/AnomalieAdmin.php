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


class AnomalieAdmin extends Admin
{
  protected $baseRoutePattern = 'anomalie';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('objet', 'text')
      ->add('contenu', 'textarea')
      ->add('datePublication', 'date')
      ->add('user', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:User',
        'property' => 'affichage'
      ))
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('datePublication')
      ->add('user.nom')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('datePublication', 'datetime', array(
        'format' => 'd/m/Y'
      ))
      ->addIdentifier('objet')
      ->add('user', null, array(
        'label' => 'Utilisateur',
        'associated_property' => 'affichage'
      ))
      ->add('contenu')
    ;
  }

  protected function configureShowFields(ShowMapper $showMapper) {
    $showMapper
      ->add('objet', 'text')
      ->add('contenu', 'textarea')
      ->add('datePublication', 'datetime', array(
        'format' => 'd/m/Y'
      ))
      ->add('user', null, array(
        'associated_property' => 'affichage'
      ))
      ;
  }

  public function toString($object)
  {
    return 'Anomalie'; // shown in the breadcrumb on the create view
  }
}