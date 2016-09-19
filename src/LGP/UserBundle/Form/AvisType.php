<?php

namespace LGP\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AvisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('note', TextType::class)
            ->add('commentaire', TextareaType::class, array(
              'required' => false
            ))
            ->add('prof', EntityType::class, array(
              'class'        => 'LGPUserBundle:Prof',
              'choice_label' => 'affichage',
              'multiple'     => false,
              'placeholder'  => '--'
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGP\UserBundle\Entity\Avis'
        ));
    }
}
