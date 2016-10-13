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

class ReservationAdmin extends Admin
{
  protected $baseRoutePattern = 'reservation';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('isValidee', 'checkbox', array(
        'required' => false,
        'label'    => 'Validée ?'
      ))
      ->add('frequencePaiement', 'choice', array(
        'choices' => array(
          'Hebdomadaire' => 'hebdomadaire',
          'Mensuelle' => 'mensuelle',
          'Trimestrielle' => 'trimestrielle',
          'Semestrielle' => 'semestrielle',
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('dateReservation', 'date', array(
        'required' => false
      ))
      ->add('factures', 'sonata_type_model', array(
        'class'    => 'LGPReservationBundle:Facture',
        'property' => 'montant',
        'multiple' => true,
        'expanded' => true,
        'required' => false
      ));
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('frequencePaiement')
      ->add('dateReservation');
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->add('isValidee', null, array('label' => 'Validée'))
      ->addIdentifier('dateReservation', null, array('label' => 'Date de réservation'))
      ->addIdentifier('frequencePaiement', null, array('label' => 'Fréquence de  paiement'))
      ->add('factures', null, array(
        'associated_property' => 'montant',
      ));
  }


  public function toString($object)
  {
    return 'Réservation'; // shown in the breadcrumb on the create view
  }
}