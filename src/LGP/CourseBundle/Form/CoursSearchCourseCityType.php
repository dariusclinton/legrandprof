<?php

namespace LGP\CourseBundle\Form;

use LGP\UserBundle\Repository\QuartierRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CoursSearchCourseCityType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule', TextType::class, array('required' => false,
                'attr' => array('placeholder' => 'Que voulez-vous apprendre ?', 'class' => 'form-control')))
            ->add('quartier', EntityType::class, array(
                    'class' => 'LGPUserBundle:Quartier',
                    'query_builder' => function (QuartierRepository $repository) {
                        return $repository->createQueryBuilder('q')
                            ->groupBy('q.ville')
                            ->orderBy('q.ville', 'ASC');
                    },
                    'choice_label' => function ($quartier) {
                        return $quartier->getVille();
                    },
                    'choice_value' => 'ville',
                    'required' => false,
                    'placeholder' => 'Sélectionnez une ville'
                )
            );
    }

    public function getName()
    {
        return 'course_city_search_form';
    }

}
