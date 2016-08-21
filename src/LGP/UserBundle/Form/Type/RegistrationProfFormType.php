<?php

namespace LGP\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;


class RegistrationProfFormType extends \Symfony\Component\Form\AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {}
  
  public function getParent() {
    return 'LGP\UserBundle\Form\Type\RegistrationType';
  }

  public function getBlockPrefix()
  {
      return 'lgp_prof_registration';
  }

  public function getName()
  {
    return $this->getBlockPrefix();
  }
}
