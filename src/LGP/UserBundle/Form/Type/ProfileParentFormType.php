<?php

namespace LGP\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ProfileParentFormType extends AbstractType {
  
  public function buildForm(FormBuilderInterface $builder, array $options) {
    
  }
  
  public function getParent() {
    return 'LGP\UserBundle\Form\Type\ProfileType';
  }
  
  public function getBlockPrefix()
  {
      return 'lgp_parent_profile';
  }

  // For Symfony 2.x
  public function getName()
  {
      return $this->getBlockPrefix();
  }
}