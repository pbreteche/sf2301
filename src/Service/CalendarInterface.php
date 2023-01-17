<?php

namespace App\Service;

interface CalendarInterface
{
    public function isWorkingDay(\DateTimeInterface $date): bool;
}