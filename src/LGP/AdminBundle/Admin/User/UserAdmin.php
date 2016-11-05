<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 26/10/16
 * Time: 00:07
 */

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends Admin
{
  protected $baseRoutePattern = 'utilisateur';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('nom', 'text')
      ->add('prenoms', 'text')
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('nom')
      ->add('prenoms')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('prenoms', null, array(
        'label' => 'Prénoms'
      ))
      ->addIdentifier('nom')
      ->add('enabled', null, array(
        'label' => 'Activé ?'
      ))
    ;
  }

  protected function configureShowFields(ShowMapper $showMapper) {
    $showMapper
      ->add('nom')
      ->add('prenoms')
      ;
  }


  public function toString($object)
  {
    return 'Utilisateur'; // shown in the breadcrumb on the create view
  }
}