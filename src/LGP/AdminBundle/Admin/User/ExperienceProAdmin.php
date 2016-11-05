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
use Sonata\AdminBundle\Show\ShowMapper;


class ExperienceProAdmin extends Admin
{
  protected $baseRoutePattern = 'experience-pro';

  protected function configureFormFields(FormMapper $formMapper) {
    $formMapper
      ->add('prof', 'sonata_type_model', array(
        'class' => 'LGPUserBundle:Prof',
        'property' => 'affichage'
      ))
      ->add('etablissement', 'text')
      ->add('poste', 'text')
      ->add('dateDebut', 'date')
      ->add('dateFin', 'date')
      ->add('description', 'textarea')
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
    $datagridMapper
      ->add('prof.nom')
      ->add('etablissement')
      ->add('poste')
      ->add('dateDebut')
      ->add('dateFin')
    ;
  }

  protected function configureListFields(ListMapper $listMapper) {
    $listMapper
      ->addIdentifier('etablissement')
      ->addIdentifier('poste')
      ->add('prof', null, array(
        'label' => 'Prof',
        'associated_property' => 'affichage'
      ))
      ->add('dateDebut', 'datetime', array(
        'label' => 'Date de début',
        'format' => 'd/m/Y'
      ))
      ->add('dateFin', 'datetime', array(
        'label' => 'Date de fin',
        'format' => 'd/m/Y'
      ))
      ->add('description')
    ;
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('prof', null, array(
        'associated_property' => 'affichage'
      ))
      ->add('etablissement')
      ->add('poste')
      ->add('dateDebut', 'datetime', array(
        'label' => 'Date de début',
        'format' => 'd/m/Y'
      ))
      ->add('dateFin', 'datetime', array(
        'label' => 'Date de fin',
        'format' => 'd/m/Y'
      ))
      ->add('description')
      ;
  }

  public function toString($object)
  {
    return 'Expérience professionnelle'; // shown in the breadcrumb on the create view
  }
}