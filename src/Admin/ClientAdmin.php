<?php declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class ClientAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper) : void
    {
        $formMapper
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) : void
    {
        $datagridMapper
            ->add('id')
            ->add('firstname')
            ->add('lastname')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) : void
    {
        $listMapper
            ->addIdentifier('id')
            ->add('firstname')
            ->add('lastname')
        ;
    }
}
