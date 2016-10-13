<?php

namespace LGP\CourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SeanceDeCoursType extends AbstractType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('resume', TextareaType::class, array(
        'attr' => array(
          'class' => 'form-control'
        )
      ))
      ->add('duree', TextType::class, array(
        'label' => 'Durée (heures)',
        'attr' => array(
          'class' => 'form-control'
        )
      ))
      ->add('date', DateType::class, array(
        'years' => range(2016, 2020),
        'attr' => array(
          'class' => 'form-control'
        ),
        'placeholder' => array(
          'year' => 'Year', 'month' => 'Month', 'day' => 'Day'
        ),
      ));
  }

  /**
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'LGP\CourseBundle\Entity\SeanceDeCours'
    ));
  }
}
