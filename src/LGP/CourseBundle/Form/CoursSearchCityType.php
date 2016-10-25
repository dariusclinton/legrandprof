<?php

namespace LGP\CourseBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CoursSearchCityType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ville', EntityType::class, array(
                    'class' => 'LGPUserBundle:Quartier',
                    'choice_label' => function ($quartier) {
                        return $quartier->getVille();
                    },
                    'choice_value' => 'ville',
                    'required' => true,
                    'placeholder' => 'Sélectionnez une ville'
                )
            );
    }

    public function getName()
    {
        return 'course_search_city_form';
    }

}
