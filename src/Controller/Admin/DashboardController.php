<?php

namespace App\Controller\Admin;

use App\Entity\Question;
use App\Entity\Lhack;
use App\Entity\Favorite;
use App\Entity\Lhacksug;
use App\Entity\Result;
use App\Entity\Rools;
use App\Entity\Tasks;
use App\Entity\User;
use App\Entity\Video;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //  return parent::index();
         $routeBuilder = $this->container->get(AdminUrlGenerator::class);
         $url = $routeBuilder->setController(QuestionCrudController::class)->generateUrl();

         return $this->redirect($url);

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ОГЭ')
            // ->setLocales('ru')
            ;
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        //  yield MenuItem::linktoRoute('На главную', 'fas fa-home', 'homepage');
         yield MenuItem::linkToCrud('Вопросы', 'fas fa-map-marker-alt', Question::class);
         yield MenuItem::linkToCrud('Лайфхаки', 'fas fa-comments', Lhack::class);
         yield MenuItem::linkToCrud('Предложеннные лайфхаки', 'fas fa-comments', Lhacksug::class);
         yield MenuItem::linkToCrud('Правила', 'fas fa-comments', Rools::class);
         yield MenuItem::linkToCrud('Задания', 'fas fa-comments', Tasks::class);
         yield MenuItem::linkToCrud('Видео', 'fas fa-comments', Video::class);
         yield MenuItem::linkToCrud('Пользователи', 'fas fa-comments', User::class);
         yield MenuItem::linkToCrud('Избранное', 'fas fa-comments', Favorite::class);
         yield MenuItem::linkToCrud('Результаты', 'fas fa-comments', Result::class);
    }
}
