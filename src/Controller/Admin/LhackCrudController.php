<?php

namespace App\Controller\Admin;

use App\Entity\Lhack;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class LhackCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lhack::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title');        
        yield TextField::new('url1');
        yield TextField::new('url2');
        yield TextareaField::new('text1');
        yield TextareaField::new('text2')
            ->hideOnIndex()
        ;
        yield TextField::new('url3')
            ->hideOnIndex()
        ;
        /*
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
        */
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Лайфхак')
            ->setEntityLabelInPlural('Лайфхаки')
            ->setSearchFields(['title', 'text1'])
            // ->setDefaultSort(['createdAt' => 'DESC'])
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('lhack'))
        ;
    }
}
