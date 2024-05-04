<?php

namespace App\Controller\Admin;

use App\Entity\Question;
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

class QuestionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Question::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
       
        // yield AssociationField::new('question');
       
        yield TextareaField::new('text1');
        yield TextField::new('url');
        yield TextareaField::new('text2')
            ->hideOnIndex()
        ;
        yield TextField::new('answer');
        
        // $createdAt = DateTimeField::new('createdAt')->setFormTypeOptions([
        //     'years' => range(date('Y'), date('Y') + 5),
        //     'widget' => 'single_text',
        // ]);
        // if (Crud::PAGE_EDIT === $pageName) {
        //     yield $createdAt->setFormTypeOption('disabled', true);
        // } else {
        //     yield $createdAt;
        // }
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Вопрос')
            ->setEntityLabelInPlural('Вопросы')
            ->setSearchFields(['text1', 'text2'])
            // ->setDefaultSort(['createdAt' => 'DESC'])
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('question'))
        ;
    }
}
