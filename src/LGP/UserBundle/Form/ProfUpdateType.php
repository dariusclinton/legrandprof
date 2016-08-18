<?php


namespace LGP\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use LGP\UserBundle\Form\DiplomeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use LGP\UserBundle\Form\ExperienceProType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProfUpdateType extends ProfType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    parent::buildForm($builder, $options);

    $builder
        ->add('ville', TextType::class, array(
          'required' => false
        ))
        ->add('quartier', TextType::class, array(
          'required' => false
        ))
        ->add('boitePostale', TextType::class, array(
          'required' => false
        ))
        ->add('situationMatrimoniale', ChoiceType::class, array(
          'choices' => array(
            '--'          => '--',
            'Célibataire' => 'c',
            'Marié(e)'    => 'm',
            'Divorcé(e)'  => 'd'
          )
        ))
        ->add('niveauScolaire', ChoiceType::class, array(
          'choices' => array(
            '--'       => '--',
            'Bacc' => 'Bacc',
            'Bacc + 1' => 'Bacc_1',
            'Bacc + 2' => 'Bacc_2',
            'Licence'  => 'Licence'
          )
        ))
        ->add('nombreEnfants', TextType::class, array(
          'required' => false
        ))
        ->add('presentation', TextareaType::class, array(
          'required' => false
        ))
        ->add('profession', ChoiceType::class, array(
          'choices' => array(
            '--'       => '--',
            'Etudiant' => 'Etudiant',
            'PLEG'     => 'PLEG'
          )
        ))
        ->add('user', UserEditType::class, array(
          'required' => false
        ))
        ->add('experiencePros', CollectionType::class, array(
          'entry_type'   => ExperienceProType::class,
          'allow_add'    => true,
          'allow_delete' => true,
        ))
        ->add('diplomes', CollectionType::class, array(
          'entry_type'   => DiplomeType::class,
          'allow_add'    => true,
          'allow_delete' => true,
        ))
      ;
  }
}

 ?>
