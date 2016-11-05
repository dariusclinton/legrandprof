<?php

namespace LGP\CourseBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CoursSearchProfsNameType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prof_name', TextType::class, array(
                'required' => true,
                'attr' => array('placeholder' => 'Nom ou prenoms')
            ));
    }

    public function getName()
    {
        return 'course_search_prof_name_form';
    }

}
