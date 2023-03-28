<?php

namespace App\Controller\Admin;

use App\Entity\PeopleCount;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PeopleCountCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PeopleCount::class;
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
