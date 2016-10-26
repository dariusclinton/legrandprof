<?php

namespace LGP\UserBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;


class MessageType extends AbstractType
{
  private $tokenStorage;

  public function __construct(TokenStorageInterface $tokenStorage)
  {
    $this->tokenStorage = $tokenStorage;
  }

  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('objet', TextType::class)
      ->add('contenu', TextareaType::class)
    ;

    // grab the user, do a quick sanity check that one exists
    $user = $this->tokenStorage->getToken()->getUser();
    if (!$user) {
      throw new \LogicException("Une authentification est requise pour envoyer un message");
    }

    $builder->addEventListener(
      FormEvents::PRE_SET_DATA,
      function (FormEvent $event) use ($user) {
        $form = $event->getForm();
        $formOptions = array(
          'class' => 'LGPUserBundle:User',
          'choice_label' => 'affichage',
          'placeholder' => 'Récepteur',
          'query_builder' => function (EntityRepository $er) use ($user) {
            return $er->createQueryBuilder('u')
              ->orderBy('u.nom', 'ASC')
              ->addOrderBy('u.prenoms', 'ASC')
              ->where('u.email != :email')
              ->setParameter('email', $user->getEmail())
            ;
          },
        );

        $form->add('recepteur', EntityType::class, $formOptions);
      }
    );
  }

  /**
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'LGP\UserBundle\Entity\Message'
    ));
  }
}
