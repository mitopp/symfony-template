<?php

declare(strict_types=1);

namespace App\Homepage\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomepageController extends AbstractController
{
    #[Route(path: '/', name: 'app_homepage')]
    public function __invoke(): Response
    {
        return $this->render('page/homepage/index.html.twig');
    }
}
