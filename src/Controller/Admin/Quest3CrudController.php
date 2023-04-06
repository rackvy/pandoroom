<?php

namespace App\Controller\Admin;

use App\Entity\Quest3;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
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

          yield TextField::new('mo')->hideOnIndex()->setLabel('Понедельник (10:00;11:00...)');
          yield TextField::new('tu')->hideOnIndex()->setLabel('Вторник (10:00;11:00...)');
          yield TextField::new('we')->hideOnIndex()->setLabel('Среда (10:00;11:00...)');
          yield TextField::new('th')->hideOnIndex()->setLabel('Четверг (10:00;11:00...)');
          yield TextField::new('fr')->hideOnIndex()->setLabel('Пятница (10:00;11:00...)');
          yield TextField::new('sa')->hideOnIndex()->setLabel('Суббота (10:00;11:00...)');
          yield TextField::new('su')->hideOnIndex()->setLabel('Воскресенье (10:00;11:00...)');

          yield MoneyField::new('mo_price')->hideOnIndex()->setLabel('Цена в Понедельник')->setCurrency('RUB');
          yield MoneyField::new('tu_price')->hideOnIndex()->setLabel('Цена в Вторник')->setCurrency('RUB');
          yield MoneyField::new('we_price')->hideOnIndex()->setLabel('Цена в Среда')->setCurrency('RUB');
          yield MoneyField::new('th_price')->hideOnIndex()->setLabel('Цена в Четверг')->setCurrency('RUB');
          yield MoneyField::new('fr_price')->hideOnIndex()->setLabel('Цена в Пятница')->setCurrency('RUB');
          yield MoneyField::new('sa_price')->hideOnIndex()->setLabel('Цена в Суббота')->setCurrency('RUB');
          yield MoneyField::new('su_price')->hideOnIndex()->setLabel('Цена в Воскресенье')->setCurrency('RUB');

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
