<?php

namespace App\Controller\Admin;

use App\Entity\Age;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class AgeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Age::class;
    }

//    public function configureCrud(Crud $crud): Crud
//    {
//        return $crud
//            ->setEntityLabelInSingular('Quest age')
//            ->setEntityLabelInPlural('Quest age')
//            ->setSearchFields(['name'])
//            ->setDefaultSort(['name' => 'DESC'])
//        ;
//    }


//    public function configureFields(string $pageName): iterable
//    {
        //yield AssociationField::new('quest3');
//        yield TextField::new('author');
//        yield EmailField::new('email');
//        yield TextareaField::new('text')
//              ->hideOnIndex()
//        ;
//        yield TextField::new('photoFilename')
//              ->onlyOnIndex()
//        ;

//        $createdAt = DateTimeField::new('createdAt')->setFormTypeOptions([
//            'html5' => true,
//            'years' => range(date('Y'), date('Y') + 5),
//            'widget' => 'single_text',
//        ]);
//        if (Crud::PAGE_EDIT === $pageName) {
//            yield $createdAt->setFormTypeOption('disabled', true);
//        } else {
//            yield $createdAt;
//        }
//   }

}
