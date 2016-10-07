<?php

namespace LGP\ReservationBundle\Form;

use LGP\CourseBundle\Form\ProgrammeDeCoursType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ReservationEnseignementType extends AbstractType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('isFinish', 'checkbox', array(
        'required' => false
      ))
      ->add('joursDeCours', EntityType::class, array(
        'class' => 'LGPReservationBundle:JourDeCours',
        'choice_label' => 'intitule',
        'multiple' => true,
        'expanded' => true,
      ))
      ->add('programmeDeCours', ProgrammeDeCoursType::class);
  }

  /**
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'LGP\ReservationBundle\Entity\ReservationEnseignement'
    ));
  }
}
