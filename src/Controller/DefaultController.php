<?php

namespace App\Controller;

use App\Service\CalendarInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_default")
     */
    public function index(CalendarInterface $calendar): Response
    {
        $today = new \DateTimeImmutable('today');

        // Accès direct au container est déprécié
        // $this->get(CalendarInterface::class);

        return $this->render('default/index.html.twig', [
            'today' => $today,
            'is_working_day' => $calendar->isWorkingDay($today),
        ]);
    }
}
