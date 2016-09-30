<?php

namespace LGP\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class RegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('username')
            ->add('nom', TextType::class)
            ->add('prenoms', TextType::class, array(
              'required' => false
            ))
            ->add('sexe', ChoiceType::class, array(
              'choices' => array(
                  'Masculin' => 'Masculin',
                  'Féminin'  => 'Féminin'
              ),
              'placeholder' => 'Sexe'
            ))
            ->add('pays', CountryType::class, array(
              'placeholder' => 'Pays',
            ))
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
