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


class HoraireAdmin extends Admin
{
  protected $baseRoutePattern = 'horaire';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('debut', 'time')
      ->add('fin', 'time')
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('debut')
      ->add('fin')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('debut')
      ->addIdentifier('fin')
    ;
  }


  public function toString($object)
  {
    return 'Horaire'; // shown in the breadcrumb on the create view
  }
}