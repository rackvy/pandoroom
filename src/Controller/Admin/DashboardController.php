<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use App\Entity\Age;
use App\Entity\Banner;
use App\Entity\Category;
use App\Entity\Complexity;
use App\Entity\Fact;
use App\Entity\News;
use App\Entity\Order;
use App\Entity\PeopleCount;
use App\Entity\Quest3;
use App\Entity\Review;
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
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(NewsCrudController::class)->generateUrl();

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
            ->setTitle('Pandoroom Admin Panel');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Панель', 'fa fa-solid fa-gauge');
        yield MenuItem::linktoRoute('Вернуться на сайт', 'fas fa-home', 'api');
        yield MenuItem::linkToCrud('Баннеры', 'fas fa-solid fa-image', Banner::class);
        yield MenuItem::linkToCrud('Факты', 'fas fa-solid fa-pen', Fact::class);
        yield MenuItem::linkToCrud('Новости', 'fas fa-solid fa-newspaper', News::class);
        yield MenuItem::linkToCrud('Отзывы', 'fas fa-solid fa-star', Review::class);
        yield MenuItem::linkToCrud('Бронирование', 'fas fa-solid fa-box', Order::class);
        yield MenuItem::linkToCrud('Квесты', 'fas fa-solid fa-mask', Quest3::class);
        yield MenuItem::linktoRoute('-----------', 'fas', '');
        yield MenuItem::linkToCrud('Возраст', 'fas fa-solid fa-mask', Age::class);
        yield MenuItem::linkToCrud('Жанр', 'fas fa-solid fa-mask', Category::class);
        yield MenuItem::linkToCrud('Сложность', 'fas fa-solid fa-mask', Complexity::class);
        yield MenuItem::linkToCrud('Количество участников', 'fas fa-solid fa-mask', PeopleCount::class);
        yield MenuItem::linktoRoute('-----------', 'fas', '');
        yield MenuItem::linkToCrud('Администраторы', 'fas fa-solid fa-user', Admin::class);

        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
