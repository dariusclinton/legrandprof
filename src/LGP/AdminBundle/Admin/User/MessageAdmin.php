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

class MessageAdmin extends Admin
{
  protected $baseRoutePattern = 'message';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add()
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('intitule')
      ->add('ville')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('intitule')
      ->add('ville')
    ;
  }


  public function toString($object)
  {
    return 'Message'; // shown in the breadcrumb on the create view
  }
}