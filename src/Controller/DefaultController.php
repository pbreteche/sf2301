<?php

namespace App\Controller;

use App\Service\CalendarInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    #[IsGranted('IS_AUTHENTICATED')]
    public function index(CalendarInterface $calendar): Response
    {
        $today = new \DateTimeImmutable('today');

        return $this->render('default/index.html.twig', [
            'today' => $today,
            'is_working_day' => $calendar->isWorkingDay($today),
        ]);
    }
}
