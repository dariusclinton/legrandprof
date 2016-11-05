<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 29/09/16
 * Time: 08:14
 */

namespace LGP\AdminBundle\Admin\Course;

use LGP\CourseBundle\Form\ImageCourseType;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CourseAdmin extends Admin
{
  protected $baseRoutePattern = 'Cours';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('intitule', 'text')
      ->add('description', 'textarea', array(
        'required' => false
      ))
      ->add('categorie', 'sonata_type_model', array(
        'class' => 'LGPCourseBundle:Categorie',
        'property' => 'intitule'
      ))
      ->add('image', ImageCourseType::class, array(
        'required' => false
      ));
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('intitule')
      ->add('categorie.intitule');
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('intitule', null, array(
        'label' => 'Intitulé'
      ))
      ->add('categorie.intitule', null, array(
        'label' => 'Catégorie'
      ))
      ->add('description');
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('intitule', null, array(
        'label' => 'Intitulé'
      ))
      ->add('categorie.intitule', null, array(
        'label' => 'Catégorie'
      ))
      ->add('description')
    ;
  }


  public function toString($object)
  {
    return 'Cours'; // shown in the breadcrumb on the create view
  }
}