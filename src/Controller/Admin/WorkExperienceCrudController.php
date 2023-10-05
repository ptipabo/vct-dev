<?php

namespace App\Controller\Admin;

use App\Entity\WorkExperience;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WorkExperienceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WorkExperience::class;
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
