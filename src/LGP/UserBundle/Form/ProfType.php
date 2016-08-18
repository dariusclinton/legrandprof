<?php

namespace LGP\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use LGP\UserBundle\Form\RegistrationType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ProfType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('ville', TextType::class)
//            ->add('quartier', TextType::class)
//            ->add('boitePostale', TextType::class)
//            ->add('situationMatrimoniale', ChoiceType::class, array(
//              'choices' => array(
//                'Célibataire' => 'c',
//                'Marié(e)'    => 'm',
//                'Divorcé(e)'  => 'd'
//              )
//            ))
//            ->add('niveauScolaire', ChoiceType::class, array(
//              'choices' => array(
//                'Bacc' => 'Bacc',
//                'Bacc + 1' => 'Bacc_1',
//                'Bacc + 2' => 'Bacc_2',
//                'Licence'  => 'Licence'
//              )
//            ))
//            ->add('nombreEnfants', TextType::class)
//            ->add('presentation', TextareaType::class)
//            ->add('profession', ChoiceType::class, array(
//              'choices' => array(
//                'Etudiant' => 'Etudiant',
//                'PLEG'     => 'PLEG'
//              )
//            ))
            ->add('user', RegistrationType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGP\UserBundle\Entity\Prof'
        ));
    }
}
