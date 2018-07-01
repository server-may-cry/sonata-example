<?php declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class LegalCaseAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper) : void
    {
        $formMapper
            ->add('caseDescription', TextType::class)
            ->add('legalField', TextType::class)
            ->add('lawyer')
            ->add('client')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) : void
    {
        $datagridMapper
            ->add('id')
            ->add('caseDescription')
            ->add('legalField')
            ->add('lawyer')
            ->add('client')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) : void
    {
        $listMapper
            ->addIdentifier('id')
            ->add('caseDescription')
            ->add('legalField')
            ->add('lawyer')
            ->add('client')
        ;
    }
}
