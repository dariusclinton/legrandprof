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

class EntreeProgrammeAdmin extends Admin
{
  protected $baseRoutePattern = 'Entree-programme';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('partie', 'text')
      ->add('intitule', 'text')
      ->add('type', 'text')
      ->add('isComplete', 'checkbox')
      ->add('programmeDeCours', 'sonata_type_model', array(
        'class' => 'LGPCourseBundle:ProgrammeDeCours',
        'property' => 'id'
      ));
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('partie')
      ->add('intitule')
      ->add('type')
      ->add('isComplete')
    ;
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('intitule')
      ->addIdentifier('partie')
      ->addIdentifier('type')
      ->add('isComplete')
      ->add('programmeDeCours', null, array(
        'label' => 'Programme du cours',
        'associated_property' => 'id'
      ))
    ;
  }


  public function toString($object)
  {
    return 'Entrée du programme'; // shown in the breadcrumb on the create view
  }
}