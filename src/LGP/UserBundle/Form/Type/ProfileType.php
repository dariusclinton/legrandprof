<?php

namespace LGP\UserBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use LGP\UserBundle\Form\ImageType;

class ProfileType extends AbstractType {
  
  public function buildForm(FormBuilderInterface $builder, array $options) {
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
        ->add('image', ImageType::class, array(
          'required' => false
        ))
    ;
  }
  
  public function getParent() {
    return 'FOS\UserBundle\Form\Type\ProfileFormType';
  }
  
  public function getBlockPrefix() {
    return 'lgp_user_profile';
  }
  
  public function getName() {
    return $this->getBlockPrefix();
  }
}
