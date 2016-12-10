<?php

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


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
        'label' => 'Photo de profil',
        'required' => false
      ))
      ->add('nom', 'text')
      ->add('prenoms', 'text', array(
        'label' => 'Prénoms',
        'required' => false
      ))
      ->add('email', 'email')
      ->add('dateNaissance', 'birthday', array(
        'years'       => range(1950, 2010),
        'placeholder' => '--',
        'required'    => false,
        'label' => 'Date de naissance'
      ))
      ->add('sexe', 'choice', array(
        'choices' => array(
          'Masculin' => 'Masculin',
          'Féminin' => 'Feminin'
        ),
        'placeholder' => '--',
      ))
      ->add('pays', 'country', array(
      ))
      ->add('ville', 'choice', array(
        'choices' => array(
          'Douala' => 'Douala',
          'Yaoundé' => 'Yaounde',
          'Bamenda' => 'Bamenda',
          'Buéa' => 'Buea',
          'Dschang' => 'Dschang',
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('telephone', 'text', array(
        'required' => false,
        'label' => 'Téléphone'
      ))
      ->add('boitePostale', 'text', array(
        'required' => false
      ))
      ->add('situationMatrimoniale', 'choice', array(
        'choices' => array(
          'Célibataire' => 'Celibataire',
          'Marié(e)' => 'Marie(e)',
          'Divorcé(e)' => 'Divorce(e)'
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('nombreEnfants', 'text', array(
        'required' => false,
        'label' => 'Nombre d\'enfants'
      ))
      ->add('niveauScolaire', 'choice', array(
        'choices' => array(
          'Bacc'     => 'Bacc',
          'Bacc + 1' => 'Bacc+1',
          'Bacc + 2' => 'Bacc+2',
          'Licence'  => 'Licence',
          'Master I' => 'Master I',
          'Master II' => 'Master II',
          'Doctorant' => 'Doctorant'
        ),
        'placeholder' => '--',
        'required' => false,
        'label' => 'Niveau scolaire'
      ))
      ->add('profession', 'choice', array(
        'choices' => array(
          'Etudiant' => 'Etudiant',
          'Professeur de Lycée' => 'Professeur de Lycee',
          'Instituteur' => 'Instituteur',
        ),
        'placeholder' => '--',
        'required' => false
      ))
      ->add('presentation', 'textarea', array(
        'required' => false,
        'label' => 'Présentation'
      ))
      ->add('quartierCibles', 'sonata_type_model', array(
        'label' => 'Quartiers dans lesquels vous pouvez donner cours',
        'required' => false,
        'class' => 'LGPUserBundle:Quartier',
        'property' => 'affichage',
        'multiple' => true,
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
      ->add('prenoms')
      ->add('dateNaissance')
      ->add('sexe')
      ->add('pays')
      ->add('dateInscription')
      ->add('ville')
    ;
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
      ->add('isRecommande', 'boolean', array(
        'label' => 'Recommandé ?',
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
      ->add('email')
      ->add('sexe')
      ->add('telephone', null, array(
        'label' => 'Téléphone'
      ))
      ->add('pays')
      ->add('dateInscription', 'datetime', array(
        'label' => 'Date d\'inscription',
        'format' => 'd/m/Y'
      ))
      ->add('ville')
      ->add('boitePostale')
      ->add('situationMatrimoniale')
      ->add('niveauScolaire')
      ->add('nombreEnfants', null, array(
        'label' => 'Nombre d\'enfants'
      ))
      ->add('profession')
//      ->add('CVFile', null, array(
//        'label' => 'CV',
//        'template' => 'LGPAdminBundle:ProfAdmin:list_cv.html.twig'
//      ))
//      ->add('quartierCibles', null, array(
//        'associated_property' => 'affichage'
//      ))
//      ->add('enseignements', null, array(
//        'associated_property' => 'affichage'
//      ))
//      ->add('diplomes', null, array(
//        'template' => 'LGPAdminBundle:ProfAdmin:list_diplomes.html.twig'
//      ))
    ;
  }


  protected function configureShowFields(ShowMapper $showMapper) {
    $showMapper
      ->add('image', null, array(
        'label' => 'Image',
        'template' => 'LGPAdminBundle:ProfAdmin:list_image.html.twig'
      ))
      ->add('enabled', null, array(
        'label' => 'Activé ?',
      ))
      ->add('isRecommande', null, array(
        'label' => 'Recommandé ?',
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
      ->add('pays')
      ->add('dateInscription', 'datetime', array(
        'label' => 'Date d\'inscription',
        'format' => 'd/m/Y'
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
      ))
      ->add('presentation')
    ;
  }

  public function toString($object)
  {
    return $object instanceof \LGP\UserBundle\Entity\Prof
      ? $object->getNom() . ' ' . $object->getPrenoms()
      : 'Prof'; // shown in the breadcrumb on the create view
  }
}
