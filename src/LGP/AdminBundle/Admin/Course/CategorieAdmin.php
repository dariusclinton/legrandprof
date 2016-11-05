<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 29/09/16
 * Time: 07:22
 */

namespace LGP\AdminBundle\Admin\Course;

use LGP\CourseBundle\Form\ImageCategorieType;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CategorieAdmin extends Admin
{
  protected $baseRoutePattern = 'Categories-cours';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('intitule', 'text')
      ->add('description', 'textarea')
      ->add('image', ImageCategorieType::class);
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('intitule');
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('intitule', null, array(
        'label' => 'Intitulé'
      ))
      ->add('description');
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('intitule', null, array(
        'label' => 'Intitulé'
      ))
      ->add('description')
    ;
  }

  public function toString($object)
  {
    return 'CatégorieCours'; // shown in the breadcrumb on the create view
  }
}