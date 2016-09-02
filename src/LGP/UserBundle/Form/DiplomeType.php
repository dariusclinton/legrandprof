<?php

namespace LGP\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DiplomeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule', ChoiceType::class, array(
              'choices' => array(
                'Bacc' => 'Bacc',
                'Licence' => 'Licence',
              ),
              'placeholder' => '--'
            ))
            ->add('specialite', ChoiceType::class, array(
              'choices' => array(
                'C'  => 'C',
                'Physique'  => 'Physique',
              ),
              'placeholder' => '--'
            ))
            ->add('annee', ChoiceType::class, array(
              'choices' => array(
                '1950' => '1950'
              ),
              'placeholder' => '--'
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGP\UserBundle\Entity\Diplome'
        ));
    }
}
