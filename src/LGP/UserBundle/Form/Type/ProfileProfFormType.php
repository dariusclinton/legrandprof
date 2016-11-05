<?php

namespace LGP\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use LGP\UserBundle\Form\ExperienceProType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use LGP\UserBundle\Form\DiplomeType;
use LGP\UserBundle\Form\QuartierType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use LGP\UserBundle\Form\CVFileType;


class ProfileProfFormType extends AbstractType {
  
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
        ->add('ville', ChoiceType::class, array(
          'choices' => array(
            'Douala' => 'Douala',
            'Yaoundé' => 'Yaoundé',
            'Bafoussam' => 'Bafoussam',
            'Dschang' => 'Dschang',
          ),
          'required' => false,
          'placeholder' => '--'
        ))
        ->add('boitePostale', TextType::class, array(
          'required' => false
        ))
        ->add('situationMatrimoniale', ChoiceType::class, array(
          'choices'     => array(
            'Célibataire' => 'Célibataire',
            'Marié(e)'    => 'Marié(e)',
            'Divorcé(e)'  => 'Divorcé(e)'
          ),
          'placeholder' => '--',
          'required' => false
        ))
        ->add('niveauScolaire', ChoiceType::class, array(
          'choices'     => array(
            'Bacc'     => 'Bacc',
            'Bacc + 1' => 'Bacc_1',
            'Bacc + 2' => 'Bacc_2',
            'Licence'  => 'Licence'
          ),
          'placeholder' => '--',
          'required'    => false
        ))
        ->add('nombreEnfants', TextType::class, array(
          'required' => false
        ))
        ->add('presentation', TextareaType::class, array(
          'required' => false
        ))
        ->add('quartierCibles', EntityType::class, array(
          'class'        => 'LGPUserBundle:Quartier',
          'choice_label' => 'affichage',
          'expanded'     => true,
          'multiple'     => true
        ))
        ->add('profession', ChoiceType::class, array(
          'choices'     => array(
            'Etudiant'  => 'Etudiant',
            'PLEG'      => 'PLEG'
          ),
          'placeholder' => '--',
          'required'    => false
        ))
        ->add('diplomes', CollectionType::class, array(
          'entry_type'   => DiplomeType::class,
          'allow_add'    => true,
          'allow_delete' => true,
        ))
        ->add('experiencePros', CollectionType::class, array(
          'entry_type'   => ExperienceProType::class,
          'allow_add'    => true,
          'allow_delete' => true,
          'by_reference' => false
        ))
        ->add('CVFile', CVFileType::class)
       ;
  }
  
  public function getParent() {
    return 'LGP\UserBundle\Form\Type\ProfileType';
  }
  
  public function getBlockPrefix()
  {
      return 'lgp_prof_profile';
  }

  // For Symfony 2.x
  public function getName()
  {
      return $this->getBlockPrefix();
  }
}