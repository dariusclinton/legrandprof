<?php

namespace LGP\CourseBundle\Form;

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
                ->add('intitule', TextType::class, array('required' => true,
                    'attr' => array('placeholder' => 'Cours')))
                ->add('ville', TextType::class, array('required' => true,
                    'attr' => array('placeholder' => 'Ville')))
        ;
    }

}
