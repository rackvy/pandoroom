<?php

namespace App\Controller\Admin;

use App\Entity\Quest2;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class Quest2CrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Quest2::class;
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
