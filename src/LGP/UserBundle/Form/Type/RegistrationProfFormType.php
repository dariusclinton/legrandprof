<?php

namespace LGP\UserBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationProfFormType extends \Symfony\Component\Form\AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enseignements', CollectionType::class, array(
                'entry_type' => 'LGP\CourseBundle\Form\EnseignementType',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false
            ))
            ->add('quartierCibles', EntityType::class, array(
                'class' => 'LGPUserBundle:Quartier',
                'choice_label' => 'intitule',
                'multiple' => true,
//                'expanded' => true,
                'group_by' => function($val, $key, $index) {
                    if ($val->getVille() === 'Douala') {
                        return 'Douala';
                    } else if ($val->getVille() === 'Yaounde') {
                        return  'Yaounde';
                    }
                }
            ))
            ->add('presentation', TextareaType::class, array(
                'attr' => array(
                    'rows' => 10,
                    'cols' => 30,
                    'maxlength' => 700
                )
            ))
            ->add('telephone', TextType::class, array())
            
            ;
    }

    public function getParent()
    {
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
