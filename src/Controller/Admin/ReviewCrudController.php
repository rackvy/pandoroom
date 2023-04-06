<?php

namespace App\Controller\Admin;

use App\Entity\Review;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ReviewCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Review::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('отзыв')
            ->setEntityLabelInPlural('Отзывы')
            ->setSearchFields(['name'])
            ->setDefaultSort(['name' => 'DESC'])
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('name')->setLabel('Заголовок');
        yield TextEditorField::new('text')->hideOnIndex()->setLabel('Текст отзыва');

        yield ChoiceField::new('platform')->setChoices([
            // $value => $badgeStyleName
            '2gis' => '2gis',
            'vl.ru' => 'vl.ru',
            'yandex' => 'yandex',
        ])->setLabel('Платформа отзыва');

        yield ChoiceField::new('stars')->setChoices([
            // $value => $badgeStyleName
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ])->setLabel('Кол-во звёзд');


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
