<?php

namespace LGP\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationParentFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
      $builder
          ->add('numTelephone', TextType::class)
      ;
    }

    public function getParent() {
      return 'LGP\UserBundle\Form\Type\RegistrationType';
    }
    
    public function getBlockPrefix()
    {
        return 'lgp_parent_registration';
    }
    
    public function getName()
    {
      return $this->getBlockPrefix();
    }
}
