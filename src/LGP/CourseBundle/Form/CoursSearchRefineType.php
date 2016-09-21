<?php

namespace LGP\CourseBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CoursSearchRefineType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('intitule', TextType::class, array('required' => false,
                    'attr' => array('placeholder' => 'Cours')))
                ->add('quartier', EntityType::class, array(
                    'class' => 'LGPUserBundle:Quartier',
                    'choice_label' => function($quartier) {
                        return $quartier->getVille();
                    },
                    'choice_value' => 'ville',
                    'required' => false,
                    'placeholder' => 'Sélectionnez une ville'
                        )
                )
        ;
    }

}
