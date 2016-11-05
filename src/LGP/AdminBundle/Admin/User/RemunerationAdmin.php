<?php

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of RemunerationAdmin
 *
 * @author tsafack
 */
class RemunerationAdmin extends Admin {
  
  protected $baseRoutePattern = 'remunerations';
  
  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
        ->add('montant', 'text')
        ->add('modePaiement', 'choice', array(
          'choices'     => array(
            'Express Union'    => 'Express Union',
            'Orange Money'     => 'Orange Money',
            'MTN Mobile Money' => 'MTN Mobile Money',
            'Visa'             => 'Visa',
            'Carte Bancaire'   => 'Carte Bancaire',
          ),
          'placeholder' => '--'
        ))
        ->add('prof', 'sonata_type_model', array(
          'class'   => 'LGPUserBundle:Prof',
          'property' => 'affichage'
        ))
      ;
  }
  
  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
        ->add('modePaiement')
        ->add('montant')
      ;
  }
  
  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
        ->addIdentifier('prof.affichage', null, array('label' => 'Prof'))
        ->add('montant')
        ->add('modePaiement')
      ;
  }
  
  
  public function toString($object)
  {
    return 'Rémunération'; // shown in the breadcrumb on the create view
  }
}
