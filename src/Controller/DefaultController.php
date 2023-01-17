<?php

namespace App\Controller;

use App\Service\Calendar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_default")
     */
    public function index(Calendar $calendar): Response
    {
        $today = new \DateTimeImmutable('today');

        return $this->render('default/index.html.twig', [
            'today' => $today,
            'is_working_day' => $calendar->isWorkingDay($today),
        ]);
    }
}
