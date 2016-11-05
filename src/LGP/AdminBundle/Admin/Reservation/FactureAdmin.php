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

class FactureAdmin extends Admin
{
  protected $baseRoutePattern = 'facture';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('montant', 'text')
      ->add('fileName', 'text')
      ->add('reservation', 'sonata_type_model', array(
        'class'    => 'LGPReservationBundle:Reservation',
        'property' => 'id',
      ))
      ->add('paiement', 'sonata_type_model', array(
        'class'    => 'LGPReservationBundle:Paiement',
        'property' => 'id',
      ))
      ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('montant')
      ->add('fileName')
    ;
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('montant')
      ->addIdentifier('fileName', null, array('label' => 'Nom du fichier'))
      ->add('reservation', null, array(
        'associated_property' => 'id',
      ))
      ->add('paiement', null, array(
        'associated_property' => 'id',
      ))
    ;
  }


  public function toString($object)
  {
    return 'Facture'; // shown in the breadcrumb on the create view
  }
}