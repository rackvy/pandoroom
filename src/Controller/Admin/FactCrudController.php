<?php

namespace App\Controller\Admin;

use App\Entity\Fact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fact::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('факт')
            ->setEntityLabelInPlural('Факты')
            ->setSearchFields(['name'])
            ->setDefaultSort(['name' => 'DESC'])
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('name')->setLabel('Заголовок');
        yield TextEditorField::new('text')->hideOnIndex()->setLabel('Текст');
    }

        /*
        public function configureFields(string $pageName): iterable
        {
            return [
                IdField::new('id'),
                TextField::new('title'),
                TextEditorField::new('description'),
            ];
        }
        */
}
