<?php

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


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
      ->add('nom', 'text')
      ->add('prenoms', 'text', array(
        'required' => false
      ))
      ->add('email', 'email')
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
        'placeholder' => '--'
      ))
      ->add('telephone', 'text', array(
        'required' => false,
        'label' => 'Téléphone'
      ))
      ->add('telephone2', 'text', array(
        'required' => false,
        'label' => 'Téléphone 2'
      ))
      ->add('pays', 'country', array(
        'placeholder' => '--'
      ))
      ->add('plainPassword', 'repeated', array(
        'type' => 'password',
        'options' => array('translation_domain' => 'FOSUserBundle'),
        'first_options' => array('label' => 'form.password'),
        'second_options' => array('label' => 'form.password_confirmation'),
        'invalid_message' => 'fos_user.password.mismatch',
      ))
    ;
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
      ->add('enabled', 'boolean', array(
        'label' => 'Activé ?',
        'editable' => true
      ))
      ->addIdentifier('nom')
      ->addIdentifier('prenoms', null, array(
        'label' => 'Prénoms'
      ))
      ->add('dateNaissance', 'datetime', array(
        'label' => 'Date de naissance',
        'format' => 'd/m/Y'
      ))
      ->add('sexe')
      ->add('telephone', null, array(
        'label' => 'Téléphone'
      ))
      ->add('telephone2', null, array(
        'label' => 'Téléphone 2'
      ))
      ->add('pays')
      ->add('dateInscription', 'datetime', array(
        'label' => 'Date d\'inscription',
        'format' => 'd/m/Y'
      ))
    ;
  }

  protected function configureShowFields(ShowMapper $show)
  {
    $show
      ->add('image', null, array(
        'label' => 'Image',
        'template' => 'LGPAdminBundle:ProfAdmin:list_image.html.twig'
      ))
      ->add('enabled', 'boolean', array(
        'label' => 'Activé ?',
        'editable' => true
      ))
      ->add('nom')
      ->add('prenoms', null, array(
        'label' => 'Prénoms'
      ))
      ->add('dateNaissance', 'datetime', array(
        'label' => 'Date de naissance',
        'format' => 'd/m/Y'
      ))
      ->add('sexe')
      ->add('telephone', null, array(
        'label' => 'Téléphone'
      ))
      ->add('telephone2', null, array(
        'label' => 'Téléphone 2'
      ))
      ->add('pays')
      ->add('dateInscription', 'datetime', array(
        'label' => 'Date d\'inscription',
        'format' => 'd/m/Y'
      ))
    ;
  }

  public function toString($object)
  {
    return $object instanceof \LGP\UserBundle\Entity\Parents
      ? $object->getNom() . ' ' . $object->getPrenoms()
      : 'Parent'; // shown in the breadcrumb on the create view
  }
}
