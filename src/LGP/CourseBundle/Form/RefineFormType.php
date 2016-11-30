<?php

namespace LGP\CourseBundle\Form;

use LGP\UserBundle\Repository\QuartierRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RefineFormType extends AbstractType
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
                    'query_builder' => function (QuartierRepository $repository) {
                        return $repository->createQueryBuilder('q')
                            ->groupBy('q.id')
                            ->orderBy('q.id', 'ASC');
                    },
                    'choice_label' => function ($quartier) {
                        return $quartier->getIntitule();
                    },
                    'choice_value' => 'id',
                    'group_by' => 'ville',
                    'required' => false,
                    'placeholder' => 'Sélectionnez un quartier'
                )
            );
    }

    public function getName()
    {
        return 'refine_form_search';
    }

}
