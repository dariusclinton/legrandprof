<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 25/10/16
 * Time: 23:40
 */

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MessageAdmin extends Admin
{
  protected $baseRoutePattern = 'message';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('expediteur', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:User',
        'property' => 'affichage',
      ))
      ->add('recepteur', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:User',
        'property' => 'affichage',
      ))
      ->add('objet', 'text')
      ->add('contenu', 'textarea')
      ->add('dateEnvoi', 'date')
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('expediteur.nom')
      ->add('recepteur.nom')
      ->add('dateEnvoi')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('objet')
      ->add('expediteur', null, array(
        'label' => 'Expéditeur',
        'associated_property' => 'affichage'
      ))
      ->add('recepteur', null, array(
        'label' => 'Récepteur',
        'associated_property' => 'affichage'
      ))
      ->add('contenu')
      ->add('dateEnvoi', 'datetime', array(
        'label' => 'Date d\'envoi',
        'format' => 'd/m/Y'
      ))
    ;
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('objet')
      ->add('expediteur', null, array(
        'label' => 'Expéditeur',
        'associated_property' => 'affichage'
      ))
      ->add('recepteur', null, array(
        'label' => 'Récepteur',
        'associated_property' => 'affichage'
      ))
      ->add('contenu')
      ->add('dateEnvoi', 'datetime', array(
        'label' => 'Date d\'envoi',
        'format' => 'd/m/Y'
      ))
      ;
  }

  public function toString($object)
  {
    return 'Message'; // shown in the breadcrumb on the create view
  }
}