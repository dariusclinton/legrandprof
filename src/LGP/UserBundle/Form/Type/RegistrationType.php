<?php

namespace LGP\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class RegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenoms', TextType::class, array(
              'required' => false
            ))
            ->add('dateNaissance', BirthdayType::class, array(
              'widget' => 'choice',
              'years'  => range(1950, 2005),
            ))
            ->add('sexe', ChoiceType::class, array(
              'choices' => array(
                'Masculin' => 'm',
                'Féminin' => 'f'
              )
            ))
            ->add('numTelephone', TextType::class)
            ->add('pays', CountryType::class)
        ;
    }

    // added for fos
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'lgp_user_registration';
    }
}
