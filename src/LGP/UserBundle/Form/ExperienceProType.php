<?php

namespace LGP\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ExperienceProType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('etablissement', TextType::class)
            ->add('poste', TextType::class)
            ->add('dateDebut', DateType::class, array(
              'years'       => range(1970, 2016),
              'placeholder' => '--'
            ))
            ->add('dateFin', DateType::class, array(
              'years' => range(1970, 2016),
              'placeholder' => '--'
            ))
            ->add('description', TextareaType::class, array(
              'required' => false
            ))
            // ->add('prof')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGP\UserBundle\Entity\ExperiencePro'
        ));
    }
}
