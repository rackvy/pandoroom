<?php

namespace App\Controller\Admin;

use App\Entity\Quest3;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;


class Quest3CrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Quest3::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('квест')
            ->setEntityLabelInPlural('Квесты')
            ->setSearchFields(['name'])
            ->setDefaultSort(['name' => 'DESC'])
            ;
    }

    public function configureFields(string $pageName): iterable
    {
          yield TextField::new('name')->setLabel('Название квеста');
          yield TextEditorField::new('description')->hideOnIndex()->setLabel('Описание');
          yield ImageField::new('picture')->setUploadDir('public/uploads/')->setBasePath('/uploads')->setLabel('Основная картинка');
          yield ArrayField::new('more_photos')->hideOnIndex()->setLabel('Дополнительные фотографии');
          yield AssociationField::new('age')->setLabel('Возраст');
          yield AssociationField::new('category')->setLabel('Жанр');
          yield AssociationField::new('complexity')->setLabel('Сложность');
          yield AssociationField::new('people_count')->setLabel('Количество игроков');
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
