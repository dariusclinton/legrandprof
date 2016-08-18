<?php

namespace LGP\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UserEditType extends RegistrationType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      parent::buildForm($builder, $options);
      
      $builder->add('file', FileType::class, array(
            'required' => false
          ));
      
      $builder->remove('plainPassword');
    }

}
