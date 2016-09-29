<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 28/09/16
 * Time: 18:08
 */

namespace LGP\AdminBundle\Admin\User;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class QuartierAdmin extends Admin
{
    protected $baseRoutePattern = 'quartiers-cibles';

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->add('ville', 'choice', array(
                'choices'     => array(
                    'Douala'    => 'Douala',
                    'Yaoundé'   => 'Yaoundé',
                    'Bafoussam' => 'Bafoussam',
                    'Dschang'   => 'Dschang'
                ),
                'placeholder' => '--'
            ))
            ->add('intitule', 'choice', array(
                'choices'     => array(
                    'Bonabéri' => 'Bonabéri',
                    'Bonass'   => 'Bonass',
                    'Bépanda'  => 'Bépanda',
                    'Foto'     => 'Foto',
                    'Famlah'   => 'Famlah',
                    'Foréké'   => 'Foréké',
                ),
                'placeholder' => '--'
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
            ->add('intitule')
            ->add('ville')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
            ->addIdentifier('intitule')
            ->add('ville')
        ;
    }


    public function toString($object)
    {
        return 'QuartierCible'; // shown in the breadcrumb on the create view
    }
}