<?php

namespace LGP\CourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class EntreeProgrammeType extends AbstractType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('partie', ChoiceType::class, array(
        'choices' => array(
          '1' => 1,
          '2' => 2,
          '3' => 3,
          '4' => 4,
          '5' => 5,
          '6' => 6,
          '7' => 7,
          '8' => 8,
          '9' => 9,
          '10' => 10,
        ),
        'placeholder' => '--',
        'attr' => array(
          'class' => 'form-control'
        )
      ))
      ->add('intitule', TextType::class, array(
        'label' => 'Intitulé',
        'attr' => array(
          'class' => 'form-control'
        )
      ))
      ->add('type', ChoiceType::class, array(
        'choices' => array(
          'Cours' => 'Cours',
          'Exercice' => 'Exercice',
        ),
        'placeholder' => '--',
        'attr' => array(
          'class' => 'form-control'
        )
      ))
      ->add('isComplete', CheckboxType::class, array(
        'required' => false,
      ));
  }

  /**
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'LGP\CourseBundle\Entity\EntreeProgramme'
    ));
  }
}
