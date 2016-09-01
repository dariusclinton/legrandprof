<?php

namespace LGP\CourseBundle\Form;

use Symfony\Component\Form\AbstractType;
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
            ->add('resume', TextareaType::class)
            ->add('date', DateType::class, array(
              'years' => range(2016, 2016)
            ))
            ->add('jourDeCours', EntityType::class, array(
              'class' => 'LGPReservationBundle:JourDeCours',
              'choice_label' => 'intitule',
              'multiple'     => false,
              'placeholder'  => '--'
            ))
        ;
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
