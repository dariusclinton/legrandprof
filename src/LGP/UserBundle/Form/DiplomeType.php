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
                'BTS' => 'BTS',
                'DUT' => 'DUT',
                'Licence' => 'Licence',
              ),
              'placeholder' => '--'
            ))
            ->add('specialite', ChoiceType::class, array(
              'choices' => array(
                'C'  => 'C',
                'Physique'  => 'Physique',
                'Chimie'  => 'Chimie',
                'SVT'  => 'SVT',
                'Informatique'  => 'Informatique',
              ),
              'placeholder' => '--'
            ))
            ->add('annee', ChoiceType::class, array(
              'choices' => array(
                '1999' => '1999',
                '2000' => '2000',
                '2001' => '2001',
                '2002' => '2002',
                '2003' => '2003',
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
