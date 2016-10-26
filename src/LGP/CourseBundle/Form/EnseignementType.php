<?php

namespace LGP\CourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EnseignementType extends AbstractType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('classe', ChoiceType::class, array(
        'choices' => array(
          'Primaire' => array(
            'SIL' => 'SIL',
            'CP' => 'CP',
            'CE1' => 'CE1',
            'CE2' => 'CE2',
            'CM1' => 'CM1',
            'CM2' => 'CM2',
          ),
          'Secondaire' => array(
            '6ème' => '6ème',
            '5ème' => '5ème',
            '4ème' => '4ème',
            '3ème' => '3ème',
            '2nd' => '2nd',
            '1ère' => '1ère',
            'Tle' => 'Tle',
          ),
          'Supérieur' => array(
            'Bacc + 1' => 'Bacc + 1',
            'Bacc + 2' => 'Bacc + 2',
            'Bacc + 3' => 'Bacc + 3',
            'Bacc + 4' => 'Bacc + 4',
            'Bacc + 5' => 'Bacc + 5',
          )
        ),
        'placeholder' => '--'
      ))
      ->add('prix', TextType::class)
      ->add('cours', EntityType::class, array(
        'class' => 'LGPCourseBundle:Cours',
        'choice_label' => 'intitule',
        'multiple' => false,
        'placeholder' => '--'
      ));
  }

  /**
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'LGP\CourseBundle\Entity\Enseignement'
    ));
  }
}
