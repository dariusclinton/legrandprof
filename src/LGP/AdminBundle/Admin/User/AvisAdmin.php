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


class AvisAdmin extends Admin
{
  protected $baseRoutePattern = 'avis';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('user', 'sonata_type_model', array(
        'label' => 'Utilisateur',
        'class' => 'LGPUserBundle:User',
        'property' => 'affichage',
      ))
      ->add('prof', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:Prof',
        'property' => 'affichage',
      ))
      ->add('note', 'text', array(
        'label' => 'Note /5'
      ))
      ->add('dateAvis', 'date', array(
        'label' => "Date de publication de l'avis"
      ))
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('note')
      ->add('dateAvis')
      ->add('user.nom')
      ->add('prof.nom')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('note', null, array(
        'label' => 'Note /5'
      ))
      ->addIdentifier('dateAvis')
      ->add('user', null, array(
        'label' => 'Utilisateur',
        'associated_property' => 'affichage'
      ))
      ->add('prof', null, array(
        'label' => 'Prof',
        'associated_property' => 'affichage'
      ))
    ;
  }


  public function toString($object)
  {
    return 'Avis'; // shown in the breadcrumb on the create view
  }
}