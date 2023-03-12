<?php

namespace App\Controller\Admin;

use App\Entity\Fact;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fact::class;
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
