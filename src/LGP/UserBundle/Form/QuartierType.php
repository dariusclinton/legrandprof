<?php

namespace LGP\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use LGP\UserBundle\Repository\QuartierRepository;

class QuartierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ville', ChoiceType::class, array(
              'choices' => array(
                'Douala'  => 'Douala',
                'Yaounde' => 'Yaounde',
                'Dschang' => 'Dschang'
              )
            ))
        ;
        
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA, 
            function(FormEvent $event) {
              $form = $event->getForm();
              
              $data = $event->getData();
              
              if ($data !== null) {
                $ville = $data->getVille();

                $form->add('intitule', ChoiceType::class, array(
                  'choices' => array(),
                  'query_builder' => function (QuartierRepository $rep) use ($ville) {
                    return $rep->getByVille($ville);
                  }
                ));
              }
            });
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LGP\UserBundle\Entity\Quartier'
        ));
    }
}
