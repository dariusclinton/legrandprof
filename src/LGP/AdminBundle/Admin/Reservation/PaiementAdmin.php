<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 06/10/16
 * Time: 10:31
 */

namespace LGP\AdminBundle\Admin\Reservation;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PaiementAdmin extends Admin
{
  protected $baseRoutePattern = 'paiement';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('mode', 'choice', array(
        'choices'     => array(
          'Express Union'    => 'Express Union',
          'Orange Money'     => 'Orange Money',
          'MTN Mobile Money' => 'MTN Mobile Money',
          'Visa'             => 'Visa',
          'Carte Bancaire'   => 'Carte Bancaire',
        ),
        'placeholder' => '--',
      ))
      ->add('date', 'date', array(
        'required' => false
      ))
      ->add('facture', 'sonata_type_model', array(
        'class'    => 'LGPReservationBundle:Facture',
        'property' => 'montant',
      ))
      ->add('user', 'sonata_type_model', array(
        'class'    => 'LGPUserBundle:User',
        'property' => 'affichage',
      ));
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('mode')
      ->add('date')
      ->add('user.nom')
    ;
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('mode', null, array('label' => 'Mode de paiement'))
      ->addIdentifier('date', 'date', array(
        'label' => 'Date de Paiement',
        'format' => 'd/m/Y'
      ))
      ->add('facture', null, array(
        'associated_property' => 'montant',
      ))
      ->add('user', null, array(
        'associated_property' => 'affichage',
      ))
    ;
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('mode')
      ->add('date', 'datetime', array(
        'format' => 'd/m/Y',
        'label' => 'Date de paiement'
      ))
      ->add('facture', null, array(
        'associated_property' => 'montant',
      ))
      ->add('user', null, array(
        'associated_property' => 'affichage',
      ));
  }


  public function toString($object)
  {
    return 'Paiement'; // shown in the breadcrumb on the create view
  }
}