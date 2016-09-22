<?php

namespace LGP\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class ProfAdmin extends Admin {
  
  protected $baseRoutePattern = 'user/prof';

  protected function configureFormFields(FormMapper $formMapper)
  {
      $formMapper
          ->tab('Informations sur le prof')
            ->add('image', \LGP\UserBundle\Form\ImageType::class)
            ->add('nom', 'text')
            ->add('prenoms', 'text')
            ->add('sexe', 'choice', array(
              'choices' => array(
                'Masculin' => 'Masculin',
                'Féminin'  => 'Féminin'
              )
            ))
            ->add('telephone', 'text')
            ->add('pays', 'country')
            ->add('dateInscription', 'datetime')
            ->add('ville', 'text')
            ->add('boitePostale', 'text')
            ->add('situationMatrimoniale', 'text')
            ->add('nombreEnfants', 'text')
            ->add('isRecommande')
            ->add('presentation', 'textarea')
            ->add('profession', 'text')
            ->add('CVFile', \LGP\UserBundle\Form\CVFileType::class)
          ->end()
        ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
      $datagridMapper
          ->add('nom')
          ->add('prenoms')
        ;
  }

  protected function configureListFields(ListMapper $listMapper)
  {
      $listMapper
          ->addIdentifier('nom')
          ->addIdentifier('prenoms')
          ->add('dateNaissance')
          ->add('sexe')
          ->add('telephone')
          ->add('pays')
          ->add('dateInscription')
          ->add('ville')
          ->add('boitePostale')
          ->add('situationMatrimoniale')
          ->add('niveauScolaire')
          ->add('nombreEnfants')
          ->add('isRecommande')
          ->add('presentation')
          ->add('profession')
          ->add('image.imageName', null, array(
            'label' => 'Image'
          ))
        ;
  }
  
  public function toString($object)
  {
    return $object instanceof \LGP\UserBundle\Entity\Prof
        ? $object->getNom().' '.$object->getPrenoms()
        : 'Prof'; // shown in the breadcrumb on the create view
  }
}
