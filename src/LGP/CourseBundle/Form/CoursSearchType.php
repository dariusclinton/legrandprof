<?php

namespace LGP\CourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CoursSearchType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('intitule', TextType::class, array('required' => false,
                     'attr' => array('placeholder' => 'Que voulez-vous apprendre?')))
        ;
    }

    public function getName() {
        return 'course_search_form';
    }

}
