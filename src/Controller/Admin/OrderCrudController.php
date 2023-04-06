<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('бронирование')
            ->setEntityLabelInPlural('Бронирования')
            ->setSearchFields(['name'])
            ->setDefaultSort(['name' => 'DESC'])
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('quest')->setLabel('Квест');
        yield DateTimeField::new('date_time')->setLabel('Дата и время');
        yield TextField::new('name')->setLabel('ФИО');
        yield TextField::new('phone')->setLabel('Телефон');
        yield IntegerField::new('count_people')->setLabel('Количество игроков');
        yield BooleanField::new('animator')->setLabel('Аниматор');


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
