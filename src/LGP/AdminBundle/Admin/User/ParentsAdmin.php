<?php

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class ParentsAdmin extends Admin
{

  protected $baseRoutePattern = 'user/parent';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('enabled', 'checkbox', array(
        'label'    => 'Activé',
        'required' => false
      ))
      ->add('image', \LGP\UserBundle\Form\ImageType::class, array(
        'required' => false,
        'required' => false
      ))
      ->add('nom', 'text', array(
        'required' => false
      ))
      ->add('prenoms', 'text', array(
        'required' => false
      ))
      ->add('dateNaissance', 'birthday', array(
        'years'       => range(1950, 2010),
        'placeholder' => '--',
        'required'    => false
      ))
      ->add('sexe', 'choice', array(
        'choices'     => array(
          'Masculin' => 'Masculin',
          'Féminin'  => 'Féminin'
        ),
        'placeholder' => '--',
        'required'    => false
      ))
      ->add('telephone', 'text', array(
        'required' => false
      ))
      ->add('pays', 'country', array(
        'placeholder' => '--',
        'required'    => false
      ));
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('nom')
      ->add('prenoms');
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->add('image', null, array(
        'label' => 'Image',
        'template' => 'LGPAdminBundle:ProfAdmin:list_image.html.twig'
      ))
      ->add('enabled', null, array(
        'label' => 'Activé'
      ))
      ->addIdentifier('nom')
      ->addIdentifier('prenoms', null, array(
        'label' => 'Prénoms'
      ))
      ->add('dateNaissance', null, array(
        'label' => 'Date de naissance'
      ))
      ->add('sexe')
      ->add('telephone', null, array(
        'label' => 'Téléphone'
      ))
      ->add('pays')
      ->add('dateInscription', null, array(
        'label' => 'Date d\'inscription'
      ));
  }

  public function toString($object)
  {
    return $object instanceof \LGP\UserBundle\Entity\Parents
      ? $object->getNom() . ' ' . $object->getPrenoms()
      : 'Parent'; // shown in the breadcrumb on the create view
  }
}
