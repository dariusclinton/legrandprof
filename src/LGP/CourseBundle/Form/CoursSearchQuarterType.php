<?php

namespace LGP\CourseBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CoursSearchQuarterType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quartier', EntityType::class, array(
                    'class' => 'LGPUserBundle:Quartier',
                    'choice_label' => function ($quartier) {
                        return $quartier->getIntitule()." - ".$quartier->getVille();
                    },
                    'choice_value' => 'id',
                    'required' => false,
                    'placeholder' => 'Sélectionnez un quartier'
                )
            );
    }

    public function getName()
    {
        return 'course_search_quarter_form';
    }

}
