<?php

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class ProfAdmin extends Admin
{

  protected $baseRoutePattern = 'user/prof';

  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('enabled', 'checkbox', array(
        'label'    => 'Activé',
        'required' => false
      ))
      ->add('isRecommande', 'checkbox', array(
        'label'    => 'Recommandé',
        'required' => false
      ))
      ->add('image', \LGP\UserBundle\Form\ImageType::class, array(
        'required' => false
      ))
      ->add('nom', 'text')
      ->add('prenoms', 'text', array(
        'required' => false
      ))
      ->add('dateNaissance', 'birthday', array(
        'years'       => range(1950, 2010),
        'placeholder' => '--',
        'required'    => false
      ))
      ->add('sexe', 'choice', array(
        'choices' => array(
          'Masculin' => 'Masculin',
          'Féminin' => 'Féminin'
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('pays', 'country', array(
        'required' => false
      ))
      ->add('ville', 'choice', array(
        'choices' => array(
          'Douala' => 'Douala',
          'Yaoundé' => 'Yaoundé',
          'Bamenda' => 'Bamenda',
          'Dschang' => 'Dschang',
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('boitePostale', 'text', array(
        'required' => false
      ))
      ->add('situationMatrimoniale', 'choice', array(
        'choices' => array(
          'Célibataire' => 'Célibataire',
          'Marié(e)' => 'Marié(e)',
          'Divorcé(e)' => 'Divorcé(e)'
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('nombreEnfants', 'text', array(
        'required' => false
      ))
      ->add('niveauScolaire', 'choice', array(
        'choices' => array(
          'Bacc' => 'Bacc',
          'Bacc + 1' => 'Bacc_1',
          'Bacc + 2' => 'Bacc_2',
          'Licence' => 'Licence'
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('profession', 'choice', array(
        'choices' => array(
          'Etudiant' => 'Etudiant',
          'PLEG' => 'PLEG'
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('presentation', 'textarea', array(
        'required' => false
      ))
      ->add('CVFile', \LGP\UserBundle\Form\CVFileType::class, array(
        'required' => false
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
      ->add('isRecommande', null, array(
        'label' => 'Recommandé'
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
      ))
      ->add('ville')
      ->add('boitePostale')
      ->add('situationMatrimoniale')
      ->add('niveauScolaire')
      ->add('nombreEnfants', null, array(
        'label' => 'Nombre d\'enfants'
      ))
      ->add('profession')
      ->add('CVFile', null, array(
        'label' => 'CV',
        'template' => 'LGPAdminBundle:ProfAdmin:list_cv.html.twig'
      ))
      ->add('quartierCibles', null, array(
        'associated_property' => 'affichage'
      ))
      ->add('enseignements', null, array(
        'associated_property' => 'affichage'
      ))
      ->add('diplomes', null, array(
        'template' => 'LGPAdminBundle:ProfAdmin:list_diplomes.html.twig'
      ));
  }

  public function toString($object)
  {
    return $object instanceof \LGP\UserBundle\Entity\Prof
      ? $object->getNom() . ' ' . $object->getPrenoms()
      : 'Prof'; // shown in the breadcrumb on the create view
  }
}
