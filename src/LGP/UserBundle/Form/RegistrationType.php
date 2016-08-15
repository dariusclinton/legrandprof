<?php

namespace LGP\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

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
              'widget' => 'single_text',
              'html5'  => false,
              'attr'   => ['class' => 'datepicker']
            ))
            ->add('sexe', ChoiceType::class, array(
              'choices' => array(
                'Masculin' => 'm',
                'Féminin' => 'f'
              )
            ))
            ->add('numTelephone', TextType::class)
            ->add('pays', CountryType::class)
            ->add('photo', FileType::class)
        ;
    }

    // added for fos
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
